<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package artcraft
 */

?>

<?php the_content(); ?>

<section class="why-us">

    <div class="container">

        <h3 class="why-us__title">Почему покупатели выбирают нас?</h3>

        <div class="why-us__wrapper">

            <div class="why-us__wrapper--element">
                <span class="why-us__wrapper--icon"><img src="<?php bloginfo('template_directory'); ?>/img/icons/women-hairstyling-icon.png" alt=""></span>
                <p>Огромный выбор <br>
                    париков</p>
            </div>

            <div class="why-us__wrapper--element">
                <span class="why-us__wrapper--icon"><img src="<?php bloginfo('template_directory'); ?>/img/icons/wallet-icon.png" alt=""></span>
                <p> У нас вы найдете себе <br>
                    парик на любой бюджет</p>
            </div>

            <div class="why-us__wrapper--element">
                <span class="why-us__wrapper--icon"><img src="<?php bloginfo('template_directory'); ?>/img/icons/measuring-icon.png" alt=""></span>
                <p>Можем сделать парик <br>
                    по индивидуальному заказу</p>
            </div>

            <div class="why-us__wrapper--element">
                <span class="why-us__wrapper--icon"><img src="<?php bloginfo('template_directory'); ?>/img/icons/ponytail-hair-icon.png" alt=""></span>
                <p>Гарантия качества. <br>
                    Парики не сыпятся и прослужат <br>
                    вам долго.</p>
            </div>

        </div>

    </div>

</section>

<section id="go_services" class="services">

    <div class="container">

        <div class="services__wrapper">

            <h1>Наши парики</h1>

            <div class="services__wrapper__item">
                <img src="<?php bloginfo('template_directory'); ?>/img/wig-1.png" alt="">
                <ul>
                    <li><span>Славянские парики</span></li>
                </ul>
            </div>

            <div class="services__wrapper__item">
                <img src="<?php bloginfo('template_directory'); ?>/img//wig-2.png" alt="">
                <ul>
                    <li><span>Европейские парики</span></li>
                </ul>
            </div>

            <a href="#" class="services__wrapper__item">
                <img src="<?php bloginfo('template_directory'); ?>/img/wig-3.png" alt="">
                <ul>
                    <li><span>Искусственные парики</span></li>
                </ul>
            </a>

            <div class="services__wrapper__item">
                <img src="<?php bloginfo('template_directory'); ?>/img/wig-4.png" alt="">
                <ul>
                    <li><span>Шиньоны</span></li>
                </ul>
            </div>

            <div class="services__wrapper__item">
                <img src="<?php bloginfo('template_directory'); ?>/img/wig-5.png" alt="">
                <ul>
                    <li><span>Косы</span></li>
                </ul>
            </div>

            <div class="services__wrapper__item">
                <img src="<?php bloginfo('template_directory'); ?>/img/wig-6.png" alt="">
                <ul>
                    <li><span>Трессы</span></li>
                </ul>
            </div>

        </div>
    </div>
</section>

<section id="go_shares" class="shares">

    <div class="container">

        <h1>Наши работы</h1>

        <div class="shares__wrapper">

            <div class="shares__wrapper--photo">
                <img src="<?php bloginfo('template_directory'); ?>/img/wigs-ex-1.png" alt="">
            </div>

            <div class="shares__wrapper--photo">
                <img src="<?php bloginfo('template_directory'); ?>/img/wigs-ex-2.png" alt="">
            </div>

            <div class="shares__wrapper--photo">
                <img src="<?php bloginfo('template_directory'); ?>/img/wigs-ex-3.png" alt="">
            </div>

            <div class="shares__wrapper--photo">
                <img src="<?php bloginfo('template_directory'); ?>/img/wigs-ex-1.png" alt="">
            </div>

            <div class="shares__wrapper--photo">
                <img src="<?php bloginfo('template_directory'); ?>/img/wigs-ex-2.png" alt="">
            </div>

            <div class="shares__wrapper--photo">
                <img src="<?php bloginfo('template_directory'); ?>/img/wigs-ex-3.png" alt="">
            </div>

            <div class="shares__buttons">
                <button class="shares__wrapper--more">Посмотреть все парики</button>
                <button class="shares__wrapper--consult">Посмотреть все парики</button>
            </div>

        </div>
    </div>

</section>

<section class="form">
    <div class="owl-carousel form-slide">
        <div class="form__img">
            <img src="<?php bloginfo('template_directory'); ?>/img/wings-form-bg.png" alt="">
        </div>
    </div>
    <div class="form__content">
        <div class="container">
            <h1>Только в августе</h1>
            <p>
                При покупке парика-укладка парика в подарок
            </p>
            <button>Принять участие в акции</button>
        </div>
    </div>
</section>

