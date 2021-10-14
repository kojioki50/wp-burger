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
  
  <?php $terms = get_the_terms(get_the_ID(), 'genre'); ?>
    <?php if ($terms): ?>
      <ul>
        <?php foreach ($terms as $term): ?>
          <li><a href="<?php echo get_term_link($term); ?>"><?php echo esc_html($term->name);?></a><li>
            <?php endforeach; ?>
            <?php endif; ?>
      </ul>
    <?php get_template_part('template-parts/content',get_post_type());?>
  <?php endwhile;?>
  <?php else : ?>
    <?php endif; ?>
    
    
    
    <!-- <div class="single-container-box">
      <div class="single-container">
        <div class="p-singlemain2-img"></div>
        <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
      </div>
      <div class="single-container">
        <div class="p-singlemain2-img"></div>
        <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
      </div>
    </div> -->
    
    <div class="p-singlemain3-img"></div>
    <div class="cover-imgs">
      <div class="p-singlemaincover-img"></div>
      <div class="p-singlemaincover-img"></div>
      <div class="p-singlemaincover-img"></div>
      <div class="p-singlemaincover-img"></div>
      <div class="p-singlemaincover-img"></div>
      <div class="p-singlemaincover-img"></div>
      <div class="p-singlemaincover-img"></div>
      <div class="p-singlemaincover-img"></div>
      <div class="p-singlemaincover-img"></div>
    </div>
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