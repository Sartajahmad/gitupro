//Write code to chek wether document is ready or not


$(document).ready(function(){

$("#btnsave").click(function(){

	name = $("#nametext").val();
	course= $("#coursetext").val();
	email = $("#emailtext").val();

	
	  $.post("save.php",
    {
  		cname :name,
  		cemail :email,
  		ccourse :course,
    },
    function(data, status){
       
       alert(data);
     

    });

}); //close of click
});