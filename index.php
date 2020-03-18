<?php
declare(strict_types=1);
/**
 * The theme's index.php file.
 *
 * @category   Theme Framework
 * @package    Mist
 * @subpackage Templates
 * @since      1.0
 */
if (!defined('ABSPATH')) {
	exit('direct access not allowed.');
}

get_header();
?>
<div class="container">
	<main
		class="
			leading-normal
			pt-42
			pr-42
			w-full
			md:py-42
			lg:float-left
			lg:w-2/3
			xl:w-3/5
			text-size-18
		"
	>
	<?php
	if (have_posts()) {
		while (have_posts()) {
			the_post();
			get_template_part('templates/archive');
		}
	}
	?>
	</main>
	<?php get_sidebar(); ?>	
</div>
<?php get_footer();
