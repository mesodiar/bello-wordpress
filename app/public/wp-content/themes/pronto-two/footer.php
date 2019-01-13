    <footer>
        <p> This is footer </p>
        <p><?php do_action( 'print_credits', 'Website by Pronto' ); ?></p>
        <p><?php echo apply_filters( 'replace_pronto_to_me', 'Website by Pronto'); ?></p>
        <p><?php  //global $wp_filter; var_dump($wp_filter); ?></p>
    </footer>
<?php wp_footer(); ?>

</body>
</html>
