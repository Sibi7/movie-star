<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package artcraft
 */
?>
<footer class="footer">
    <div class="container">
        <div class="footer__logo">
            <a href="/">
                <img src="<?php bloginfo('template_directory'); ?>/img/logo-footer.png" alt="">
            </a>
        </div>
        <div class="footer__menu">
            <ul>
                <li><a href="#">О нас </a></li>
                <li><a href="#">Портфолио</a></li>
                <li><a href="#">Услуги</a></li>
                <li><a href="#">Акции</a></li>
                <li><a href="#">Парики</a></li>
                <li><a href="#">Контакты</a></li>
            </ul>
        </div>
        <div class="footer__social">
            <a href="http://vk.com" target="_blank">
                <i class="fa fa-vk" aria-hidden="true"></i>
            </a>
            <a href="http://instagram.com" target="_blank">
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
        </div>
    </div>

</footer>
<?php wp_footer(); ?>
</body>
</html>
