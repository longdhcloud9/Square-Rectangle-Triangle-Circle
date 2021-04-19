$(document).ready(function(){

  //selected_form = sessionStorage.getItem("editmode");
  //  $(".content form").hide();
  //if(selected_form !="" && selected_form!= null)//true, has value, !null, ! "",
   //{
    // $("#"+selected_form).show();
   //}



  $(".dropdown .dropdown-content .item").on("click",function(){
     $(".content form").hide();
     $class  = this.className;
     $arrClass = $class.split(" ");
    //class_name =	$(this).className;
     $("#"+ $arrClass[0]).show();
     //sessionStorage.setItem("editmode",$arrClass[0]);
  });

 
});
