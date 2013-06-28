jQuery(document).ready(function(){
	
	/*CONTEST*/
	
	//Focus
	jQuery('#ContestAdminAddPhotoFormH1').focus(function(){
		jQuery('#addContestUploadFile_error').hide();
		jQuery('#addContestUploadFile_error1').hide();
	});
	
	jQuery('#addContestUploadFile').focus(function(){
		jQuery('#addContestUploadFile_error').hide();
		jQuery('#addContestUploadFile_error1').hide();
	});
	
	jQuery('#addContestTitle').focus(function(){
		jQuery('#addContestTitle_error').hide();
	});
	
	jQuery('#addContestDescription').focus(function(){
		jQuery('#addContestDescription_error').hide();
	});
	
	jQuery('#addContestFromDate').focus(function(){
		jQuery('#addContestFromDate_error').hide();
	});
	
	jQuery('#addContestToDate').focus(function(){
		jQuery('#addContestToDate_error').hide();
		jQuery('#addContestToDate_error1').hide();
	});
	
	jQuery('#addContestConditions').focus(function(){
		jQuery('#addContestConditions_error').hide();
	});
	
	//Remove image (when editing contest)
	jQuery("#editContestRemoveImage").click(function(e){
		if(confirm("Are you sure you want to remove this photo?")){
			jQuery("#ediContestUploadFile_thumbnail").hide();
			jQuery("#ediContestUploadFile_addphoto").show();
			jQuery("#ediContestUploadFile_addphoto #addContestUploadFile").val("");
		} 
		e.preventDefault();
	});
	
	//Timepicker From/To (Add Contest)
	var d = new Date();
	jQuery('#addContestFromDate').datetimepicker({
		showSecond: true,
		dateFormat: 'mm-dd-yy',
		timeFormat: 'hh:mm:ss',
		hour: d.getHours(),
		minute: d.getMinutes(),
		second: d.getSeconds()
	});
	
	jQuery('#addContestToDate').datetimepicker({
		showSecond: true,
		dateFormat: 'mm-dd-yy',
		timeFormat: 'hh:mm:ss',
		hour: d.getHours(),
		minute: d.getMinutes(),
		second: d.getSeconds()
		//stepHour: 2,
		//stepMinute: 10,
		//stepSecond: 10
	});
	
	jQuery('#changeReleaseDateInput').datetimepicker({
		showSecond: true,
		dateFormat: 'mm-dd-yy',
		timeFormat: 'hh:mm:ss',
		hour: d.getHours(),
		minute: d.getMinutes(),
		second: d.getSeconds()
	});
	
	//Validate (Add)
	jQuery('#ContestAdminAddForm').submit(function(){
		var ok = true;
		var img_value = jQuery('#addContestUploadFile').val(); 
		var extension = img_value.split('.').pop().toLowerCase();
		
		//Upload image
		if( img_value == '' ){
			jQuery('#addContestUploadFile_error').show();
			jQuery('#addContestUploadFile_error1').hide();
			ok = false;
		}
		else if( $.inArray(extension, ['png', 'gif', 'jpeg', 'jpg']) == -1 ){
			jQuery('#addContestUploadFile_error').hide();
			jQuery('#addContestUploadFile_error1').show();
			ok = false;
		}	
		
		//Title
		if( jQuery('#addContestTitle').val() == '' ){
			jQuery('#addContestTitle_error').show();
			ok = false;
		}
		
		//Description
		if( jQuery('#addContestDescription').val() == '' ){
			jQuery('#addContestDescription_error').show();
			ok = false;
		}
		
		//From (Start Date)
		if( jQuery('#addContestFromDate').val() == '' ){
			jQuery('#addContestFromDate_error').show();
			ok = false;
		}
		
		//To (End Date)
		if( jQuery('#addContestToDate').val() == '' ){
			jQuery('#addContestToDate_error').show();
			ok = false;
		}
		else{
			//Compare StartDate and EndDate
			var startDate = parseDate($('#addContestFromDate').val()).getTime();
			var endDate = parseDate($('#addContestToDate').val()).getTime();
					
			if (startDate > endDate){
				jQuery('#addContestToDate_error1').show();
				ok = false;
			}
		}
		
		//Conditions
		if( jQuery('#addContestConditions').val() == '' ){
			jQuery('#addContestConditions_error').show();
			ok = false;
		}
			
		return ok;
	}); 
	
	//Validate (Edit)
	jQuery('#ContestAdminEditForm').submit(function(){
		var ok = true;
		
		if( jQuery('#ediContestUploadFile_addphoto').is(":visible") ){
			var img_value = jQuery('#addContestUploadFile').val(); 
			var extension = img_value.split('.').pop().toLowerCase();
			
			//Upload image
			if( img_value == '' ){
				jQuery('#addContestUploadFile_error').show();
				jQuery('#addContestUploadFile_error1').hide();
				ok = false;
			}
			else if( $.inArray(extension, ['png', 'gif', 'jpeg', 'jpg']) == -1 ){
				jQuery('#addContestUploadFile_error').hide();
				jQuery('#addContestUploadFile_error1').show();
				ok = false;
			}	
		}
		
		//Title
		if( jQuery('#addContestTitle').val() == '' ){
			jQuery('#addContestTitle_error').show();
			ok = false;
		}
		
		//Description
		if( jQuery('#addContestDescription').val() == '' ){
			jQuery('#addContestDescription_error').show();
			ok = false;
		}
		
		//From (Start Date)
		if( jQuery('#addContestFromDate').val() == '' ){
			jQuery('#addContestFromDate_error').show();
			ok = false;
		}
		
		//To (End Date)
		if( jQuery('#addContestToDate').val() == '' ){
			jQuery('#addContestToDate_error').show();
			ok = false;
		}
		else{
			//Compare StartDate and EndDate
			var startDate = parseDate($('#addContestFromDate').val()).getTime();
			var endDate = parseDate($('#addContestToDate').val()).getTime();
					
			if (startDate > endDate){
				jQuery('#addContestToDate_error1').show();
				ok = false;
			}
		}
		
		//Conditions
		if( jQuery('#addContestConditions').val() == '' ){
			jQuery('#addContestConditions_error').show();
			ok = false;
		}
			
		return ok;
	}); 
	
	//Hover remove button (list contest entries)
	jQuery(".list_addtional").hover(
		function(){
			jQuery(this).children("#view_contest_list_button").show();
		},
		function(){
			jQuery(this).children("#view_contest_list_button").hide();
		}
	);
	
	//Delete contest entries
	jQuery(".removePhotoListEntry").click(function(){
		if(confirm("Are you sure you want to delete this photo?")){
			var href = jQuery(this).attr('href');
			parentLv2 = jQuery(this).parent().parent();
			loading = parentLv2.find('span.loading').css('display','inline-block');
			jQuery.ajax({
				type: "POST", 
				url: href, 
				data: "",
				complete: function(data){
					loading.hide();
					parentLv2.remove();
				}
			});
		} 
		return false;
	});
	
	//Validate (Add Photo Ajax)
	jQuery('#ContestAdminAddPhotoForm').submit(function(){
		var ok = true;
		var img_value = jQuery('#addContestUploadFile').val(); 
		var extension = img_value.split('.').pop().toLowerCase();
		
		//Upload image
		if( img_value == '' ){
			jQuery('#addContestUploadFile_error').show();
			jQuery('#addContestUploadFile_error1').hide();
			ok = false;
		}
		else if( $.inArray(extension, ['png', 'gif', 'jpeg', 'jpg']) == -1 ){
			jQuery('#addContestUploadFile_error').hide();
			jQuery('#addContestUploadFile_error1').show();
			ok = false;
		}	
		
		//Release Date
		if( jQuery('#addContestFromDate').val() == '' ){
			jQuery('#addContestFromDate_error').show();
			ok = false;
		}
		
		return ok;
	}); 
	
	//Validate (Change Date Release Photo)
	jQuery('#modal2').hide();
	
	jQuery('.time_release_content').children('#changeReleaseDate').click(function(){
		var entry_id = $(this).next('#change_date_release_addtional_entry_id').text();
		var value = ConvertDate_DB2View($(this).parent().find('#change_date_release_addtional_value').text());
		var url = jQuery('#changeReleaseDateLink').text();
		var new_action = url + '/' + entry_id;
		
		jQuery('#changeReleaseDateInput_error').hide(); 
		jQuery('#changeReleaseDateInput').val(value);
		jQuery('#ChangeReleaseDateAddtional').attr('action', new_action);
	});
	
	jQuery('#changeReleaseDateInput').focus(function(){
		jQuery('#changeReleaseDateInput_error').hide(); 
	});
	
	jQuery('#ChangeReleaseDateAddtional').submit(function(){
		var ok = true;
		
		//Release Date
		if( jQuery('#changeReleaseDateInput').val() == '' ){
			jQuery('#changeReleaseDateInput_error').show();
			ok = false;
		}
		
		return ok;
	}); 
	
	/*MESSAGE*/
	jQuery('#MessageSendEmailContent').focus(function(){
		jQuery('#MessageSendEmailContent_error').hide();
	});
	
	jQuery('#MessageSendEmailSubject').focus(function(){
		jQuery('#MessageSendEmailSubject_error').hide();
	});
	
	jQuery('.MessageSendEmailType').change(function(){
		var value = jQuery(this).val();
		if(value == "1"){
			jQuery('#MessageSendEmailTo').hide();
		}
		else{
			jQuery('#MessageSendEmailTo').show();
		}
	});
	
	jQuery('#MessageSendEmail').submit(function(){
		var ok = true;
		if(jQuery('#MessageSendEmailContent').val() == ''){
			jQuery('#MessageSendEmailContent_error').show();
			ok = false;
		}
		if(jQuery('#MessageSendEmailSubject').val() == ''){
			jQuery('#MessageSendEmailSubject_error').show();
			ok = false;
		}
		return ok;
	});
	
	/*CHANGE PASSWORD*/
	
	//Focus
	jQuery('#ChangePasswordAndEmailCurrentPassword').focus(function(){
		jQuery('#ChangePasswordAndEmailCurrentPassword_error').hide();
	});
	
	jQuery('#ChangePasswordAndEmailNewPassword').focus(function(){
		jQuery('#ChangePasswordAndEmailNewPassword_error').hide();
	});
	
	jQuery('#ChangePasswordAndEmailConfirmPassword').focus(function(){
		jQuery('#ChangePasswordAndEmailConfirmPassword_error').hide();
	});
	
	//Validate Form
	jQuery('#ChangePasswordAndEmail').submit(function(){
		var ok = true;
		
		if(jQuery('#ChangePasswordAndEmailCurrentPassword').val() == ''){
			jQuery('#ChangePasswordAndEmailCurrentPassword_error').show();
			ok = false;
		}
		
		if(jQuery('#ChangePasswordAndEmailNewPassword').val() == ''){
			jQuery('#ChangePasswordAndEmailNewPassword_error').show();
			ok = false;
		}
		
		if(jQuery('#ChangePasswordAndEmailNewPassword').val() != jQuery('#ChangePasswordAndEmailConfirmPassword').val()){
			jQuery('#ChangePasswordAndEmailConfirmPassword_error').show();
			ok = false;
		}
		
		return ok;
	});
	
	/*CHANGE EMAIL ADDRESS*/
	
	//Focus
	jQuery('#ChangeEmailNewEmail').focus(function(){
		jQuery('#ChangeEmailNewEmail_error').hide();
		jQuery('#ChangeEmailNewEmail_error1').hide();
	});
	
	//Validate Form
	jQuery('#ChangeEmailAddress').submit(function(){
		var ok = true;
		var email = jQuery('#ChangeEmailNewEmail').val();
		
		if(email == ''){
			jQuery('#ChangeEmailNewEmail_error').show();
			ok = false;
		}
		else if(!IsValidEmail(email)){
			jQuery('#ChangeEmailNewEmail_error1').show();
			ok = false;
		}
		
		return ok;
	});
	
	/*READ MORE COMMENTS*/
	jQuery('.read_more_comment').click(function(){
		jQuery(this).parent().find('#excerpt_content').hide();
		jQuery(this).parent().find('#full_content').show();
		jQuery(this).hide();
	});
	
	/*REPLY MESSAGE*/
	jQuery('#ReplyMessageContent').focus(function(){
		jQuery('#ReplyMessageContent_error').hide();
	});

	jQuery('#ReplyMessage').submit(function(){
		var ok = true;
		if(jQuery('#ReplyMessageContent').val() == ''){
			jQuery('#ReplyMessageContent_error').show();
			ok = false;
		}
		return ok;
	});
});

function parseDate(str) {
	var date = str.split(' ');
	var mdy = date[0].split('-');
	return new Date(mdy[2], mdy[0], mdy[1]);   //Convert mm-dd-yyyy to yyyy-mm-dd
}

function IsValidEmail(email) {
	var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
	return filter.test(email);
} 

//Convert Y-m-d H:i:s to m-d-Y H:i:s
function ConvertDate_DB2View(str){
	var result = '';
	var date = str.split(' ');
	var param1 = date[0].split('-');
	
	result = param1[1]+'-'+param1[2]+'-'+param1[0]+' '+date[1];
	return result;
}