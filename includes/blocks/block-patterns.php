<?php

register_block_pattern_category(
  'callouts-and-quotes',
  array( 'label' => __( 'Callouts and quotes', 'blockhaus' ) )
);

register_block_pattern_category(
  'social-media',
  array( 'label' => __( 'Social media', 'blockhaus' ) )
);

register_block_pattern_category(
  'users',
  array( 'label' => __( 'Users and profiles', 'blockhaus' ) )
);

register_block_pattern_category(
  'related-content',
  array( 'label' => __( 'Showing related content', 'blockhaus' ) )
);

function blockhaus_register_patterns() {

  register_block_pattern(
    'blockhaus/latest-edition',
    array(
        'title'       => __( 'Latest Edition', 'blockhaus' ),
        'categories'    => [
          'related-content',
        ],
        'content'     => '<!-- wp:group {"name":"Latest Edition", "tagName":"section","className":"w-full lg:w-1/4","layout":{"type":"default"}} -->
        <section id="latest-edition" class="wp-block-group w-full lg:w-1/4"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"className":"flex flex-col gap-6 p-6 bg-white/80 shadow-md rounded-md","layout":{"type":"default"}} -->
        <div class="wp-block-group flex flex-col gap-6 p-6 bg-white/80 shadow-md rounded-md"><!-- wp:image {"align":"center","width":128,"height":100,"sizeSlug":"full","linkDestination":"none","className":"w-32"} -->
        <figure class="wp-block-image aligncenter size-full is-resized w-32"><img src="/wp-content/themes/blockhaus-biosocieties\assets\images\defaults\biosocieties-covers.png" alt="" width="128" height="100"/></figure>
        <!-- /wp:image -->
        
        <!-- wp:paragraph {"className":"text-center"} -->
        <p class="text-center">BioSocieties is committed to the scholarly exploration of the crucial social, ethical and policy implications of developments in the life sciences and biomedicine.</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-rounded rounded-full bg-primary-default hover:ring-4 hover:ring-offset"} -->
        <div class="wp-block-button is-style-button-rounded rounded-full bg-primary-default hover:ring-4 hover:ring-offset"><a class="wp-block-button__link wp-element-button">View latest edition</a></div>
        <!-- /wp:button --></div>
        <!-- /wp:buttons --></div>
        <!-- /wp:group --></section>
        <!-- /wp:group -->',
    )
);

  register_block_pattern(
     'blockhaus/profile-block',
     array(
         'title'       => __( 'Profile Block - Image Left', 'blockhaus' ),
         'categories'    => [
          'users',
        ],
         'content'     => '<!-- wp:group {"className":"bg-neutral-light-100 p-6"} -->
         <div class="wp-block-group bg-neutral-light-100 p-6"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"large"} -->
         <h3 class="has-large-font-size" style="font-style:normal;font-weight:700">Name</h3>
         <!-- /wp:heading -->
         
         <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"className":"flex flex-col lg:flex-row gap-2 items-center align-center text-center"} -->
         <div class="wp-block-group flex flex-col lg:flex-row gap-2 items-center align-center text-center"><!-- wp:image {"align":"center","sizeSlug":"medium","linkDestination":"none","className":"is-style-default"} -->
         <figure class="wp-block-image aligncenter size-medium is-style-default"><img src="/wp-content/themes/blockhaus-biosocieties\assets\images\defaults\profile.jpg" alt=""/></figure>
         <!-- /wp:image -->
         
         <!-- wp:quote {"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"className":"is-style-plain"} -->
         <blockquote class="wp-block-quote is-style-plain" style="font-style:italic;font-weight:400"><!-- wp:paragraph -->
         <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Non architecto ex cum autem eos dignissimos, reiciendis, deleniti culpa dolorem, eveniet voluptatum. Voluptate, ullam. Facilis, et rerum excepturi alias necessitatibus optio!"</p>
         <!-- /wp:paragraph --></blockquote>
         <!-- /wp:quote --></div>
         <!-- /wp:group -->
         
         <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"className":"flex gap-6 "} -->
         <div class="wp-block-group flex gap-6"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"className":"flex flex-1 gap-6 justify-center flex-col"} -->
         <div class="wp-block-group flex flex-1 gap-6 justify-center flex-col"><!-- wp:paragraph -->
         <p>Short biography</p>
         <!-- /wp:paragraph -->
         
         <!-- wp:buttons -->
         <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-rounded"} -->
         <div class="wp-block-button is-style-button-rounded"><a class="wp-block-button__link wp-element-button" href="">View Profile</a></div>
         <!-- /wp:button --></div>
         <!-- /wp:buttons --></div>
         <!-- /wp:group --></div>
         <!-- /wp:group --></div>
         <!-- /wp:group -->',
     )
 ); 

 register_block_pattern(
  'blockhaus/profile-block-alternate',
  array(
      'title'       => __( 'Profile Block - Image Right', 'blockhaus' ),
      'categories'    => [
        'users',
      ],
      'content'     => '<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"className":"blockhaus-profile-alt flex-col-reverse justify-between md:flex-row flex gap-0 md:gap-12 py-6"} -->
      <div class="wp-block-group blockhaus-profile-alt flex-col-reverse justify-between md:flex-row flex gap-0 md:gap-12 py-6"><!-- wp:group {"className":"self-start md:self-center mt-0 md:mt-auto py-6 md:p-0 space-y-6"} -->
      <div class="wp-block-group self-start md:self-center mt-0 md:mt-auto py-6 md:p-0 space-y-6"><!-- wp:heading {"className":"font-bold"} -->
      <h2 class="font-bold">Your name</h2>
      <!-- /wp:heading -->
      
      <!-- wp:paragraph -->
      <p>Age:</p>
      <!-- /wp:paragraph -->
      
      <!-- wp:paragraph -->
      <p>Why I joined YPAG:</p>
      <!-- /wp:paragraph -->
      
      <!-- wp:paragraph -->
      <p>What I have gained from YPAG:</p>
      <!-- /wp:paragraph -->
      
      <!-- wp:paragraph -->
      <p>Fun fact:</p>
      <!-- /wp:paragraph --></div>
      <!-- /wp:group -->
      
      <!-- wp:image {"id":458,"sizeSlug":"profile","linkDestination":"none","className":"aspect-square min-w-fit max-w-fit"} -->
      <figure class="wp-block-image size-profile aspect-square min-w-fit max-w-fit"><img src="http://ypag.local/wp-content/uploads/2022/05/janko-ferlic-1nizzZ-SFw4-unsplash-3-300x300.jpg" alt="" class="wp-image-458"/></figure>
      <!-- /wp:image --></div>
      <!-- /wp:group -->',
  )
); 

 register_block_pattern(
  'blockhaus/showcase-grid',
  array(
      'title'       => __( 'Showcase [Grid Layout]', 'blockhaus' ),
      'categories'    => [
        'related-content',
      ],
      'content'     => '
      <!-- wp:acf/showcase-grid {"id":"block_6351375bd79b4","name":"acf/showcase-grid","data":{"layout_alt":"0","_layout_alt":"field_63514c2dae525","showcase_title":"News and features","_showcase_title":"field_63512569962da","showcase_description":"Read our latest news and features.","_showcase_description":"field_63512585962db","showcase_link":"http://biosocieties.local/news-and-events/","_showcase_link":"field_635125a2962dc","items":"3","_items":"field_6350221b6eac0","grid_columns":"4","_grid_columns":"field_63503203e3172","content_type":"post","_content_type":"field_635022572d252"},"align":"","mode":"preview"} /-->
      ',
  )
); 

    register_block_pattern(
      'blockhaus/showcase-single',
      array(
          'title'       => __( 'Showcase - Single Item', 'blockhaus' ),
          'categories'    => [
            'related-content',
          ],
          'content'     => '
          <!-- wp:acf/showcase-single {"id":"block_636ea7f58c4f8","name":"acf/showcase-single","data":{"showcase_content":758,"_showcase_content":"field_63516f6fd1648","showcase_description":"How have opioid painkillers, known for over a century to be highly addictive, come to be considered a safe treatment for chronic pain?","_showcase_description":"field_63516f6fca1db"},"align":"","mode":"preview","className":""} /-->
          ',
      )
    ); 

  register_block_pattern(
    'blockhaus/latest-blogposts',
    array(
      'title'   => __('Latest blog posts', 'blockhaus'),
      'categories'    => [
        'related-content',
      ],
      'content' => '
      <!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"blockGap":"0px"}},"className":"blockhaus-blog-posts has-accent-background-color has-background slanted z-0 relative overflow-hidden","layout":{"inherit":false}} -->
      <section class="wp-block-group alignfull blockhaus-blog-posts has-accent-background-color has-background slanted z-0 relative overflow-hidden" id="latest-posts"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"className":"grid gap-6 md:w-4/5 md:mx-auto"} -->
      <div class="wp-block-group grid gap-6 md:w-4/5 md:mx-auto"><!-- wp:group {"backgroundColor":"secondary","textColor":"primary-default","className":"rounded-md col-span-full md:col-span-1 md:col-start-1 p-6 flex flex-col justify-between"} -->
      <div class="wp-block-group rounded-md col-span-full md:col-span-1 md:col-start-1 p-6 flex flex-col justify-between has-primary-default-color has-secondary-background-color has-text-color has-background"><!-- wp:heading {"textColor":"primary-default","className":"font-black","fontSize":"gigantic"} -->
      <h2 class="font-black has-primary-default-color has-text-color has-gigantic-font-size">Blog</h2>
      <!-- /wp:heading -->

      <!-- wp:paragraph -->
      <p>The latest from the YPAG blog.</p>
      <!-- /wp:paragraph -->

      <!-- wp:buttons -->
      <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-retro"} -->
      <div class="wp-block-button is-style-button-retro"><a class="wp-block-button__link">Visit the blog</a></div>
      <!-- /wp:button --></div>
      <!-- /wp:buttons --></div>
      <!-- /wp:group -->

      <!-- wp:query {"queryId":1,"query":{"perPage":"3","pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":3},"className":"col-span-full md:col-span-3 md:col-start-2","layout":{"inherit":false}} -->
      <div class="wp-block-query col-span-full md:col-span-3 md:col-start-2"><!-- wp:post-template {"className":"grid grid-cols-1 md:grid-cols-3 gap-6 post-template-grid"} -->
      <!-- wp:post-featured-image {"width":"","height":"","sizeSlug":"blog"} /-->

      <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"className":"h-full p-6 flex flex-col","layout":{"type":"default"}} -->
      <div class="wp-block-group h-full p-6 flex flex-col"><!-- wp:post-title {"level":3} /-->

      <!-- wp:post-date {"className":"pb-6","fontSize":"small"} /-->

      <!-- wp:read-more {"content":"View article","className":"bg-yellow-300 border border-current px-2 py-1 shadow-retro mt-auto"} /--></div>
      <!-- /wp:group -->
      <!-- /wp:post-template --></div>
      <!-- /wp:query --></div>
      <!-- /wp:group --></section>
      <!-- /wp:group -->
      ',
    )
    );

  $testing = 'Hey there';

  register_block_pattern(
    'blockhaus/blockhaus-gallery',
    array(
      'title'   => __('Blockhaus Gallery', 'blockhaus'),
      'categories'    => [
        'gallery',
      ],
      'content' => '
      <!-- wp:group {"tagName":"aside","style":{"spacing":{"blockGap":"0px"}},"className":"blockhaus-gallery has-accent-background-color has-background p-6 rounded-md space-y-6"} -->
      <aside id="stories-gallery" class="wp-block-group blockhaus-gallery has-accent-background-color has-background p-6 rounded-md space-y-6"><!-- wp:paragraph -->
      <p>' . $testing . '</p>
      <!-- /wp:paragraph -->

      <!-- wp:gallery {"linkTo":"none"} -->
      <figure class="wp-block-gallery has-nested-images columns-default is-cropped bg-inherit"><!-- wp:image {"id":578,"sizeSlug":"medium","linkDestination":"none"} -->
      <figure class="wp-block-image size-medium bg-inherit"><img src="http://pentecost.local/wp-content/uploads/2022/05/surface-ddcLX7Iis44-unsplash-3.jpg" alt="" class="wp-image-578"/></figure>
      <!-- /wp:image -->

      <!-- wp:image {"id":486,"sizeSlug":"medium","linkDestination":"none"} -->
      <figure class="wp-block-image size-medium bg-inherit"><img src="http://pentecost.local/wp-content/uploads/2022/05/imansyah-muhamad-putera-n4KewLKFOZw-unsplash-1.jpg" alt="" class="wp-image-486"/></figure>
      <!-- /wp:image -->

      <!-- wp:image {"id":483,"sizeSlug":"medium","linkDestination":"none"} -->
      <figure class="wp-block-image size-medium bg-inherit"><img src="http://pentecost.local/wp-content/uploads/2022/05/disruptivo-DokE5D4GbDk-unsplash-1.jpg" alt="" class="wp-image-483"/></figure>
      <!-- /wp:image -->

      <!-- wp:image {"id":437,"sizeSlug":"medium","linkDestination":"none"} -->
      <figure class="wp-block-image size-medium bg-inherit"><img src="http://pentecost.local/wp-content/uploads/2022/05/pil.jpg" alt="" class="wp-image-437"/></figure>
      <!-- /wp:image -->

      <!-- wp:image {"id":435,"sizeSlug":"medium","linkDestination":"none"} -->
      <figure class="wp-block-image size-medium bg-inherit"><img src="http://pentecost.local/wp-content/uploads/2022/05/clark-van-der-beken-xFdrt8YIoJc-unsplash.jpg" alt="" class="wp-image-435"/><figcaption>A final final caption</figcaption></figure>
      <!-- /wp:image --></figure>
      <!-- /wp:gallery --></aside>
      <!-- /wp:group -->
      ',
    )
    );

  register_block_pattern(
    'blockhaus/team-gallery',
    array(
      'title'   => __('Team Gallery', 'blockhaus'),
      'categories'    => [
        'gallery',
      ],
      'content' => '
      <!-- wp:group {"tagName":"section","style":{"spacing":{"blockGap":"0px"}},"className":"grid grid-cols-3 gap-6 mt-6","layout":{"inherit":true}} -->
      <section class="wp-block-group grid grid-cols-3 gap-6 mt-6"><!-- wp:group {"className":"flex flex-col bg-offset justify-center p-6"} -->
      <div class="wp-block-group flex flex-col bg-offset justify-center p-6"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"extra-large"} -->
      <h2 class="has-extra-large-font-size" style="font-style:normal;font-weight:700">Meet the team</h2>
      <!-- /wp:heading -->

      <!-- wp:paragraph -->
      <p>Find out about the people who make us work</p>
      <!-- /wp:paragraph --></div>
      <!-- /wp:group -->

      <!-- wp:image {"id":486,"sizeSlug":"profile","linkDestination":"none"} -->
      <figure class="wp-block-image size-profile"><img src="http://pentecost.local/wp-content/uploads/2022/05/imansyah-muhamad-putera-n4KewLKFOZw-unsplash-1-300x300.jpg" alt="" class="wp-image-486"/><figcaption>Jimmy Quinn</figcaption></figure>
      <!-- /wp:image -->

      <!-- wp:image {"id":483,"sizeSlug":"profile","linkDestination":"none"} -->
      <figure class="wp-block-image size-profile"><img src="http://pentecost.local/wp-content/uploads/2022/05/disruptivo-DokE5D4GbDk-unsplash-1-300x300.jpg" alt="" class="wp-image-483"/><figcaption>Lana Da Silva</figcaption></figure>
      <!-- /wp:image -->

      <!-- wp:image {"id":458,"sizeSlug":"profile","linkDestination":"none"} -->
      <figure class="wp-block-image size-profile"><img src="http://pentecost.local/wp-content/uploads/2022/05/janko-ferlic-1nizzZ-SFw4-unsplash-3-300x300.jpg" alt="" class="wp-image-458"/><figcaption>Jessie Anderson</figcaption></figure>
      <!-- /wp:image -->

      <!-- wp:image {"id":578,"sizeSlug":"profile","linkDestination":"none"} -->
      <figure class="wp-block-image size-profile"><img src="http://pentecost.local/wp-content/uploads/2022/05/surface-ddcLX7Iis44-unsplash-3-300x300.jpg" alt="" class="wp-image-578"/><figcaption><a href="http://pentecost.local/about/" data-type="page" data-id="6">Andrea Ireland</a></figcaption></figure>
      <!-- /wp:image --></section>
      <!-- /wp:group -->
      ',
    )
    );

    register_block_pattern(
      'blockhaus/blockhaus-quote',
      array(
        'title'   => __('Blockhaus Quote', 'blockhaus'),
        'categories'    => [
          'callouts-and-quotes',
        ],
        'content' => '
        <!-- wp:quote {"className":"blockhaus-quote relative bg-neutral-light-100 flex flex-col items-center text-center gap-2 px-20 py-16 rounded-md border-l-0 outline-4 outline-double outline-accent outline-offset-4 is-style-default","fontSize":"large"} -->
        <blockquote class="wp-block-quote blockhaus-quote relative bg-neutral-light-100 flex flex-col items-center text-center gap-2 px-20 py-16 rounded-md border-l-0 outline-4 outline-double outline-accent outline-offset-4 is-style-default has-large-font-size"><p>The cure for boredom is curiosity. There is no cure for curiosity.</p><cite>Dorothy Parker</cite></blockquote>
        <!-- /wp:quote -->
        ',
      )
      );

      register_block_pattern(
        'blockhaus/blockhaus-quote-with-image',
        array(
          'title'   => __('Blockhaus Quote with Image', 'blockhaus'),
          'categories'    => [
            'callouts-and-quotes',
          ],
          'content' => '
          <!-- wp:group {"className":"blockhaus-quote-image bg-gray-100 rounded-md flex flex-col items-center p-6 justify-center"} -->
          <div class="wp-block-group blockhaus-quote-image bg-gray-100 rounded-md flex flex-col items-center p-6 justify-center"><!-- wp:image {"id":458,"width":150,"height":150,"sizeSlug":"thumbnail","linkDestination":"none","className":"is-style-default rounded-full aspect-square"} -->
          <figure class="wp-block-image size-thumbnail is-resized is-style-default rounded-full aspect-square"><img src="/wp-content/themes/blockhaus/assets/images/block-patterns/quote-with-image.jpg" alt="Dorothy Parker as a young woman" class="wp-image-458" width="150" height="150"/></figure>
          <!-- /wp:image -->

          <!-- wp:quote {"className":"flex flex-col items-center gap-2 is-style-plain"} -->
          <blockquote class="wp-block-quote flex flex-col items-center gap-2 is-style-plain"><p>The cure for boredom is curiosity. There is no cure for curiosity.</p><cite>Dorothy Parker</cite></blockquote>
          <!-- /wp:quote --></div>
          <!-- /wp:group -->
          ',
        )
        );

    register_block_pattern(
      'blockhaus/instagram',
      array(
        'title'   => __('Instagram', 'blockhaus'),
        'categories'    => [
          'social-media',
        ],
        'content' => '
        <!-- wp:group {"tagName":"section","style":{"spacing":{"blockGap":"0px"}},"className":"flex gap-8 items-center justify-center p-6 w-fit mx-auto"} -->
        <section class="wp-block-group flex gap-8 items-center justify-center p-6 w-fit mx-auto"><!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center font-bold">Follow us on Instagram</p>
        <!-- /wp:paragraph -->

        <!-- wp:social-links {"size":"has-huge-icon-size","align":"center","className":"is-style-logos-only","layout":{"type":"flex","orientation":"horizontal","justifyContent":"left"}} -->
        <ul class="wp-block-social-links aligncenter has-huge-icon-size is-style-logos-only"><!-- wp:social-link {"url":"https://instagram.com/yourusername","service":"instagram","label":"Visit our Instagram"} /--></ul>
        <!-- /wp:social-links --></section>
        <!-- /wp:group -->
        ',
      )
      );

      register_block_pattern(
        'blockhaus/search',
        array(
          'title'   => __('Search', 'blockhaus'),
          'content' => '
          <!-- wp:search {"label":"Search for content","placeholder":"Enter search term ...","width":null,"widthUnit":"px","buttonText":"Submit","backgroundColor":"accent","textColor":"secondary","className":"flex items-center gap-4 mt-2 blockhaus-search"} /-->
          ',
        )
        );


        // $instagram = get_field('instagram_url', 'options');
       

        // if($instagram) {
        //   $instagram_profile = '<!-- wp:social-link {"url":"' . $instagram . '","service":"instagram"} /-->';
        // }


       

        // $twitter = get_field('twitter_url', 'options');
       

        // if($twitter) {
        //   $twitter_profile = '<!-- wp:social-link {"url":"' . $twitter . '","service":"twitter"} /-->';
        // }

        

        // if($instagram || $twitter ):

        //   register_block_pattern(
        //     'blockhaus/social-media-profiles',
        //     array(
        //       'title'   => __('Social Media Profiles', 'blockhaus'),
        //       'categories'    => [
        //         'social-media',
        //       ],
        //       'content' => '
        //       <!-- wp:social-links {"iconColor":"secondary","iconColorValue":"rgba(50 64 64 / 1)","size":"has-normal-icon-size","className":"is-style-logos-only"} -->
        //       <ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only">' .

        //       $instagram_profile . $twitter_profile

        //       . '</ul>
        //       <!-- /wp:social-links -->
        //       ',
        //     )
        //     );

        // endif;
      
}
add_action( 'init', 'blockhaus_register_patterns' );