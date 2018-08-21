<?php
/**
 * 
 * Template Name: Whc Home
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
<div id="firstbg" style="background: url(<?php echo( get_header_image() ); ?>) ; background-size:cover; background-position: center; padding:100px;">
<section  class="container">
    <div class="row"> 
        <?php $firstArgs = array(
                'post_type' => 'first',
                'posts_per_page' => 1,
                'order' => 'ASC'
            );
            $firsts = new WP_Query($firstArgs);
        ?>
        <?php if($firsts -> have_posts()): while($firsts -> have_posts()): $firsts -> the_post() ?>
    <div class="col-md-8 text-center">
        <h2>
            <?php the_title() ?>
        </h2>
        <div class="img-box">
            <?php the_post_thumbnail() ?>
        </div>
        <p>
            <?php the_content() ?> 
        </p>
    </div>
        <?php endwhile;  endif; ?> 
    </div>
</section>
</div>

<section id="secondbg">
    <div class="row text-center">
        <?php $secondArgs = array(
            'post_type' => 'second',
            'posts_per_page' => 1,
            'order' => 'ASC'
            );
        $seconds = new WP_Query($secondArgs);
        ?>
        <?php if($seconds -> have_posts()): while($seconds -> have_posts()): $seconds -> the_post() ?>
        <div class="col-md-12 text-center">  
            <h2>
                <?php the_title() ?>
            </h2>
            <div class="img-box">
                <?php the_post_thumbnail() ?>
            </div>
            <p>
                <?php the_content() ?> 
            </p>
        </div>
        <?php endwhile;  endif; ?> 
    </div>  
</section>

<section class="thirdsect container">
    <div class="row">
            <?php $thirdArgs = array(
                'post_type' => 'third',
                'posts_per_page' => 3,
                'order' => 'ASC'
            );
            $thirds = new WP_Query($thirdArgs);
             ?>
             <?php if($thirds -> have_posts()): while($thirds -> have_posts()): $thirds -> the_post() ?>
        <div class="col-md-4 text-center">
            <!-- <div class="img-thumbnail">
                <?php //the_post_thumbnail() ?>
            </div> -->
            <p>
               <?php the_content() ?> 
            </p>
            <h2>
                <?php the_title() ?>
            </h2>
        </div>
        <?php endwhile;  endif; ?> 
    </div>
</section>

<section class="foursect">

<?php
$post_id = 82;
$queried_post = get_post($post_id);
$title = $queried_post->post_title;
echo $title;
echo $queried_post->post_content;
?>

<?php

// $post = get_post();
 
// if ( is_single('Our Client Say')) {
//     // This is a subpage
// } else {
//     // This is not a subpage
// }
?>
</section>
		
<?php get_footer();
