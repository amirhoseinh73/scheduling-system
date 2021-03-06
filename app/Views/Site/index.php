
    <header class="header">
        <div class="image-back">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <section class="swiper-slide">
                        <img src="<?= base_url( "../assets/image/slide-1.jpg" )?>" class="w-100 h-100 object-fit-cover object-position-top-rem" alt="" />
                        <div class="header-description">
                            <h1 class="title">مشاوره تلفنی</h1>
                            <p class="description">
                                لورم ایپسوم متن ساختگی با
                                 تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و
                                 متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                                 تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                            </p>
                        </div>
                    </section>
                    <section class="swiper-slide">
                        <img src="<?= base_url( "../assets/image/slide-2.jpg" )?>" class="w-100 h-100 object-fit-cover" alt="" />
                        <div class="header-description">
                            <h1 class="title">پرسش و پاسخ</h1>
                            <p class="description">
                                لورم ایپسوم متن ساختگی با
                                 تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها
                            </p>
                        </div>
                    </section>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
        </div>
    </header>

    <main class="main container">
        <article id="type_advice" class="row mt-5 justify-content-center">
            <section class="col-11 col-sm-12 text-center">
                <h2 class="title big text-dark-2">نوع مشاوره خود را انتخاب کنید</h2>
                <h5 class="title text-dark-4 mt-3">
                    با انتخاب هر یک از موارد زیر، نوبت های خالی مرکز و همچنین هزینه ها را میتوانید مشاهده کنید و نوبت رزرو کنید.
                </h5>
            </section>
            <section class="col-11 col-sm-12 mt-4">
                <div class="row">
                    <section class="col-6 col-sm-6 col-md-3 advice-box" onclick="window.location.href=base_url + '/dashboard'">
                        <div class="parent">
                            <img src="<?= base_url( "assets/icon/advice-meeting.png" )?>" class="image" alt=""/>
                            <h3 class="title">مشاوره حضوری</h3>
                            <p class="description">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                 از طراحان گرافیک است.
                            </p>
                        </div>
                    </section>
                    <section class="col-6 col-sm-6 col-md-3 advice-box" onclick="window.location.href=base_url + '/dashboard'">
                        <div class="parent">
                            <img src="<?= base_url( "assets/icon/advice-phone.png" )?>" class="image" alt=""/>
                            <h3 class="title">مشاوره تلفنی</h3>
                            <p class="description">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                 از طراحان گرافیک است.
                            </p>
                        </div>
                    </section>
                    <section class="col-6 col-sm-6 col-md-3 advice-box" onclick="window.location.href=base_url + '/dashboard/exam'">
                        <div class="parent">
                            <img src="<?= base_url( "/assets/icon/advice-online-exam.png" )?>" class="image" alt=""/>
                            <h3 class="title">آزمون آنلاین</h3>
                            <p class="description">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                 از طراحان گرافیک است.
                            </p>
                        </div>
                    </section>
                    <section class="col-6 col-sm-6 col-md-3 advice-box" onclick="window.location.href=base_url + '/dashboard'">
                        <div class="parent">
                            <img src="<?= base_url( "/assets/icon/advice-faq.png" )?>" class="image" alt=""/>
                            <h3 class="title">پرسش و پاسخ</h3>
                            <p class="description">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                 از طراحان گرافیک است.
                            </p>
                        </div>
                    </section>
                </div>
            </section>
        </article>

        <article id="about_index" class="row mt-5 mt-sm-6 justify-content-center">
            <section class="col-11 col-sm-12 text-center mb-3 mb-sm-0">
                <h5 class="title small text-color-3">درباره ما</h5>
                <h2 class="title big text-dark-2 mt-3">مرکز مشاوره کیمیای مهر چه موارد خاصی نسبت به سایر مراکز دارد؟</h2>
            </section>
            <section class="col-11 col-sm-12 mt-2 mt-md-6">
                <div class="row">
                    <section class="col-12 col-md-5 about-index-image">
                        <img src="<?= base_url( "/assets/image/about-index.jpg" ) ?>" class="w-100 h-100 object-fit-cover rounded-3" />
                    </section>
                    <section class="col-12 col-md-7 about-index-description mt-4 mt-md-0">
                        <h5 class="title big text-dark-1 mt-2 mb-4">خدمات مرکز</h5>
                        <p class="description text-dark-2">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                             از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
                              در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
                              و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                        </p>
                        <p class="description text-dark-2">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                             از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
                              در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
                              و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                        </p>
                        <p class="description text-dark-2">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                             از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
                              در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
                              و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                        </p>
                    </section>
                </div>
            </section>
        </article>
    </main>

    <article id="blog" class="mt-5 container">
        <div class="row">
            <div class="col-12">
                <h3 class="title big text-dark-2"><?= $blog->title_head ?></h3>
            </div>
        </div>
        <div class="row mt-4">
            <?php 
                if ( exists( $blog->data ) && is_array( $blog->data ) ) :
                    foreach( $blog->data as $datum ) :
                        echo render_page( "Template/blog-card", (array)$datum );
                    endforeach;
                endif;
            ?>
        </div>
    </article>