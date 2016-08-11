
<?php
	// Component Variables
	$headline = get_sub_field('test_headline');
	$content = get_sub_field('test_content');
?>

<section class="component test-component">
	<div class="row">
		<h2><?php echo $headline; ?></h2>
		<?php echo $content; ?>
	</div>
</section>