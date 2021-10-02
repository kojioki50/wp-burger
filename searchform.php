<div id="search-wrap">
  <form role="search" method="get" action="<?php echo home_url('/'); ?>">
    <label for="search-text"></label>
    <input type="text" value="        " name="s" id="search-text" class="use_icon">
    <button type="submit" name="" class="c-btn" value="<?php echo get_search_query(); ?>">検索</button>
  </form>
</div>