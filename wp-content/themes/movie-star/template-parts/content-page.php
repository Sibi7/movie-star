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

<section id="go_services" class="services">
    <div class="container">

        <div class="services__wrapper">

            <h1>Наши услуги</h1>

            <a href="http://movie-star/wigs/" class="services__wrapper__big-item">
                <img src="<?php bloginfo('template_directory'); ?>/img/services/1.jpg" alt="">
                <ul>
                    <li><span>Продажа париков</span></li>
                </ul>
            </a>

            <a href="hairstyles.html" class="services__wrapper__big-item">
                <img src="<?php bloginfo('template_directory'); ?>/img/services/2.jpg" alt="">
                <ul>
                    <li><span>Наращивание волос</span></li>
                </ul>
            </a>

            <a href="hairdresser.html" class="services__wrapper__item">
                <img src="<?php bloginfo('template_directory'); ?>/img/services/3.jpg" alt="">
                <ul>
                    <li><span>Парикмахерске услуги</span></li>
                </ul>
            </a>

            <a href="http://movie-star/tarining/" class="services__wrapper__item">
                <img src="<?php bloginfo('template_directory'); ?>/img/services/4.jpg" alt="">
                <ul>
                    <li><span>Обучение для мастеров</span></li>
                </ul>
            </a>

            <a href="hairstyles.html" class="services__wrapper__item">
                <img src="<?php bloginfo('template_directory'); ?>/img/services/5.jpg" alt="">
                <ul>
                    <li><span>Макияж</span></li>
                </ul>
            </a>

        </div>
    </div>
</section>

<section class="form">
    <div class="owl-carousel form-slide">
        <div class="form__img">
            <img src="<?php bloginfo('template_directory'); ?>/img/form-bg.png" alt="">
            <div class="form__content">
                <div class="container">
                    <h1>Стрижка за <span>0 рублей</span></h1>
                    <p>
                        Сделайте у нас процедуру "Ботекс для волос"
                        и получите стрижку в подарок
                    </p>
                    <button>Записаться к специалисту</button>
                    <button>Посмотреть прайс</button>
                </div>
            </div>

        </div>
        <div class="form__img">
            <img src="<?php bloginfo('template_directory'); ?>/img/form-img2.jpg" alt="">

            <div class="form__content">
                <div class="container">
                    <h1>Стрижка за <span>0 рублей</span></h1>
                    <p>
                        Сделайте у нас процедуру "Ботекс для волос"
                        и получите стрижку в подарок
                    </p>
                    <button>Записаться к специалисту</button>
                    <button>Посмотреть прайс</button>
                </div>
            </div>
        </div>
        <div class="form__img">
            <img src="<?php bloginfo('template_directory'); ?>/img/form-img3.jpg" alt="">

            <div class="form__content">
                <div class="container">
                    <h1>Стрижка за <span>0 рублей</span></h1>
                    <p>
                        Сделайте у нас процедуру "Ботекс для волос"
                        и получите стрижку в подарок
                    </p>
                    <button>Записаться к специалисту</button>
                    <button>Посмотреть прайс</button>
                </div>
            </div>
        </div>
        <div class="form__img">
            <img src="<?php bloginfo('template_directory'); ?>/img/form-img4.jpg" alt="">

            <div class="form__content">
                <div class="container">
                    <h1>Стрижка за <span>0 рублей</span></h1>
                    <p>
                        Сделайте у нас процедуру "Ботекс для волос"
                        и получите стрижку в подарок
                    </p>
                    <button>Записаться к специалисту</button>
                    <button>Посмотреть прайс</button>
                </div>
            </div>
        </div>
    </div>    
</section>

<section id="go_shares" class="shares">
    <div class="container">
        <h1>Наши акции</h1>
        <div class="shares__wrapper">
            <div class="shares__wrapper__item">
                <div class="shares__wrapper__item__img">
                    <img src="<?php bloginfo('template_directory'); ?>/img/shares/1.jpg" alt="">
                </div>

                <h2>Акция 1</h2>
                <p>
                    При стрижке и окрашивании
                    волос «Olaplex-экспресс»
                </p>
                <button>Записаться к специалисту</button>
                <button>Посмотреть прайс</button>
            </div>
            <div class="shares__wrapper__item">
                <div class="shares__wrapper__item__img">
                    <img src="<?php bloginfo('template_directory'); ?>/img/shares/2.jpg" alt="">
                </div>

                <h2>Акция 2</h2>
                <p>
                    При стрижке и окрашивании
                    волос «Olaplex-экспресс»
                </p>
                <button>Записаться к специалисту</button>
                <button>Посмотреть прайс</button>
            </div>
            <div class="shares__wrapper__item">
                <div class="shares__wrapper__item__img">
                    <img src="<?php bloginfo('template_directory'); ?>/img/shares/3.jpg" alt="">
                </div>
                <h2>Акция 3</h2>
                <p>
                    При стрижке и окрашивании
                    волос «Olaplex-экспресс»
                </p>
                <button>Записаться к специалисту</button>
                <button>Посмотреть прайс</button>
            </div>
        </div>
    </div>
