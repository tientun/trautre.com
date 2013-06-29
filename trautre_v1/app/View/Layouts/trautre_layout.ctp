<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />

        <title><?php echo $title_for_layout; ?></title>
        <?php
        echo $this->Html->css('reset.css');
        echo $this->Html->css('css1.css');

        echo $this->Html->script('jquery-1.9.1.min.js');
        echo $this->Html->script('script');
        ?>

        <!--[if lt IE 9]>
        <?php echo $this->Html->script('html5shiv'); ?>
        <![endif]-->
    </head>

    <body>
        <!-- Header -->
        <?php echo $this->element('trautre_header'); ?>   

        <!-- content -->
        <div id="content">
            <div id="mainContainer">
                <!-- Column Left -->
                <div id="leftColumn">
                    <?php echo $content_for_layout; ?>

                    <!-- Footer -->
                    <?php echo $this->element('trautre_footer'); ?>  
                </div>
                
                <!-- Right column -->
                <?php echo $this->element('trautre_right_column'); ?>  

            </div>
        </div>
    </body>
</html>