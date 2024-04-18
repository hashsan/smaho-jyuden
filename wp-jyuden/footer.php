    <footer>
        <?php
        // `wi_footer` ウィジェットエリアを表示
        if (is_active_sidebar('wi_footer')) {
            dynamic_sidebar('wi_footer');
        }
        ?>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
