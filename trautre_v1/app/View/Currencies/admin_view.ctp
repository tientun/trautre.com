<div class="box">
	<div class="box-header">
		<h1>Manage <?php  echo __('Currency');?></h1>
	</div>

	<!-- List Entries -->
	<div class="box-content">
		
		<div class='time_release'><div class='time_release_title'><?php echo __('Id'); ?></div>
		<div class='time_release_content'>
			<?php echo h($currency['Currency']['id']); ?>
			&nbsp;
		</div></div>
		<div class='time_release'><div class='time_release_title'><?php echo __('Code'); ?></div>
		<div class='time_release_content'>
			<?php echo h($currency['Currency']['code']); ?>
			&nbsp;
		</div></div>
		<div class='time_release'><div class='time_release_title'><?php echo __('Symbol'); ?></div>
		<div class='time_release_content'>
			<?php echo h($currency['Currency']['symbol']); ?>
			&nbsp;
		</div></div>
	
	</div>
</div>