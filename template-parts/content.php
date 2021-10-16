
<?php
$fields = get_post_custom();

if($fields){
  foreach ($fields as $key => $value){
    if(!(preg_match( "/^_/", $key))){?>
      <div class="single-container-box">
        <div class="single-container-eat-in">
        <?php the_post_thumbnail('medium', ['class' => 'p-single-eat-in-2-img']); ?>
          <p><?php echo $key ?></p>
          <p> <?php echo $value[0] ?> </p>
        </div>
        <div class="single-container-eat-in">
         <?php the_post_thumbnail('medium', ['class' => 'p-single-eat-in-2-img']); ?>
          <p><?php echo $key ?></p>
          <p> <?php echo $value[0] ?> </p>
        </div>
      </div>
<?php
    }
    
  
  }
 
}
?>


