    <footer id="footer" class="footer">

    </footer>
    <?php 
        wp_footer();
        echo get_field('footer_script', 'option'); 
    ?>
</body>
</html>