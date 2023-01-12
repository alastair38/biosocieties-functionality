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

$template = array(
	
    array( 'core/paragraph', array(
        'content' => 'Biosocieties is committed to the scholarly exploration of the crucial social, ethical and policy implications of developments in the life sciences and biomedicine.',
    ) )
);

$content_items = get_posts([
  'post_type' => 'journal_editions',
  'post_status' => 'publish',
  'numberposts' => 1
  // 'order'    => 'ASC'
]);

if($content_items):
?>

<section id="<?php echo $id;?>" class="<?php echo esc_attr($className); ?> wp-block-group w-full lg:w-1/4" >

  <div class="wp-block-group flex flex-col gap-6 p-6 bg-white/80 shadow-md rounded-md"> 

<!-- wp:paragraph -->
<p>Biosocieties is committed to the scholarly exploration of the crucial social, ethical and policy implications of developments in the life sciences and biomedicine.</p>
<!-- /wp:paragraph -->
    
 

    
        <a href="<?php echo get_field('external_link', $content_items[0]->ID);?>" class="bg-primary-default px-3 py-1 rounded-full w-fit mx-auto hover:ring-4 hover:ring-yellow-400 focus:ring-4 focus:ring-yellow-400">
        View latest edition
        </a>
    
  
    </div>

  
</section>

<?php endif;?>
