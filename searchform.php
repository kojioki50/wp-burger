<div id="search-wrap">
  <form role="search" method="get" action="<?php echo home_url('/'); ?>">
    <label for="search-text"></label>
    <div class="use_icon">
      <input type="text" value="" name="s" id="search-text" class=input>
    </div>
    <button type="submit" name="" class="c-btn" value="<?php echo the_search_query(); ?>">検索</button>
  </form>
</div>