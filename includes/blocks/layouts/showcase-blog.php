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
$id = 'blockhaus-showcase-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$content_items = get_posts([
  'post_type' => 'post',
  'post_status' => 'publish',
  'numberposts' => 1
  // 'order'    => 'ASC'
]);
$comments = get_comments_number($content_items[0]->ID);

// Create class attribute allowing for custom "className" and "align" values.
$className = 'blockhaus-showcase';
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

?>

<section id="<?php echo $id;?>" class="<?php echo esc_attr($className); ?> w-full lg:w-3/4 text-primary-default" >
<div class="flex flex-col lg:flex-row items-center gap-2 justify-between mx-auto <?php echo esc_attr($className); ?>" >
<figure class="w-full flex-1 overflow-hidden relative"><a class="" href="<?php echo get_the_permalink($content_items[0]->ID);?>"><?php echo get_the_post_thumbnail($content_items[0]->ID,'full', array( 'class' => 'w-full rounded-md shadow-md object-contain max-h-[70vh]' ));?>
  <figcaption aria-hidden="true" class="absolute bottom-2 left-0 right-0 top-0 items-center text-gigantic flex justify-center">Blog</figcaption>
  </a>
</figure>

<div class="w-full lg:w-4/5 space-y-2 lg:space-y-6 lg:p-6 self-center flex-1">
<h2 class="font-black text-current text-xl">
<a class="" href="<?php echo get_the_permalink($content_items[0]->ID);?>"><?php echo $content_items[0]->post_title;?></a></h2>
<?php blockhaus_posted_by('italic', $content_items[0]->post_author);?>

  
<p><?php echo $content_items[0]->post_excerpt;?></p> 

<?php

if(comments_open($content_items[0]->ID)):?>
<p class="flex items-center gap-2 italic"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
</svg>
 <?php print ($comments === '1') ? $comments . ' comment' : $comments . ' comments';?></p> 
<?php endif;?>

          
       
</div>

</div>
   </section>