<!-- ***************************************************
To add this to your own template, set the $title and $url, and add the following code:
include get_template_directory() . '/includes/buttons/btn-secondary.php';
*****************************************************-->

<a href="<?php echo $btn['url']; ?>"
	class="btn btn-secondary <?= array_key_exists('class', $btn) ? $btn['class'] : '' ?>"
	data-id="<?= array_key_exists('id', $btn) ? $btn['id'] : '' ?>"
	<?php if(!empty($btn['target'])){echo 'target="_blank"';} ?>>
	<span><?php echo $btn['title']; ?></span>
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 5V19" stroke="#E4A649" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M19 12L12 19L5 12" stroke="#E4A649" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
</a>