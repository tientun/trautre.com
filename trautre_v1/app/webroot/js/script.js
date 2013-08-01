function clickMade(cb) {
  if(document.getElementById('IsSelfMade').checked == true){
                document.getElementById('Source').disabled = true;
                document.getElementById('Source').value = "";
            }
            else{                
                document.getElementById('Source').disabled = false;
            }
};
/*
    $(document).ready(function(){// Bắt lấy sự kiện người dùng click vào checkbox hay chưa
            if(document.getElementById('submitForm.IsSelfMade').checked == true){
                document.getElementById('Source').disabled = true;
            }
            else{
                document.getElementById('Source').disabled = true;
            }
    });
    */
$(window).scroll(function(){       
    var array = [];
    var k = 0;
    $( ".photoList .thumbnail" ).each(function (i) {
        array[i] = $(this).height(); 
      });
   // var scrTop = $(window).scrollTop();
   // if (scrTop > array[k] - 30 || scrTop < 60 ){   
       // $(".photoList .info0").addClass("pos_relative").removeClass("pos_fixed");
    //}
    //else{
        //$(".photoList .info0").addClass("pos_fixed").removeClass("pos_relative");
    //} 
	
});
