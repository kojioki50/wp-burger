<?php get_header(); ?>

    <main class="archive-main">
      <div class="p-archive-img">
        <div class="p-archive-img-text">
         <h1>Menu:<span><?php $category = get_the_category(); echo $category[0]->cat_name;?></span></h1>
        </div>
        <div class="archive-img-mask"></div>
      </div>


      <div class="p-archive-section">
        <h2>人気のメニュー</h2>
        <div class="archive-section-text">
          <p>メニュ一覧となっております。こちらでは当該メニューの概要をご覧になることができます。<br>さらに個々のメニューの情報をご覧になりたい場合は
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
              <!-- <div class="archive-loop-img"> -->
                <?php the_post_thumbnail('medium', ['class' => 'img-item-1']); ?>
              <!-- </div> -->
              <div class="archive-container">
              <h3><?php the_title(); ?></h3>
              <div class="content">
                <?php the_content(); ?>
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
   