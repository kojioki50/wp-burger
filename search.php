<?php get_header(); ?>


<main class="archive-main">
  <div class="p-archive-img">
    <div class="p-archive-img-text">
      <h1>Search:<span><?php the_title(); ?></span></h1>
    </div>
    <div class="archive-img-mask"></div>
  </div>
  
  
  <div class="p-archive-section">
    <h2>検索結果一覧</h2>
    <div class="archive-section-text">
      <p>以下のメニューが検索結果として表示されました。<br>
        もう一度検索したい方はページ上の検索フォームで再度検索
        してください。<br>詳細ページへは詳しく見るボタンをクリックしてください。

      </p>
    </div>
  </div>
  
              <?php
              if (have_posts() && get_search_query()) :
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
                <div>
                  <div class="archive-nokeyword">
                    <h2>検索キーワードに該当する記事がありませんでした。</h2>
                  </div>
                </div>
              <?php endif; ?>
       
        
        <?php wp_pagenavi(); ?>
        
       
      </main>

    </div>
 <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>
   