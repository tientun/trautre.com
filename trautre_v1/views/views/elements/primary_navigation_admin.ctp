<!-- Primary navigation -->
<nav id="primary">
	<ul>	
        <li>
			<?php echo $this->Html->link('<span class="glyph dashboard"></span>Contests', array('controller' => 'contests', 'action' => 'index'), array('escape' => false)); ?>
        </li>
		<li>
			<?php echo $this->Html->link('<span class="glyph shuffle"></span>Users', array('controller' => 'users', 'action' => 'index'), array('escape' => false)); ?>
        </li>
        <li>
			<?php echo $this->Html->link('<span class="glyph pencil"></span>Comments', array('controller' => 'entry_comments', 'action' => 'index'), array('escape' => false)); ?>
        </li>
        <li>
			<?php echo $this->Html->link('<span class="glyph listicon"></span>Messages', array('controller' => 'messages', 'action' => 'send'), array('escape' => false)); ?>
        </li>
		<li>
			<?php echo $this->Html->link('<span class="glyph chart"></span>Reports', array('controller' => 'user_activities', 'action' => 'index'), array('escape' => false)); ?>
        </li>
		<li>
			<?php echo $this->Html->link('<span class="glyph user"></span>Profile', array('controller' => 'admins', 'action' => 'view'), array('escape' => false)); ?>
        </li>
        <li class="bottom">
			<a href="<?php echo $this->webroot ."logout";?>">
				<span class="glyph quit"></span>
				Log out
			</a>
        </li>
    </ul>
</nav>