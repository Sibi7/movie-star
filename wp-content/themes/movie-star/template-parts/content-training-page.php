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

<section class="heirstyles">

    <div class="container">

        <div class="heirstyles__box">

            <div class="heirstyles__box--descr">
                <h3>Прически в Самаре</h3>

                <div class="heirstyles__box--element">

                    <p>Вечерние прически</p>
                    <p><span>2500</span>руб</p>

                </div>

                <div class="heirstyles__box--element">

                    <p>Свадебные прически</p>
                    <p><span>2500</span>руб</p>

                </div>

                <div class="heirstyles__box--element">

                    <p>Локоны</p>
                    <p><span>2500</span>руб</p>

                </div>

                <div class="heirstyles__box--element">

                    <p>Укладки</p>
                    <p><span>2500</span>руб</p>

                </div>

                <div class="shares__buttons">
                    <button class="shares__wrapper--more">Записаться онлайн</button>
                    <button class="shares__wrapper--consult">Получить консультацию</button>
                </div>

            </div>

            <div class="heirstyles__box--photo">
                <img src="<?php bloginfo('template_directory'); ?>/img/heirstyle_banner.png" alt="">
            </div>


        </div>

    </div>

</section>

<section class="shares">

    <div class="container">

        <h1>Наши работы</h1>

        <div class="shares__wrapper">

            <div class="shares__wrapper--photo">
                <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/1.jpg" alt="">
            </div>

            <div class="shares__wrapper--photo">
                <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/3.jpg" alt="">
            </div>

            <div class="shares__wrapper--photo">
                <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/5.jpg" alt="">
            </div>

            <div class="shares__wrapper--photo">
                <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/1.jpg" alt="">
            </div>

            <div class="shares__wrapper--photo">
                <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/3.jpg" alt="">
            </div>

            <div class="shares__wrapper--photo">
                <img src="<?php bloginfo('template_directory'); ?>/img/portfolio/5.jpg" alt="">
            </div>

            <button class="shares__wrapper--more">Посмотреть все работы</button>

        </div>
    </div>

</section>

<section class="about">
    <div class="container">
        <h3>Вчерние и свадебные прически в салоне "Кинозвезда"</h3>
        <div class="about__wrapper">
            <div class="about__wrapper--banner">
                <img src="<?php bloginfo('template_directory'); ?>/img/heirstyle_photo.png" alt="">
            </div>
            <div class="about__wrapper__text">

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>

                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
                    est laborum.</p>

                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                    dicta sunt explicabo.</p>

                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                    magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed
                    quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>


            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</section>

<section class="we-do">

    <div class="container">

        <h3 class="we-do__title">Что еще мы делаем</h3>

        <div class="we-do__wrapper">

            <a class="we-do__wrapper--element" href="#">
                <div class="we-do__wrapper--img">
                    <img src="<?php bloginfo('template_directory'); ?>/img/hair_1.png" alt="">
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
                    <img src="<?php bloginfo('template_directory'); ?>/img/hair_4.png" alt="">
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
                    <img src="<?php bloginfo('template_directory'); ?>/img/shares/3.jpg" alt="">
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

<section class="contacts">
    <div class="contacts__wrapper">
        <iframe src="https://yandex.ua/map-widget/v1/?um=constructor%3A31d07d61731fdd0a2cacfe5decb0915d13d80feffb4cfff61110e250cf3a11cb&amp;lang=ru_UA&amp;scroll=true&amp;source=constructor"
                width="100%" height="685" frameborder="0"></iframe>
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

            </h2>
            <form action="#">
                <input type="text" name="name" placeholder="Ваше имя" required>
                <input type="text" name="phone" placeholder="Номер телефона" required>
                <button type="submit">Оставить заявку</button>
            </form>
        </div>
    </div>
</section>