<?php $embed = $this -> get_option('embed'); ?>

<script type="text/javascript">
var wpmlAjax = '<?php echo rtrim($this -> url(), '/'); ?>/<?php echo $this -> plugin_name; ?>-ajax.php';
var wpmlUrl = '<?php echo $this -> url(); ?>';
var wpmlScroll = "<?php echo ($embed['scroll'] == "Y") ? 'Y' : 'N'; ?>";
var newsletters_locale = "<?php echo substr(get_locale(), 0, 2); ?>";

<?php if ($this -> language_do()) : ?>
	var wpmlajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>?lang=<?php echo $this -> language_current(); ?>&';
<?php else : ?>
	var wpmlajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>?';
<?php endif; ?>

$ = jQuery.noConflict();

jQuery(document).ready(function() {
	if (jQuery.isFunction(jQuery.fn.select2)) {
		jQuery('.newsletters select').select2();
	}
});
</script>

<style type="text/css">
<?php if (get_option('wpmlcustomcss') == "Y") : ?>
	<?php echo stripslashes(get_option('wpmlcustomcsscode')); ?>
<?php endif; ?>
</style>

<link rel="stylesheet/less" type="text/css" href="<?php echo $this -> render_url('css/style.less', 'default2', false); ?>" />