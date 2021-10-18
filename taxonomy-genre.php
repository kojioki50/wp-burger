<?php get_header(); ?>

    <main class="archive-main">
      <div class="p-archive-img">
      <div class="p-archive-img-text">
        <h1>EAT-IN </h1>
      </div>

        <div class="archive-img-mask"></div>
      </div>

      <div class="p-archive-section">
        <h2>イートインメニュー</h2>
        <?php $terms = get_terms('genre'); ?>
        <?php if ($terms): ?>
        <ul>
          <?php foreach ($terms as $term): ?>
              <li> <a href="<?php echo get_term_link($term)?>"> <?php echo esc_html($term->name);?></a></li>
              <?php endforeach; ?>
        </ul>
          <?php endif; ?>

        
        <div class="archive-section-text">
          <p>イートインメニュ一覧となっております。こちらでは当該メニューの概要をご覧になることができます。<br>さらに個々のメニューの情報をご覧になりたい場合は
            それぞれの右下の詳しく見るをクリックして下さい。
          </p>
        </div>
      </div>

      <?php
              if (have_posts()) :
                while (have_posts()) :
                  the_post();
                 ?>
              <div class="p-archive-item-1">
              <?php if(has_post_thumbnail()):?>
                <?php the_post_thumbnail('medium', ['class' => 'img-item-1']); ?>
              <?php else:?>
                <img class='img-item-1' src="<?php echo esc_url( get_template_directory_uri()); ?>/./image/cheeseburger.png">
              <?php endif;?>
              <div class="archive-container">
              <h3><?php the_title(); ?></h3>
              <div class="excerpt">
                <?php the_excerpt(); ?>
              </div>
              <a href="<?php the_permalink(); ?>">詳しく見る</a>
               
          </div>
        </div>
                <?php endwhile;
              ?>
          
              <?php else : ?>
              <?php endif; ?>
       
       
         <?php wp_pagenavi();?>
       

  </div>
 <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>
   