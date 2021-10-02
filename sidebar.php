<div class="l-sidebar">
  <h2>Menu</h2>
  <?php
      if ( is_active_sidebar('burger_widget')):
        dynamic_sidebar('burger_widget');
      else:
        ?>
        <h3>バーガー</h3>
        <ul>
          <li>ハンバーガー</li>
          <li>
            <a href="<?php echo esc_url( home_url('/cheeseburger') ); ?>">チーズバーガー</a>
            </li>
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
  
        <h3>サイド</h3>
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
      <h3>ドリンク</h3>
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