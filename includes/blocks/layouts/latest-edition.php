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

<section id="<?php echo $id;?>" class="<?php echo esc_attr($className); ?> wp-block-group w-4/5 mx-auto my-6 lg:my-16" >

  <div class="wp-block-group flex flex-col gap-6 p-6 lg:p-12 rounded-md has-light-opacity-background-color has-background"> 
 <?php if($description):?>
  
    <p class="text-center italic w-3/4 mx-auto"><?php echo $description;?></p>
  
<?php endif;?>

    <div class="wp-block-buttons">
      <div class="wp-block-button aligncenter is-style-button-rounded">
        <a href="<?php echo get_field('external_link', $content_items[0]->ID);?>" class="wp-block-button__link has-primary-default-color has-accent-background-color has-text-color has-background wp-element-button">
        View latest edition
        </a>
      </div>
      
    </div>
    </div>

  
</section>

<?php endif;?>
