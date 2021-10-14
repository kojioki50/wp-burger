
<div class="l-sidebar">
  <h2>Menu</h2>
  <?php
      if ( is_active_sidebar('burger_widget')):
        dynamic_sidebar('burger_widget');
      else:
        ?>
        <h3><?php
            $cat = get_category_by_slug('バーガー');
            $cat_id = $cat->term_id;
            $cat_link = get_category_link($cat_id);?>
            <a href ="<?php echo esc_url($cat_link);?>">バーガー</a>

                

        </h3>

          <?php
          $args = array(
            'theme_location' => 'burger',
            'container' => 'div',
            'menu_class' => 'burger-ul'
          );
          wp_nav_menu($args);
          ?>

        <?php endif; ?>
        <?php
      if ( is_active_sidebar('side_widget')):
        dynamic_sidebar('side_widget');
      else:
        ?>
  
  <h3>
            <?php $cat = get_category_by_slug('サイド');?>
            <?php if($cat): ?>
            
            <?php $cat_id = $cat->term_id;
            $cat_link = get_category_link($cat_id);
            ?>
            <a href ="<?php echo esc_url($cat_link);?>">サイド</a>
            <?php else: ?>
            <?php echo esc_attr('「スラッグにサイドが入っていません」');?>
            <?php endif; ?>
        </h3>

         
        </h3>
        <?php
          $args = array(
            'theme_location' => 'side',
            'container' => 'div',
            'menu_class' => 'burger-ul'
          );
          wp_nav_menu($args);
          ?>
  <?php endif; ?>
  <?php
      if ( is_active_sidebar('drink_widget')):
        dynamic_sidebar('drink_widget');
      else:
        ?>
  <?php endif; ?>
       <h3><?php
            $cat = get_category_by_slug('ドリンク');
            $cat_id = $cat->term_id;
            $cat_link = get_category_link($cat_id);
            ?>
            <a href ="<?php echo esc_url($cat_link);?>">ドリンク</a>
        </h3>
      <?php
          $args = array(
            'theme_location' => 'drink',
            'container' => 'div',
            'menu_class' => 'burger-ul'
          );
          wp_nav_menu($args);
          ?>
      
    </div>
    <span class="l-sidebar-mask"></span>