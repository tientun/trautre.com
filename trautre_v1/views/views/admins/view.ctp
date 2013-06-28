<div class="box">
	<div class="box-header">
		<h1>Profile</h1>
	</div>
	
	<form>
		<div class="add_contest_custom">
			<p>
				<span class="add_contest_label_custom">Username</span>
				<?php echo $this->Form->input('Admin.username', array('type' => 'text', 'value' => $admin['Admin']['username'], 'label' => false, 'div' => false, 'readonly' => 'readonly')); ?>
			</p>
			
			<p>
				<span class="add_contest_label_custom">Fullname</span>
				<?php echo $this->Form->input('Admin.fullname', array('type' => 'text', 'value' => $admin['Admin']['fullname'], 'label' => false, 'div' => false, 'readonly' => 'readonly')); ?>
			</p>
			
			<p>
				<span class="add_contest_label_custom">Email</span>
				<?php echo $this->Form->input('Admin.email', array('type' => 'text', 'value' => $admin['Admin']['email'], 'label' => false, 'div' => false, 'readonly' => 'readonly')); ?>
			</p>
				
			<p>
				<span class="add_contest_label_custom">Type</span>
				<?php 
					if( $admin['Admin']['type'] == 1 ) $value = "Root";
					else if( $admin['Admin']['type'] == 2 ) $value = "Admin";
					else $value = "Other";
					echo $this->Form->input('Admin.type', array('type' => 'text', 'value' => $value, 'label' => false, 'div' => false, 'readonly' => 'readonly')); 
				?>
			</p>
		</div>
    </form>
	
</div>