<!-- ***************************************************
To add this to your own template, set the $title and $url, and add the following code:
include get_template_directory() . '/includes/buttons/btn-primary.php';
*****************************************************-->

<a href="<?php echo $btn['url']; ?>"
	class="btn btn-primary <?= array_key_exists('class', $btn) ? $btn['class'] : '' ?>"
	data-id="<?= array_key_exists('id', $btn) ? $btn['id'] : '' ?>"
	<?php if(!empty($btn['target'])){echo 'target="_blank"';} ?>>
	<?php echo $btn['title']; ?>
</a>