</section>

<section id="go_portfolio" class="portfolio">
    <div class="container">
        <h1>Наши работы</h1>
    </div>

    <div class="portfolio__wrapper">
        <div class="owl-carousel slide-one">
            <div class="portfolio__wrapper__item" style=" width: 372px; ">
                <a href="<?php bloginfo('template_directory'); ?>/img/portfolio/1.jpg" data-lightbox="image-1" data-title="My caption">
                    <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/1.jpg" alt="">
                </a>
            </div>
            <div class="portfolio__wrapper__item" style=" width: 550px; ">
                <a href="<?php bloginfo('template_directory'); ?>/img/portfolio/2.jpg" data-lightbox="image-1" data-title="My caption">
                    <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/2.jpg" alt="">
                </a>
            </div>
            <div class="portfolio__wrapper__item" style="  width: 295px; height: 50%;">
                <a href="<?php bloginfo('template_directory'); ?>/img/portfolio/3.jpg" data-lightbox="image-1" data-title="My caption">
                    <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/3.jpg" alt="">
                </a>
                <a href="<?php bloginfo('template_directory'); ?>/img/portfolio/4.jpg" data-lightbox="image-1" data-title="My caption">
                    <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/4.jpg" alt="">
                </a>
            </div>
            <div class="portfolio__wrapper__item" style="  width: 550px;">
                <a href="<?php bloginfo('template_directory'); ?>/img/portfolio/5.jpg" data-lightbox="image-1" data-title="My caption">
                    <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/5.jpg" alt="">
                </a>
            </div>
            <div class="portfolio__wrapper__item" style=" width: 372px; ">
                <a href="<?php bloginfo('template_directory'); ?>/img/portfolio/1.jpg" data-lightbox="image-1" data-title="My caption">
                    <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/1.jpg" alt="">
                </a>
            </div>
            <div class="portfolio__wrapper__item" style=" width: 550px; ">
                <a href="<?php bloginfo('template_directory'); ?>/img/portfolio/2.jpg" data-lightbox="image-1" data-title="My caption">
                    <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/2.jpg" alt="">
                </a>
            </div>
            <div class="portfolio__wrapper__item" style="  width: 295px; height: 50%;">
                <a href="<?php bloginfo('template_directory'); ?>/img/portfolio/3.jpg" data-lightbox="image-1" data-title="My caption">
                    <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/3.jpg" alt="">
                </a>
                <a href="<?php bloginfo('template_directory'); ?>/img/portfolio/4.jpg" data-lightbox="image-1" data-title="My caption">
                    <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/4.jpg" alt="">
                </a>
            </div>
            <div class="portfolio__wrapper__item" style="  width: 550px;">
                <a href="<?php bloginfo('template_directory'); ?>/img/portfolio/5.jpg" data-lightbox="image-1" data-title="My caption">
                    <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/5.jpg" alt="">
                </a>
            </div>
        </div>
        <button>Записаться к специалисту</button>
        <button>Посмотреть еще работы</button>
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

<section class="about">
    <div class="container">
        <h1>О салоне</h1>
        <div class="about__wrapper">
            <div class="about__wrapper__photo">
                <img src="<?php bloginfo('template_directory'); ?>/img/about.jpg" alt="">
            </div>
            <div class="about__wrapper__text">
                <h2>Наша миссия - Ваша красота</h2>
                <span>“</span>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.
                </p>
                <p>

                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                    est laborum.
                </p>
                <p>
                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                    magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                    quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
                    labore et dolore magnam aliquam quaerat voluptatem.
                </p>
                <span>”</span>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="about__wrapper-item">
            <div class="about__wrapper-item__icons">
                <i>17</i>
                <span>Лет на рынке</span>
            </div>
            <div class="about__wrapper-item__icons">
                <img src="<?php bloginfo('template_directory'); ?>/img/icons/2.png" alt="">
                <span>Отличная репутация</span>
            </div>
            <div class="about__wrapper-item__icons">
                <img src="<?php bloginfo('template_directory'); ?>/img/icons/3.png" alt="">
                <span>
                    Только у нас парики
                    ручной работы
                </span>
            </div>
            <div class="about__wrapper-item__icons">
                <img src="<?php bloginfo('template_directory'); ?>/img/icons/4.png" alt="">
                <span>Удобное <br>
расположение</span>
            </div>
            <div class="about__wrapper-item__icons">
                <img src="<?php bloginfo('template_directory'); ?>/img/icons/5.png" alt="">
                <span>Высококвалифицированные
мастера</span>
            </div>
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
                Хотите получить
                консультацию специалиста?
            </h1>
            <h2>
                Оставьте заявку прямо сейчас
                и мы свяжемся с Вами!
            </h2>
            <form action="#">
                <input type="text" name="name" placeholder="Ваше имя" required>
                <input type="text" name="phone" placeholder="Номер телефона" required>
                <button type="submit">Оставить заявку</button>
            </form>
        </div>
    </div>
</section>
