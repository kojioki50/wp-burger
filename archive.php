<?php get_header(); ?>

    <main class="archive-main">
      <div class="p-archive-img">
        <h1>Menu:<br><span><?php $category = get_the_category(); echo $category[0]->cat_name;?></span></h1>
      </div>

        <div class="archive-img-mask"></div>

      <div class="p-archive-section">
        <h2>小見出しが入ります</h2>
        <div class="archive-section-text">
          <p>テキストが入ります。テキストが入ります。
          テキストが入ります。テキストが入ります。
          テキストが入ります。テキストが入ります。
          テキストが入ります。テキストが入ります。
          テキストが入ります。テキストが入ります。
          テキストが入ります。テキストが入ります。
          テキストが入ります。テキストが入ります。
          テキストが入ります。テキストが入ります。
          テキストが入ります。テキストが入ります。
          テキストが入ります。テキストが入ります。
          テキストが入ります。テキストが入ります。
          テキストが入ります。テキストが入ります。
          </p>
        </div>
      </div>

      <?php
              if (have_posts()) :
                while (have_posts()) :
                  the_post();
                  // the_title();
                  // the_content();
                  // the_post_thumbnail('thumbnail'); ?>
                  <!-- // get_template_part('template-parts/post/content', 'excerpt'); -->
              <div class="p-archive-item-1">
              <?php the_post_thumbnail('thumbnail', ['class' => 'img-item-1']); ?>
              <div class="archive-container">
              <h3><?php the_title(); ?></h3>
              <p><?php the_content(); ?></p>
              <button type="button" name="detail">詳しく見る</button>
          </div>
        </div>
                <?php endwhile;
              ?>
          
              <?php else : ?>
              <?php endif; ?>
       
        <!-- <div class="archive-pagination-pc">
          <ul>
            <li><< 前へ</li>
            <li>次へ >></li>
          </ul>
        </div>
        <div class="archive-pagination">
          <ul>
            <li>page 1/10 </li>
            <li> << </li>
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <li>6</li>
            <li>7</li>
            <li>8</li>
            <li>9</li>
            <li> >></li>
          </ul>
        </div> -->
        <div class="archive-pagination">
        <ul>
          <li><?php wp_pagenavi(); ?></li>
        </ul>
      </div>
      </main>

    </div>
 <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>
   