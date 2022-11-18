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
$id = 'blockhaus-user-profile-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$profile = get_field('user_profile');
$biography = get_field('profile_biography', 'user_' . $profile['ID']);
$image = get_field('profile_image', 'user_' . $profile['ID']);
$quote = get_field('profile_quote', 'user_' . $profile['ID']);
$profileLink = get_field('profile_link', 'user_' . $profile['ID']);

// Create class attribute allowing for custom "className" and "align" values.
$className = 'blockhaus-user-profile';
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


<div id="<?php echo $id;?>" class="<?php echo esc_attr($className); ?> bg-neutral-light-100 p-6 space-y-6">
         <h3 class="has-large-font-size" style="font-style:normal;font-weight:700"><?php echo $profile['display_name'];?> </h3>
     
  <div class="flex flex-col lg:flex-row gap-6 items-center align-center text-center">

         <?php if($image):?>
          <figure class="">
            <img src="<?php echo $image['sizes']['medium'];?>" width="<?php echo $image['sizes']['medium-width'];?>" height="<?php echo $image['sizes']['medium-height'];?>" alt=""/>
          </figure>
         <?php endif;?>
        
         <?php if($quote):?>
          <blockquote class="is-style-plain flex-1 italic">
            <p><?php echo $quote;?></p>
          </blockquote>
          <?php endif;?>

  </div>
        
  

    <div class="wp-block-group flex flex1 gap-6 justify-center flex-col">

         <?php if($biography):?>
         <?php echo $biography;?>
         <?php endif;?>
         
          <div class="wp-block-button is-style-button-rounded">
            <a class="wp-block-button__link wp-element-button" 
            href="<?php if($profileLink):
            echo $profileLink; 
            else:
            echo get_author_posts_url($profile['ID']);
            endif;?>">View Profile</a>
          </div>

    </div>
        
  

</div>

        