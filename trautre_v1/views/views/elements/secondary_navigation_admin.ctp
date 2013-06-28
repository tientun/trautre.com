<!-- Secondary navigation -->   
<script type="text/javascript">
	$(document).ready(function(){
		var controller = $('#controller_name').text();
		var action = $('#action_name').text();
			
		//Đóng tất cả các sub-menu
		$(".collapsed").hide();
			
		//Mở sub-menu hiện tại
		if( controller == "contests" ){
			activeMainMenu('0');
			showMenu(".contest_navigation");
			if( action == "index" ) showSubMenu("#contest_index");
			else if( action == "add" ) showSubMenu("#contest_add");
			else if( action == "finished_contest" ) showSubMenu("#contest_finish");
		} 
		else if( controller == "users" || controller == "user_photos" ){
			activeMainMenu('1');
			showMenu(".user_navigation");
			if( action == "index" ) showSubMenu("#user_index");
		} 
		else if( controller == "entry_comments" ){
			activeMainMenu('2');
			showMenu(".comment_navigation");
			if( action == "index" ) showSubMenu("#comment_index");
		} 
		else if( controller == "messages" ){
			activeMainMenu('3');
			showMenu(".message_navigation");
			if( action == "send" ) showSubMenu("#message_send");
			else if( action == "inbox" ) showSubMenu("#message_inbox");
			else if( action == "sent_message" ) showSubMenu("#message_sent_message");
		} 
		else if( controller == "user_activities" ){
			activeMainMenu('4');
			showMenu(".report_navigation");
			if( action == "index" ) showSubMenu("#report_index");
		} 
		else if( controller == "admins" ){
			activeMainMenu('5');
			showMenu(".profile_navigation");
			if( action == "view" ) showSubMenu("#profile_view");
			else if( action == "change_password" ) showSubMenu("#profile_change_password");
			else if( action == "change_email" ) showSubMenu("#profile_change_email");
		} 
		else if( controller == "entries" ){
			activeMainMenu('1');
			showMenu(".user_navigation");
			if( action == "view_user" ) showSubMenu("#user_index");
		} 
		
	});	 
	
	function showMenu(class_menu){
		$(class_menu).show();
	}
	
	function showSubMenu(id){
		$(id).addClass("active");
	}
	
	function activeMainMenu(pos){
		$('#primary ul li:eq('+pos+')').addClass('active');
	}
</script>

<div style="display:none" id="controller_name"><?php echo $this->params['controller']; ?></div>
<div style="display:none" id="action_name"><?php echo $this->params['action']; ?></div>

<!-- Contest management -->
<nav id="secondary" class="contest_navigation collapsed">
    <ul>
		<li id="contest_index"><?php echo $this->Html->link('List Popular Contests', array('controller' => 'contests', 'action' => 'index')); ?></li>
		<li id="contest_finish"><?php echo $this->Html->link('List Finished Contests', array('controller' => 'contests', 'action' => 'finished_contest')); ?></li>
		<li id="contest_add"><?php echo $this->Html->link('Add A Contest', array('controller' => 'contests', 'action' => 'add')); ?></li>
	</ul>
      
    <div id="notifications">
        <ul></ul>
    </div>
</nav>

<!-- User -->
<nav id="secondary" class="user_navigation collapsed">
    <ul>
		<li id="user_index"><?php echo $this->Html->link('List All Users', array('controller' => 'users', 'action' => 'index')); ?></li>	
	</ul>
      
    <div id="notifications">
        <ul></ul>
    </div>
</nav>

<!-- Comment -->
<nav id="secondary" class="comment_navigation collapsed">
    <ul>
		<li id="comment_index"><?php echo $this->Html->link('List All Comments', array('controller' => 'entry_comments', 'action' => 'index')); ?></li>	
	</ul>
      
    <div id="notifications">
        <ul></ul>
    </div>
</nav>

<!-- Messages -->
<nav id="secondary" class="message_navigation collapsed">
	<ul>
		<li id="message_send"><?php echo $this->Html->link('Send message to user', array('controller' => 'messages', 'action' => 'send')); ?></li>	
		<li id="message_inbox"><?php echo $this->Html->link('Inbox', array('controller' => 'messages', 'action' => 'inbox')); ?></li>	
		<li id="message_sent_message"><?php echo $this->Html->link('Sent Message', array('controller' => 'messages', 'action' => 'sent_message')); ?></li>	
	</ul>
      
    <div id="notifications">
        <ul></ul>
    </div>
</nav>

<!-- Reports -->
<nav id="secondary" class="report_navigation collapsed">
    <ul>
		<li id="report_index"><?php echo $this->Html->link('User activities', array('controller' => 'user_activities', 'action' => 'index')); ?></li>	
	</ul>
      
    <div id="notifications">
        <ul></ul>
    </div>
</nav>

<!-- Profile -->
<nav id="secondary" class="profile_navigation collapsed">
    <ul>
		<li id="profile_view"><?php echo $this->Html->link('Profile', array('controller' => 'admins', 'action' => 'view')); ?></li>	
		<li id="profile_change_password"><?php echo $this->Html->link('Change Password', array('controller' => 'admins', 'action' => 'change_password')); ?></li>	
		<li id="profile_change_email"><?php echo $this->Html->link('Change Email', array('controller' => 'admins', 'action' => 'change_email')); ?></li>	
	</ul>
      
    <div id="notifications">
        <ul></ul>
    </div>
</nav>