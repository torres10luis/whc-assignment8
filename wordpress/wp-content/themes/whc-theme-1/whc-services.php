<?php
/**
 * 
 * Template Name: Whc Example
 * 
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package whc-theme-1
 */

get_header();
?>
<div id="firstbg" style="background: url(<?php echo( get_header_image() ); ?>) ; background-size:cover; background-position: center; padding:100px;" class="container-fluid">
<section  class="container">
    <div class="row"> 
    <div class="col-md-8 text-center">
    <?php
        $post_id = 80;
        $queried_post = get_post($post_id);
        $title = $queried_post->post_title;
        // echo $title;
        // echo $queried_post->post_content;
    ?>
        <h2>
           <?php  echo $title; ?>
        </h2>
        <p>
            <?php echo $queried_post->post_content; ?> 
        </p>
        <div class="img-box">
            <?php the_post_thumbnail() ?>
        </div>
    </div>
       
    </div>
</section>
</div>

<section id="secondbg" class="col-12">
    <div class="row text-center">
    <div class="col-12 text-center">
    <?php
        $post_id = 82;
        $queried_post = get_post($post_id);
        $title = $queried_post->post_title;
        // echo $title;
        // echo $queried_post->post_content;
    ?>
        <h2>
           <?php  echo $title; ?>
        </h2>
        <p>
            <?php echo $queried_post->post_content; ?> 
        </p>
        <div class="img-box">
            <?php the_post_thumbnail() ?>
        </div>
    </div>  
</section>

<section class="thirdsect col-12">
    <div class="row ">
        <div class="col-md-4 text-center">
        <?php
            $post_id = 84;
            $queried_post = get_post($post_id);
            $title = $queried_post->post_title;
            // $picture = $the_post_thumbnail -> the_post_thumbnail();
            // echo $title;
            // echo $queried_post->post_content;
        ?>
            <h2>
            <?php  echo $title; ?>
            </h2>
            <p>
                <?php echo $queried_post->post_content; ?> 
            </p>
            <div class="img-box">
                <?php //the_post_thumbnail(); ?>
            </div>
        </div>
        <div class="col-md-4 text-center">
        <?php
            $post_id = 86;
            $queried_post = get_post($post_id);
            $title = $queried_post->post_title;
        ?>
            <h2>
            <?php  echo $title; ?>
            </h2>
            <p>
                <?php echo $queried_post->post_content; ?> 
            </p>
            <div class="img-box">
                <?php //the_post_thumbnail(); ?>
            </div>
        </div>
        <div class="col-md-4 text-center">
        <?php
            $post_id = 88;
            $queried_post = get_post($post_id);
            $title = $queried_post->post_title;
        ?>
            <h2>
            <?php  echo $title; ?>
            </h2>
            <p>
                <?php echo $queried_post->post_content; ?> 
            </p>
            <div class="img-box">
                <?php //the_post_thumbnail(); ?>
        </div>
    </div>
</section>

<section class="foursect text-light">
    <div class="row bg-dark text-center" style="padding: 25px;">
        <div class="col-md-3">
        <?php
            $post_id = 93;
            $queried_post = get_post($post_id);
            $title = $queried_post->post_title;
        ?>
            <h2>
                <?php echo $queried_post->post_content; ?> 
            </h2>
            <p>
            <?php  echo $title; ?>
            </p>
            <div class="img-box">
                <?php //the_post_thumbnail(); ?>
            </div>
        </div>
        <div class="col-md-3">
        <?php
            $post_id = 95;
            $queried_post = get_post($post_id);
            $title = $queried_post->post_title;
        ?>
            <h2>
                <?php echo $queried_post->post_content; ?> 
            </h2>
            <p>
            <?php  echo $title; ?>
            </p>
            <div class="img-box">
                <?php //the_post_thumbnail(); ?>
            </div>
        </div>
        <div class="col-md-3">
        <?php
            $post_id = 97;
            $queried_post = get_post($post_id);
            $title = $queried_post->post_title;
        ?>
            <h2>
                <?php echo $queried_post->post_content; ?> 
            </h2>
            <p>
            <?php  echo $title; ?>
            </p>
            <div class="img-box">
                <?php //the_post_thumbnail(); ?>
            </div>
        </div>
        <div class="col-md-3">
        <?php
            $post_id = 99;
            $queried_post = get_post($post_id);
            $title = $queried_post->post_title;
        ?>
            <h2>
                <?php echo $queried_post->post_content; ?> 
            </h2>
            <p>
            <?php  echo $title; ?>
            </p>
            <div class="img-box">
                <?php //the_post_thumbnail(); ?>
            </div>
        </div>
    </div>

<?php

// $post = get_post();
 
// if ( is_single('Our Client Say')) {
//     // This is a subpage
// } else {
//     // This is not a subpage
// }
?>
</section>

<section class="fifth">
    <div class="row ">
        <?php
            $post_id = 77;
            $queried_post = get_post($post_id);
            $title = $queried_post->post_title;
            $post_thumb = get_the_post_thumbnail( $post->post_id, 'team' );
        ?>
        <div class="col-md-5 offset-1 text-center">
            <h2>
                <?php  echo $title; ?>
            </h2>
            <p>
                <?php echo $queried_post->post_content; ?>
            </p>
        </div>
        <div class="col-md-4">
            <?php echo $post_thumb; ?>
            <?php the_post_thumbnail('team'); ?>
        </div>
    </div>
</section>

<section class="info">
    <div class="row">
        <?php
            // $post_id = 108;
            // $queried_post = get_post($post_id);
            // $title = $queried_post->post_title;
            // $post_thumb = get_the_post_thumbnail( $post->post_id, 'team' );
        ?>
        <div class="col-8 text-center">
            <?php //echo $queried_post->post_content;?>
            <?php dynamic_sidebar( 'sidebar 2' ); ?>
        </div>
        <div class="col-md-4">
        <?php dynamic_sidebar( 'sidebar 3' ); ?>
        </div>
    </div>
</section>
		
<?php get_footer();
