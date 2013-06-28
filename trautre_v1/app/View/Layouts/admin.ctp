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
		echo $this->Html->css('sourcerer.css');
                echo $this->Html->css('jqueryui.css');
		echo $this->Html->css('tipsy.css');
		echo $this->Html->css('tags.css');
		echo $this->Html->css('calendar.css');
		//echo $this->Html->css('fonts.css');
		echo $this->Html->css('portrait.css', 'stylesheet', array('media' => 'all and (orientation:portrait)' ));
		echo $this->Html->css('custom.css');
		
                echo $this->Html->script('jquery.min');
		echo $this->Html->script('jqueryui.min');
		echo $this->Html->script('jquery.cookies');
		echo $this->Html->script('jquery.pjax');
		echo $this->Html->script('formalize.min');
		echo $this->Html->script('jquery.metadata');
		echo $this->Html->script('jquery.validate');
		echo $this->Html->script('jquery.checkboxes');
		echo $this->Html->script('jquery.selectskin');
		echo $this->Html->script('jquery.fileinput');
		//echo $this->Html->script('jquery.datatables');
		echo $this->Html->script('jquery.sourcerer');
		echo $this->Html->script('jquery.tipsy');
		echo $this->Html->script('jquery.calendar');
		echo $this->Html->script('jquery.inputtags.min');
		echo $this->Html->script('jquery.wymeditor.min');
		echo $this->Html->script('jquery.livequery');
		echo $this->Html->script('jquery.highcharts');
		echo $this->Html->script('chart_examples');
		echo $this->Html->script('application');
		echo $this->Html->script('jquery-ui-timepicker-addon');
		echo $this->Html->script('custom');
	?>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <!--[if lt IE 9]>
		<?php echo $this->Html->script('html5shiv'); ?>
    <![endif]-->
</head>
  
<body>

    <!-- Primary navigation -->
	<?php echo $this->element('primary_navigation_admin');?>   
    
    <!-- Secondary navigation -->
	<?php echo $this->element('secondary_navigation_admin');?>   

    <!-- Content -->
    <section id="maincontainer">
		<div id="main">
			<?php echo $content_for_layout; ?>
		</div>
    </section>
  
</body>
</html>