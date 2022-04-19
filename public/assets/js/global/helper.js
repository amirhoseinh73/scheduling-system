function doc_ready(fn) {
    // see if DOM is already available
    if (document.readyState === "complete" || document.readyState === "interactive") {
        // call on next available tick
        setTimeout(fn, 1);
    } else {
        document.addEventListener("DOMContentLoaded", fn);
    }
}

/**
 * @param {string} url
 * @param {function} success_function
 * @param {object} data { method, headers, data }
 */
async function ajax_fetch( url, success_function, data ) {
    document.body.insertAdjacentHTML( "beforeend", html_loading() );
    const form_data = new FormData();
    if ( data.method.toUpperCase() === "POST" ) {
        for ( const key in data.data ) {
            form_data.append( key , data.data[key] );
        }
    }
    return fetch( url , {
        method:  data.method,
        // headers: _data.headers,
       ...( ( data.method.toUpperCase() === "POST" ) && { body: form_data } ),
    } )
    .then( ( response ) => response.json() )
    .then( ( response ) => {
        document.getElementById( "preloader" ).remove();
        return success_function( response );
    } )
    .catch( ( error ) => {
        // document.getElementById( "preloader" ).remove();
        console.error( 'Error:', error );
    } );
}

function alert_html_ltr( type = "danger", message = "", id = "" ) {
    return `<div id="${id}" class="alert alert-${type} dir-ltr text-start transition-alert">
    ${message}
    </div>`;
}

function alert_html_rtl( type = "danger", message = "", id = "" ) {
    return `<div id="${id}" class="alert alert-${type} dir-rtl text-end transition-alert">
    ${message}
    </div>`;
}

/**
 * @param {array|object} _data array of object
 * @returns {string} html
 */
function table_row_html( _data ) {
    if ( ! _data ) return;
    if ( typeof _data === "object" ) {
        for ( const key in _data ) {
            if ( key === "all_packages" ) {
                AllPackages = _data[key];
                continue;
            }
            if ( key === "all_heads" ) {
                AllHeads = _data[key];
                continue;
            }
            if ( key === "all_users" ) {
                AllUsers = _data[key];
                continue;
            }
        }
        delete _data.all_packages;
        delete _data.all_heads;
        delete _data.all_users;
        _data = Object.values(_data);
    }
    return _data.map( ( _value, _index, _array ) => {
        let html = "";
        let ID;
        html += `<tr class="table-item-parent"><td>${_index + 1}</td>`;
        for ( const _key in _value ) {
            if ( _key === "ID" ) {
                ID = _value[_key];
                continue;
            };
            if ( _key === "image" ) html += `<td><img width="75" height="75" src="${_value[_key]}" /></td>`;
            else if ( _key === "package_ID" || _key === "head_ID" ) html += `<td class="d-none" data-key="${_key}">${_value[_key]}</td>`;
            //for active packages in license
            else if ( _value[_key] instanceof Array ) {
                html += `<td data-key="${_key}">`;
                _value[_key].forEach( value => {
                    html += `<span data-id="${value.ID}" class="badge badge-secondary mx-1">${value.name}</span>`;
                } );
                html +=`</td>`;
            }
            else html += `<td data-key="${_key}">${_value[_key]}</td>`;
        }
        html += `<td>
        <button type="button" class="btn btn-info waves-effect waves-light btn-block btn-edit" data-id="${ID}">ویرایش</button>
        <button type="button" class="btn btn-danger waves-effect waves-light btn-block btn-remove" data-id="${ID}">حذف</button>
        </td>
        </tr>`;
        return html;
    } ).join('\n');
}


function url_param() {
    return new URLSearchParams(window.location.search);
}

function history_url( _data ) {
    window.history.pushState({"html":_data.html,"pageTitle":_data.pageTitle},"", _data.url);
}

function sweet_alert_confirm( data, callback = () => {} ) {
    Swal.fire({
        title: data.title,
        text: data.message,
        // type: $type === "error" ? "info" : $type ,
        type: data.type_2,
        confirmButtonText: "بله!",
        cancelButtonText: 'انصراف',
        showCancelButton: true,
        allowOutsideClick: false,   
        allowEscapeKey: false,
        confirmButtonColor: "var(--color-1)",
        cancelButtonColor: "var(--color-3)",
    }).then(function (result) {
        if ( result.value ) {
            callback();
        }
    });
}

function sweet_alert_message( data, callback = () => {} ) {
    Swal.fire({
        title: data.title,
        text: data.message,
        // type: $type === "error" ? "info" : $type ,
        type: data.type_2,
        confirmButtonText: 'باشه',
        showCancelButton: false,
        allowOutsideClick: false,   
        allowEscapeKey: false,
    }).then(function (result) {
        if ( result.value ) {
            callback();
        }
    });
}

if (!String.prototype.format) {
    String.prototype.format = function() {
      let args = arguments;
      return this.replace( /{(\d+)}/g, function( match, number ) { 
        return typeof args[number] !== 'undefined'
          ? args[number]
          : match
        ;
      });
    };
}

function input_text_number() {
    const input = document.querySelectorAll( "input[type='text'][data-type='number']" );
    
    input.forEach( item => {
        item.addEventListener( "keyup", function( event ) {
            if (event.which === 116) window.location.reload();

            if ( (event.which < 48 || event.which > 57)) {
                //  && event.which !== 190
                // event.preventDefault();
                // return false;
                this.value = this.value.replace(/[^\d]+/g,'');
            }
        } );
    } );
}

function html_loading() {
    return `<div id="preloader" style="opacity: 70%">
        <div class="loading">
            <div class="spinner-chase">
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
            </div>
        </div>
    </div>`;
}

function get_day_of_week( year, month, day ) {
    const date = new Date( year, month - 1, day );

    return date.toLocaleDateString( "fa-IR" , {
        weekday: "long",
    });
}

doc_ready( function() {
    input_text_number();

    if ( url_param().has( "error" ) ) {
        const alert_data = {
            message: Alert.error( url_param().get( "error" ) ),
            type_2: "info"
        };
        sweet_alert_message( alert_data );
    }
} );