<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BRVO Modding
 */
?>
<?php get_header(); ?>
    <section class="products"> 
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9 col-md-8">
                    <?php 
                        if(have_posts(  )):
                            while(have_posts(  )): the_post();
                                get_template_part( 'template-parts/content' );
                        endwhile;
                        the_posts_pagination(array(
                            'prev_text' => 'Previous',
                            'next_text' => 'Next'
                        ));
                        else:
                    ?>
                        <p> Nothing to display </p>
                        <?php endif; ?>
                </div>
                    <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>