<section class="wigs-about">

    <div class="container">

        <h3 class="wigs-about__title">Парики по индивидуальному заказу</h3>

        <div class="wigs-about__wrapper">

            <div class="wigs-about__photo">
                <img src="<?php bloginfo('template_directory'); ?>/img/wigs-maker.png" alt="">
            </div>

            <div class="wigs-about__descr">

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>

                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                    anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                    architecto beatae vitae dicta sunt explicabo.</p>

                <button class="shares__wrapper--more">Посмотреть работы</button>

            </div>

        </div>

        <h3 class="wigs-about__title">Парики изготовленные по индивидуальному заказу</h3>

        <div class="wigs-about__photos">

            <a href="<?php bloginfo('template_directory'); ?>/img/wig-work-1.png" class="wigs-about__photos--element" data-fancybox="gallery">
                <img src="<?php bloginfo('template_directory'); ?>/img/wig-work-1.png" alt="">
            </a>

            <a href="<?php bloginfo('template_directory'); ?>/img/wig-work-2.png" class="wigs-about__photos--element" data-fancybox="gallery">
                <img src="<?php bloginfo('template_directory'); ?>/img/wig-work-2.png" alt="">
            </a>

            <a href="<?php bloginfo('template_directory'); ?>/img/wig-work-3.png" class="wigs-about__photos--element" data-fancybox="gallery">
                <img src="<?php bloginfo('template_directory'); ?>/img/wig-work-3.png" alt="">
            </a>

            <a href="<?php bloginfo('template_directory'); ?>/img/wig-work-4.png" class="wigs-about__photos--element" data-fancybox="gallery">
                <img src="<?php bloginfo('template_directory'); ?>/img/wig-work-4.png" alt="">
            </a>

            <a href="<?php bloginfo('template_directory'); ?>/img/wig-work-5.png" class="wigs-about__photos--element" data-fancybox="gallery">
                <img src="<?php bloginfo('template_directory'); ?>/img/wig-work-5.png" alt="">
            </a>

            <a href="<?php bloginfo('template_directory'); ?>/img/wig-work-1.png" class="wigs-about__photos--element" data-fancybox="gallery">
                <img src="<?php bloginfo('template_directory'); ?>/img/wig-work-1.png" alt="">
            </a>

            <a href="<?php bloginfo('template_directory'); ?>/img/wig-work-2.png" class="wigs-about__photos--element" data-fancybox="gallery">
                <img src="<?php bloginfo('template_directory'); ?>/img/wig-work-2.png" alt="">
            </a>

            <a href="<?php bloginfo('template_directory'); ?>/img/wig-work-3.png" class="wigs-about__photos--element" data-fancybox="gallery">
                <img src="<?php bloginfo('template_directory'); ?>/img/wig-work-3.png" alt="">
            </a>

            <a href="<?php bloginfo('template_directory'); ?>/img/wig-work-4.png" class="wigs-about__photos--element" data-fancybox="gallery">
                <img src="<?php bloginfo('template_directory'); ?>/img/wig-work-4.png" alt="">
            </a>

            <a href="<?php bloginfo('template_directory'); ?>/img/wig-work-5.png" class="wigs-about__photos--element" data-fancybox="gallery">
                <img src="<?php bloginfo('template_directory'); ?>/img/wig-work-5.png" alt="">
            </a>

            <a href="<?php bloginfo('template_directory'); ?>/img/wig-work-1.png" class="wigs-about__photos--element" data-fancybox="gallery">
                <img src="<?php bloginfo('template_directory'); ?>/img/wig-work-1.png" alt="">
            </a>

            <a href="<?php bloginfo('template_directory'); ?>/img/wig-work-2.png" class="wigs-about__photos--element" data-fancybox="gallery">
                <img src="<?php bloginfo('template_directory'); ?>/img/wig-work-2.png" alt="">
            </a>

            <a href="<?php bloginfo('template_directory'); ?>/img/wig-work-3.png" class="wigs-about__photos--element" data-fancybox="gallery">
                <img src="<?php bloginfo('template_directory'); ?>/img/wig-work-3.png" alt="">
            </a>

            <a href="<?php bloginfo('template_directory'); ?>/img/wig-work-4.png" class="wigs-about__photos--element" data-fancybox="gallery">
                <img src="<?php bloginfo('template_directory'); ?>/img/wig-work-4.png" alt="">
            </a>

            <a href="<?php bloginfo('template_directory'); ?>/img/wig-work-5.png" class="wigs-about__photos--element" data-fancybox="gallery">
                <img src="<?php bloginfo('template_directory'); ?>/img/wig-work-5.png" alt="">
            </a>

        </div>

        <div class="shares__buttons">
            <button class="shares__wrapper--more">Посмотреть все работы</button>
            <button class="shares__wrapper--consult">Получить консультацию</button>
        </div>

    </div>

</section>

