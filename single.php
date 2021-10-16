<?php get_header(); ?>

<main>
<?php
if (have_posts()) :
while (have_posts()) :
the_post();
?>
<div class="single-main-top">
  <?php the_post_thumbnail('large', ['class' => 'p-single-img']); ?>
  <h1><?php the_title(); ?></h1>
</div>
<div class="p-single-content">
  <?php the_content(); ?>
  <?php endwhile;?>
  <?php else : ?>
    <?php endif; ?>
    <h3>見出しh3</h3>
    <h4>見出しh4</h4>
    <h4>見出しh5</h4>
    <h4>見出しh6</h4>
    
    <blockquote>
      <p>Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ</p>
      <p>出典元 :<a>◯◯◯◯◯◯◯◯◯◯◯◯◯◯</a></p>
    </blockquote>
    <div class="p-singlemain1-img"></div>
    
    <div class="single-container-box">
      <div class="single-container">
        <div class="p-singlemain2-img"></div>
        <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
      </div>
      <div class="single-container">
        <div class="p-singlemain2-img"></div>
        <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
      </div>
    </div>
    
    <h2>こちらもいかがでしょうか？</h2>
    <section class="cover-imgs">
      <?php
      $args = array(
        'post_type' =>'post',
        'post__not_in' => array($post -> ID),
        'posts_per_page' => 6,
        'orderby' => 'rand'
      );
      $new_query = new WP_Query($args);
      if($new_query->have_posts()): while($new_query->have_posts()):
        $new_query->the_post();
      ?>


      <div class="p-singlemaincover">
      <a href="<?php the_permalink();?>">
        <?php the_post_thumbnail(); ?>
      </a>
      </div>
       

        <?php endwhile;
        wp_reset_postdata();
      else: ?>

        <h3>投稿はありません。</h3>
        <?php endif; ?>
       
     </section>

    <div class="single-list">
      <ol>
        <li>リストリストリスト</li>
        <li>リストリストリスト</li>
      </ol>
      <ol>
        <li>リスト2リスト2リスト2</li>
        <li>リスト2リスト2リスト2</li>
      </ol>
      <ol>
        <li>リストリストリスト</li>
        <li>リストリストリスト</li>
      </ol>
      <ul>
        <li>リストリストリスト</li>
        <li>リストリストリスト</li>
      </ul>
      <ul>
        <li>リスト2リスト2リスト2</li>
        <li>リスト2リスト2リスト2</li>
      </ul>
      <ul>
        <li>リストリストリスト</li>
        <li>リストリストリスト</li>
      </ul>
    </div>
    
    <pre>
      <code>
        
        &lt;html&gt;
        &lt;head&gt;
        &lt;/head&gt;
        &lt;body&gt;
        &lt;/body&gt;
        &lt;/html&gt;
      </code>
    </pre>
    
    <table>
      <tbody>
        <tr>
          <td class="width40">テーブル</td>
          <td class="width60">テーブル</td>
        </tr>
        <tr>
          <td>テーブル</td>
          <td>テーブル</td>
        </tr>
        <tr>
          <td>テーブル</td>
          <td>テーブル</td>
        </tr>
        <tr>
          <td>テーブル</td>
          <td>テーブル</td>
        </tbody>
      </tr>
    </table>
    
    <button>ボタン</button>
    
    <b>boldboldboldboldboldboldbold</b>
  </div>
</div>
  
</main>


<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>