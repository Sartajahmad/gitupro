<!DOCTYPE html>
<html lang = "en">
   
   <head>
      <meta charset = "utf-8">
      <meta http-equiv = "X-UA-Compatible" content = "IE = edge">
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">
      
      <title>Bootstrap 101 Template</title>
      
      <!-- Bootstrap -->
      <link href = "bootstrap.min.css" rel = "stylesheet">
      
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      
      <!--[if lt IE 9]>
      <script src = "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src = "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <style type="text/css">
         div {border: 0px solid red;}
      </style>
      
   </head>
   
   <body>
      
      <div class="container"><!--container -->

         <div class="row"><!--row-->
            
            <div class="col-md-12"><!--start header -->

               <?php 
               include_once "header.php";
                ?>
               
            </div><!---end header -->
         </div><!---end row -->

         <div class="row"><!--menu row -->

            <div class="col-md-12">
               <?php 
               include_once "menu.php";
                ?>
            </div>
            
         </div><!--end menu row -->

         <div class="row"><!---start content -->
            <div class="col-md-12">
               
               <div class = "panel panel-primary">
   <div class = "panel-heading">
      <h3 class = "panel-title">Search Student Module</h3>
   </div>
   
   <div class = "panel-body">
     <table class = "table">
       <tr>

           <td> Search By Name:</td>
           <td><input type="text" id="searchtext" placeholder="Type Here"></td>
           <td> <input type="button" value="Search Here" class="btn btn-primary" id="btnsearch" ></td>
         </tr>
         
        
     </table>

   </div>
</div>
            </div>
            <div class="col-md-12">
               
               <div class = "panel panel-success">
   <div class = "panel-heading">
      <h3 class = "panel-title">Search Report</h3>
   </div>
   
   <div class = "panel-body" id="searchdiv">
      Search Result Here        
      </div>
   <br></div>
</div>

            </div>

            
            
         </div><!--end content -->

         <div class="row"><!--footer row -->

            <div class="col-md-12">
               <?php 
               include_once "footer.php";
                ?>
            </div>

         
      </div><!--end footer -->
      
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src = "jquery.min.js"></script>
      
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src = "bootstrap.min.js"></script>

      

     <script type="text/javascript">
       
       $(document).ready(function(){

$("#btnsearch").click(function(){

  search = $("#searchtext").val();
  

  
    $.post("searchrecord.php",
    {
      csearch :search,
      
    },
    function(data, status){
       
       $("#searchdiv").html(data);


    });

}); //close of click
});
     </script>
      
   </body>
</html>