<section class="reviews">
    <div class="container">
        <h1>Отзывы наших клиентов</h1>
        <div class="reviews__wrapper">

            <div id="slider" class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="reviews__wrapper__photo">
                            <img src="<?php bloginfo('template_directory'); ?>/img/photo1.jpg" alt="">
                        </div>
                        <div class="reviews__wrapper__content">
                            <h2>Несмелов Кирилл</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                ut
                                aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur.

                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="reviews__wrapper__photo">
                            <img src="<?php bloginfo('template_directory'); ?>/img/photo1.jpg" alt="">
                        </div>
                        <div class="reviews__wrapper__content">
                            <h2>Несмелов Кирилл</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                ut
                                aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur.

                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="reviews__wrapper__photo">
                            <img src="<?php bloginfo('template_directory'); ?>/img/photo1.jpg" alt="">
                        </div>
                        <div class="reviews__wrapper__content">
                            <h2>Несмелов Кирилл</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                ut
                                aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur.

                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="reviews__wrapper__photo">
                            <img src="<?php bloginfo('template_directory'); ?>/img/photo1.jpg" alt="">
                        </div>
                        <div class="reviews__wrapper__content">
                            <h2>Несмелов Кирилл</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                ut
                                aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur.

                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="reviews__wrapper__photo">
                            <img src="<?php bloginfo('template_directory'); ?>/img/photo1.jpg" alt="">
                        </div>
                        <div class="reviews__wrapper__content">
                            <h2>Несмелов Кирилл</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                ut
                                aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur.

                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="reviews__wrapper__photo">
                            <img src="<?php bloginfo('template_directory'); ?>/img/photo1.jpg" alt="">
                        </div>
                        <div class="reviews__wrapper__content">
                            <h2>Несмелов Кирилл</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                labore
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                ut
                                aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur.

                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="carousel" class="flexslider">
                <ul class="slides">
                    <li>
                        <img src="<?php bloginfo('template_directory'); ?>/img/reviews/1.png" />
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_directory'); ?>/img/reviews/1.png" />
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_directory'); ?>/img/reviews/1.png" />
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_directory'); ?>/img/reviews/1.png" />
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_directory'); ?>/img/reviews/1.png" />
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_directory'); ?>/img/reviews/1.png" />
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="we-do">

    <div class="container">

        <h3 class="we-do__title">Что еще мы делаем</h3>

        <div class="we-do__wrapper">

            <a class="we-do__wrapper--element" href="#">
                <div class="we-do__wrapper--img">
                    <img src="<?php bloginfo('template_directory'); ?>/img/we-do-1.png" alt="">
                    <div class="we-do__wrapper--hover">
                        <span class="icon">
                            <img src="<?php bloginfo('template_directory'); ?>/img/icons/hover-show-icon.png" alt="">
                        </span>
                        <p>Подробнее</p>
                    </div>
                </div>

                <p class="we-do__wrapper--descr">Стрижка и укладка <br>
                    париков</p>

            </a>

            <a class="we-do__wrapper--element" href="#">
                <div class="we-do__wrapper--img">
                    <img src="<?php bloginfo('template_directory'); ?>/img/we-do-2.png" alt="">
                    <div class="we-do__wrapper--hover">
                        <span class="icon">
                            <img src="<?php bloginfo('template_directory'); ?>/img/icons/hover-show-icon.png" alt="">
                        </span>
                        <p>Подробнее</p>
                    </div>
                </div>

                <p class="we-do__wrapper--descr">Ремонт париков</p>

            </a>

            <a class="we-do__wrapper--element" href="#">
                <div class="we-do__wrapper--img">
                    <img src="<?php bloginfo('template_directory'); ?>/img/we-do-3.png" alt="">
                    <div class="we-do__wrapper--hover">
                        <span class="icon">
                            <img src="<?php bloginfo('template_directory'); ?>/img/icons/hover-show-icon.png" alt="">
                        </span>
                        <p>Подробнее</p>
                    </div>
                </div>

                <p class="we-do__wrapper--descr">Уход и окрашивание <br>
                    париков</p>

            </a>

        </div>

    </div>

</section>

<section id="go_contacts" class="contacts">
    <div class="contacts__wrapper">
        <iframe src="https://yandex.ua/map-widget/v1/?um=constructor%3A31d07d61731fdd0a2cacfe5decb0915d13d80feffb4cfff61110e250cf3a11cb&amp;lang=ru_UA&amp;scroll=true&amp;source=constructor" width="100%" height="685" frameborder="0"></iframe>
    </div>
    <div class="contacts__wrapper">
        <div class="contacts__wrapper__absolute">
            <img src="<?php bloginfo('template_directory'); ?>/img/c-abs.png" alt="">
        </div>
        <div class="contacts__wrapper__content">
            <h1>
                Приходит к нам в салон</h1>
            <h2>
                Только в августе! <br>
                При покупке парика- Укладка парика <br>
                в подарок!
            </h2>
            <form action="#">
                <input type="text" name="name" placeholder="Ваше имя" required>
                <input type="text" name="phone" placeholder="Номер телефона" required>
                <button type="submit">Оставить заявку</button>
            </form>
        </div>
    </div>
</section>
