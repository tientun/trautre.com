<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
  
    <title><?php echo $title_for_layout ; ?></title>
    <?php 
		echo $this->Html->css('reset.css');
		echo $this->Html->css('formalize.css');
		echo $this->Html->css('main.css');
		echo $this->Html->css('checkboxes.css');
		echo $this->Html->css('icons.css');
		echo $this->Html->css('custom.css');
		echo $this->Html->script('jquery.min');
	?>
	<script type="text/javascript">	
		jQuery(document).ready(function(){
			jQuery('#option1').toggle(
				function(){
					jQuery(this).next("label").addClass("checked");
					jQuery("#option1_").val("1");
				},
				function(){
					jQuery(this).next("label").removeClass("checked");
					jQuery("#option1_").val("0");
				}
			);
        });
	</script>	
</head>
  
<body id="login">
	
    <div id="login_container">
		
		<!-- In thông điệp -->
		<?php 
			$auth_mess = $this->Session->flash('auth'); 
			$logout_mess = $this->Session->flash('logout'); 
			if(!empty($auth_mess)){
				echo $auth_mess ; 
			}
			else if(!empty($logout_mess)){
				echo '<p class="message_success">'.$logout_mess.'</p>' ; 
			}
		?>

		<div id="login_form" style="left:170px; padding:10px;">
			<?php echo $this->Form->create('Admin');?>
				
				<p style="float:left">
					<span style="float:left; color:#666">Username</span>
					<?php echo $this->Form->input('username', array('label'=>false, 'div'=>false));?>
				</p>
				
				<p style="float:left; margin-top:10px">
					<span style="float:left; color:#666">Password</span>
					<?php echo $this->Form->input('password', array('label'=>false, 'div'=>false));?>
				</p>
				
				<p style="float:left; margin-top:10px">
					<input type="hidden" id="option1_" name="data[Admin][remember_me]" class="hiddenCheckbox" value="0">
					<input type="checkbox" id="option1" name="data[Admin][remember_me]" class="hiddenCheckbox" value="1">
					<label for="option1" class="prettyCheckbox checkbox list" style="float:left">
						<span class="holderWrap" style="width: 18px; height: 19px;">
							<span class="holder" style="width: 18px;"></span>
						</span>
						Remember me
					</label>
					
					<button type="submit" class="button blue" style="margin-left:37px;"><span class="glyph key"></span>Login</button>
				</p>
			
			</form>
		</div>
		
	</div>
    
</body>
</html>