<?php get_header(); ?>
    <?php
    if (have_posts() && get_search_query()) :
      while (have_posts()) :
        the_post();
        // get_template_part('template-parts/post/content', 'excerpt');
      endwhile;
    ?>

    <?php else : ?>
      <div>
        <div>
          <p>検索キーワードに該当する記事がありませんでした。</p>
        </div>
      </div>
    <?php endif; ?>
    

      <main class="archive-main">
        <div class="p-archive-img">
          <h1>Search:<br><span>チーズバーガー</span></h1>
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

        <div class="p-archive-item-1">
          <img class="img-item-1" src="<?php echo esc_url( get_template_directory_uri()); ?>/./image/cheeseburger.png">
          <div class="archive-container">
            <h3>チーズバーガー</h3>
            <h4>小見出しが入ります</h4>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            <button type="button" name="detail">詳しく見る</button>
          </div>
        </div>

        <div class="p-archive-item-2">
         <img class="img-item-2" src="<?php echo esc_url( get_template_directory_uri()); ?>/./image/cheeseburger.png">
          <div class="archive-container">
            <h3>チーズバーガー</h3>
            <h4>小見出しが入ります</h4>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            <button type="button" name="detail">詳しく見る</button>
          </div>
        </div>
        <div class="p-archive-item-3">
          <img class="img-item-3" src="<?php echo esc_url( get_template_directory_uri()); ?>/./image/cheeseburger.png">
          <div class="archive-container">
            <h3>チーズバーガー</h3>
            <h4>小見出しが入ります</h4>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            <button type="button" name="detail">詳しく見る</button>
          </div>
        </div>
        <div class="p-archive-item-4">
          <img class="img-item-4" src="<?php echo esc_url( get_template_directory_uri()); ?>/./image/cheeseburger.png">
          <div class="archive-container">
            <h3>チーズバーガー</h3>
            <h4>小見出しが入ります</h4>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            <button type="button" name="detail">詳しく見る</button>
          </div>
        </div>
        <div class="p-archive-item-5">
          <img class="img-item-5" src="<?php echo esc_url( get_template_directory_uri()); ?>/./image/cheeseburger.png">
          <div class="archive-container">
            <h3>チーズバーガー</h3>
            <h4>小見出しが入ります</h4>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            <button type="button" name="detail">詳しく見る</button>
          </div>
        </div>
        <div class="archive-pagination-pc">
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
        </div>
      </main>

    </div>
 <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>
   