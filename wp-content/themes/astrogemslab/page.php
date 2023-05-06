<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package greenjewlry
 */

get_header(); ?>
 <main class="main-content inner-content">
       <section class="site-breadcrumb">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 bg-transparent">
                        <?php if( function_exists( 'bcn_display' ) ) bcn_display(); ?>
                    </ol>
                </nav>
            </div>
        </section>

<div class="container">
<div class="row">

		<?php
		if (have_posts()) { while (have_posts()) { the_post(); ?>
      <article>
         <h3 class="mb-3"><?php //the_title(); ?></h2>
         <p><?php the_content(); ?></p>
      </article>

         <?php } } ?>
</div>
</div>
</main>

<?php
//get_sidebar();
get_footer();
?>