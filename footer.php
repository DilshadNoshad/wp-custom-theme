<footer class="site-footer">
    <div class="container">
        <div class="copyright">
            <!-- <p>Copyright &copy; - All Rights Reserved</p> -->
             <p><?php echo esc_html(get_theme_mod("set_copyright", __("Copyright &copy; - All Rights Reserved", "iteducation"))) ?></p>
        </div>
        <nav class="footer-menu">
            <?php wp_nav_menu(array("theme_location" => "iteducation_footer_menu", "depth" => 1))?>
        </nav>
    </div>
</footer>
    </div>
    <?php wp_footer()?>
</body>
</html>