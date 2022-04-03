<article class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">لیست کابران</h4>

                <button id="btn_user_create" type="button" class="btn btn-success px-5 waves-effect waves-light mb-4 ml-auto d-block">ایجاد</button>
                
                <div class="table-responsive">
                    <table class="table table-centered table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">نام</th>
                                <th scope="col">نام خانوادگی</th>
                                <th scope="col">ایمیل</th>
                                <th scope="col">وضعیت</th>
                                <th scope="col">جنسیت</th>
                                <th scope="col">سن</th>
                                <th scope="col">ادمین</th>
                                <th scope="col">تصویر</th>
                                <th scope="col">آخرین بازگردانی رمز عبور</th>
                                <th scope="col">آخرین ورود</th>
                                <th scope="col">زمان ایجاد</th>
                                <th scope="col">زمان آخرین به روز رسانی</th>
                                <th scope="col">عملیات</th>
                            </tr>
                        </thead>
                        <tbody id="list_user">
                            
                        </tbody>
                    </table>

                </div>

                <div class="mt-3 paginate-selector">
                    <ul class="pagination pagination-rounded justify-content-center mb-0">
                        <li class="page-item previous">
                            <a class="page-link" href="javascript:void(1)">قبلی</a>
                        </li>

                        <li class="page-item next">
                            <a class="page-link" href="javascript:void(1)">بعدی</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</article>