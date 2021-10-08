<footer class="footer__body-wrap">
    <div class="footer__logo-wrap">
        <a href="/mysite">
            <img class="footer__logo footer__logo--white" src="/mySite/wp-content/themes/gouda/theme-template/img/logo-white.png" alt="Studio Gradients">
            <a href="/">
    </div>
    <?php
    wp_nav_menu(
        array(
            'menu' => 'footer',
            'container' => 'footer',
            'theme_location' => 'footer',
            'items_wrap' => '<ul id="footer_menu" class="footer__link-wrap">%3$s</ul>'
        )
    )
    ?>
</footer>
</div>
<?php
wp_footer()
?>
</body>

</html>