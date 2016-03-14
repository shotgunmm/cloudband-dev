<?php if (!empty($checkoutdata)) : ?>
	<form action="https://www.2checkout.com/2co/buyer/purchase" method="post" id="<?php echo $formid; ?>" target="<?php echo $target; ?>">
		<?php foreach ($checkoutdata as $key => $val) : ?>
			<input type="hidden" name="<?php echo $key; ?>" value="<?php echo $val; ?>" />
		<?php endforeach; ?>
		<?php $buttontext = (empty($extend)) ? __('Pay Now', $this -> plugin_name) : __('Extend', $this -> plugin_name); ?>
		<input type="submit" class="<?php echo $this -> pre; ?>button btn btn-success paybutton" value="<?php echo $buttontext; ?>" name="checkout" />
	</form>
	
	<?php if ($autosubmit) : ?>
		<script type="text/javascript">
		document.getElementById('<?php echo $formid; ?>').submit();
		</script>
	<?php endif; ?>
<?php endif; ?>