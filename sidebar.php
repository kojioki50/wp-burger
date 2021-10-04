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
            $cat_link = get_category_link($cat_id);
            ?>
            <a href ="<?php echo esc_url($cat_link);?>">バーガー</a>
        </h3>
        <ul>
          <li>ハンバーガー</li>
          <li>チーズバーガー</li>
          <li>テリヤキバーガー</li>
          <li>アボガドバーガー</li>
          <li>フィッシュバーガー</li>
          <li>ベーコンバーガー</li>
          <li>チキンバーガー</li>
        </ul>
        <?php endif; ?>
        <?php
      if ( is_active_sidebar('side_widget')):
        dynamic_sidebar('side_widget');
      else:
        ?>
  
         <h3><?php
            $cat = get_category_by_slug('サイド');
            $cat_id = $cat->term_id;
            $cat_link = get_category_link($cat_id);
            ?>
            <a href ="<?php echo esc_url($cat_link);?>">サイド</a>
        </h3>
        <ul>
          <li>ポテト</li>
          <li>サラダ</li>
          <li>ナゲット</li>
          <li>コーン</li>
        </ul>
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
      <ul>
        <li>コーラ</li>
        <li>ファンタ</li>
        <li>オレンジ</li>
        <li>アップル</li>
        <li>紅茶 (Ice/Hot)</li>
        <li>コーヒー (Ice/Hot)</li>
      </ul>
      
    </div>
    <span class="l-sidebar-mask"></span>