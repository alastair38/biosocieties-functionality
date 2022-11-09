<?php

/**
 * Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'blockhaus-showcase-grid-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$title = get_field('showcase_title');
$description = get_field('showcase_description');
$link = get_field('showcase_link');

$layout_alt = get_field('layout_alt');

$content = get_field('content_type');
$items = get_field('items');
$columns = get_field('grid_columns');

// Create class attribute allowing for custom "className" and "align" values.
$className = 'blockhaus-showcase-grid';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
if( !empty($block['textColor']) ) {
  $className .= ' has-' . $block['textColor'] . '-color has-text-color';
}

if( !empty($block['backgroundColor']) ) {
  $className .= ' has-' . $block['backgroundColor'] . '-background-color has-background';
}

$content_items = get_posts([
  'post_type' => $content['value'],
  'post_status' => 'publish',
  'numberposts' => $items
  // 'order'    => 'ASC'
]);

?>

<section id="<?php echo $id;?>" class="<?php echo esc_attr($className); ?>" >

<div class="grid gap-6 w-11/12 md:w-4/5 mx-auto py-12 grid-cols-1 md:grid-cols-2 <?php echo 'lg:grid-cols-' . $columns . ' ' ;?>">
  
  <?php 

    if($title && !$layout_alt):?>

    <div class="relative flex items-center text-center p-3 justify-center gap-6 flex-col rounded-md bg-primary-default overflow-hidden shadow-md">
        <?php if($title):?>
          <h2 class="text-xl font-black"><?php echo $title;?></h2>
        <?php endif;?>

        <?php if($description):?>
          <p class="text-secondary"><?php echo $description;?></p>
        <?php endif;?>

        <?php if($link):?>
          <a aria-label="View all <?php echo $content['label'];?> content" class="px-3 font-base py-1 rounded-full text-secondary border-secondary border hover:ring hover:ring-4 hover:ring-yellow-400" href="<?php echo $link; ?>">All <?php echo $content['label'];?></a>
        <?php endif;?>

      </div>
   
   <?php endif;

if($title && $layout_alt):?>

<div class="relative col-span-full text-current flex items-center text-center p-6 justify-center gap-6 flex-col ">
    <?php if($title):?>
      <h2 class="text-gigantic font-black text-current"><?php echo $title;?></h2>
    <?php endif;?>

    <?php if($description):?>
      <p><?php echo $description;?></p>
    <?php endif;?>

</div>

<?php endif;
   foreach($content_items as $item):?>
      <div class="relative flex rounded-md overflow-hidden shadow-md">
        <a class="w-full text-base flex" href="<?php echo get_the_permalink($item->ID);?>">
        <?php echo get_the_post_thumbnail($item->ID, 'portrait', array( 'class' => 'w-full' ));?>
        
         <span class="absolute bottom-2 left-2 right-2 bg-primary-default text-secondary px-1 py-1 lg:py-2" > <?php echo get_the_title($item->ID);?></span>
        </a>
        
      </div>
   <?php endforeach;?>
   <?php if($link && $layout_alt):?>
      <div class="col-span-full p-6">
          <a aria-label="View all <?php echo $content['label'];?> content" class="px-3 flex w-fit mx-auto py-1 rounded-full text-current border-current border hover:ring hover:ring-4 hover:ring-yellow-400" href="<?php echo $link; ?>">View All <?php echo $content['label'];?></a>
      </div>
    <?php endif;?>
    </div>
   </section>