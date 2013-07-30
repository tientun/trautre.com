$(document).ready(function()
{
	$(".close").click(
			function () {
				$(this).parent().fadeTo(400, 0, function () { // Links with the class "close" will close parent
					$(this).slideUp(600);
				});
				return false;
			}
		);
	$("#submitForm").submit(function()
	{
		var ok =true;
		if($("#photos").val() =="")
		{
			
			$("#error_photo").text("Xin vui lòng chọn file ảnh.");
			ok = false;
		}
		if($("#photo_name").val() =="")
		{
			$("#photo_name").addClass("input-validation-error");
			$("#error_photo_name").text("Xin vui lòng nhập tên ảnh.");
			ok = false;
		}
		return ok;
	});
	$("#submitVideo").submit(function()
	{
		var ok =true;
		if($("#link_video").val() =="")
		{
			$("#link_video").addClass("input-validation-error");
			$("#error_link_video").text("Đường dẫn video không được để trống.");
			ok = false;
		}
		if($("#name_video").val() =="")
		{
			$("#name_video").addClass("input-validation-error");
			$("#error_name_video").text("Xin vui lòng nhập tiêu đề video.");
			ok = false;
		}
		return ok;
	});
	$("#editProfile").submit(function()
	{
		var ok =true;
		if($("#profile_name").val() =="")
		{
			$("#profile_name").addClass("input-validation-error");
			$("#error_profile_name").text("Tên hiển thị không được để trống.");
			ok = false;
		}
		return ok;
	});
	
	$("#submitPassword").submit(function()
	{
		var ok =true;
		if($("#OldPassword").val() =="")
		{
			$("#OldPassword").addClass("input-validation-error");
			$("#error_old_password").text("Mật khẩu cũ không được để trống.");
			ok = false;
		}
		if($("#newPassword").val() =="")
		{
			$("#newPassword").addClass("input-validation-error");
			$("#error_new_password").text("Mật khẩu không được để trống.");
			ok = false;
		}
		else
		{
			if($("#newPassword").val().length <6)
			{
				$("#newPassword").addClass("input-validation-error");
				$("#error_new_password").text("Độ dài mật khẩu từ 6 đến 30 kí tự.");
				ok = false;
			}
			
			else if($("#ConfirmNew").val() =="")
			{
				$("#ConfirmNew").addClass("input-validation-error");
				$("#error_confirm_password").text("Xác nhận mật khẩu không được để trống.");
				ok = false;
			}
			else if($("#newPassword").val() != $("#ConfirmNew").val())
			{
				$("#ConfirmNew").addClass("input-validation-error");
				$("#error_confirm_password").text("Xác nhận mật khẩu không đúng.");
				ok = false;
			}
		}
		return ok;
	});
});