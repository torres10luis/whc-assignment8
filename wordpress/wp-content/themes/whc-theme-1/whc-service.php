<?php
/**
 * 
 * Template Name: Whc Servicio
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
<section>
     <div class="row">
            <?php $serviceArgs = array(
                'post_type' => 'services',
                'posts_per_page' => 3,
                'order' => 'ASC'
            );

            $services = new WP_Query($serviceArgs);
             ?>

             <?php if($services -> have_posts()): while($services -> have_posts()): $services -> the_post() ?>
        <div class="col-md-4">
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

<section>
     <div class="row">
            <?php $homeArgs = array(
                'post_type' => 'homes',
                'posts_per_page' => 3,
                'order' => 'ASC'
            );

            $homes = new WP_Query($homeArgs);
             ?>

             <?php if($homes -> have_posts()): while($homes -> have_posts()): $homes -> the_post() ?>
        <div class="col-md-4 text-center">
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
    <div class="row">
        <div class="col-md-12 text-center">
        <h1>Another sidebar</h1>
        <?php dynamic_sidebar('sidebar 4'); ?>
        </div>
    </div>
</section>
		
<?php get_footer();
