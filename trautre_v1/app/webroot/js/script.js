$(window).scroll(function(){       
    var array = [];
    var k = 0;
    $( ".photoList .thumbnail" ).each(function (i) {
        array[i] = $(this).height();        
      });
    var scrTop = $(window).scrollTop();                 
    if (scrTop > array[k] - 30 || scrTop < 60 ){   
        $(".photoList .info0").addClass("pos_relative").removeClass("pos_fixed");
    }
    else{
        $(".photoList .info0").addClass("pos_fixed").removeClass("pos_relative");
    }
    //do co 1 phan cua thong bao nen -
    scrTop = scrTop - array[k++] - 100;
    if (scrTop > array[k] - 30|| scrTop < 100 ){                      
        $(".photoList .info1").addClass("pos_relative").removeClass("pos_fixed");
    }else{
        $(".photoList .info1").addClass("pos_fixed").removeClass("pos_relative");
    }    
    scrTop = scrTop - array[k++] - 40;
    if (scrTop > array[k] - 30 || scrTop < 80 ){                      
        $(".photoList .info2").addClass("pos_relative").removeClass("pos_fixed");
    }else{
        $(".photoList .info2").removeClass("pos_relative").addClass("pos_fixed");
    }
    scrTop = scrTop - array[k++] - 40;
    if (scrTop > array[k] - 50 || scrTop < 80 ){                      
        $(".photoList .info3").addClass("pos_relative").removeClass("pos_fixed");
    }else{
        $(".photoList .info3").addClass("pos_fixed").removeClass("pos_relative");
    }
    scrTop = scrTop - array[k++] - 40;
    if (scrTop > array[k] - 30 || scrTop < 80 ){                      
        $(".photoList .info4").addClass("pos_relative").removeClass("pos_fixed");
    }else{
        $(".photoList .info4").addClass("pos_fixed").removeClass("pos_relative");
    }                
    scrTop = scrTop - array[k++] - 40;
    if (scrTop > array[k] - 50 || scrTop < 80 ){                      
        $(".photoList .info5").addClass("pos_relative").removeClass("pos_fixed");
    }else{
        $(".photoList .info5").addClass("pos_fixed").removeClass("pos_relative");
    }                
});
