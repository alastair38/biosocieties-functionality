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
$id = 'blockhaus-latest-edition-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$title = get_field('latest_title');
$description = get_field('latest_description');


// Create class attribute allowing for custom "className" and "align" values.
$className = 'blockhaus-latest-edition';
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
  'post_type' => 'journal_editions',
  'post_status' => 'publish',
  'numberposts' => 1
  // 'order'    => 'ASC'
]);

if($content_items):
?>

<section id="<?php echo $id;?>" class="<?php echo esc_attr($className); ?> wp-block-group w-full lg:w-1/3" >

  <div class="wp-block-group flex flex-col gap-6 p-6 lg:p-12 bg-white/80 shadow-md rounded-md"> 
    <InnerBlocks />
 <?php if($description):?>
  
    <p class="text-center italic"><?php echo $description;?></p>
  
<?php endif;?>

    
        <a href="<?php echo get_field('external_link', $content_items[0]->ID);?>" class="bg-primary-default px-3 py-1 rounded-full w-fit mx-auto hover:ring-4 hover:ring-offset">
        View latest edition
        </a>
    
  
    </div>

  
</section>

<?php endif;?>
