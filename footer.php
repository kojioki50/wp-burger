<footer class="l-footer">
    <h4>
      <?php
          $args = array(
            'theme_location' => 'shop-information',
            'container' => 'div',
          );
          wp_nav_menu($args);
          ?>｜ ヒストリー
    </h4>
    <p>&copy;  <?php bloginfo('name'); ?> 2021</p>
</footer>
</body>
<?php wp_footer(); ?>

</html>