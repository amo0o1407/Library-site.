<?php
include'inc/conn.php';

?>
<!DOCTYPE html>
<html>
  <head>
    <title>لوحة التحكم</title>
    <meta charset="utf-8" />
	<link href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa:wght@400;700&family=Reem+Kufi&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Reem+Kufi&display=swap" rel="stylesheet">
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/ourstyle.css" />
	<style>
	  .navbar-expand-lg{
	    background-color:#A0522D;
	  }
	  
	  .navbar-light .navbar-brand{
	    color:#FFFFFF;
		font-family: 'Reem Kufi', sans-serif;
	  }
	  
	  .navbar-light .navbar-nav .active > .nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show > .nav-link{
	   color:#FFFFFF;
	   font-family: 'Aref Ruqaa', serif;
	  }
	  
	  .navbar-light .navbar-nav .nav-link{
	    color:#FFFFFF;
		font-family: 'Aref Ruqaa', serif;
	  }
	  .dropdown-menu .dropdown-item{
		  font-family: 'Aref Ruqaa', serif;
	  }
	  
	  .form-control{
	    margin-left:10px;
	  }
	  
	  body{
	    background-color:#f0f0f0;
	  }
	  
	  .col-lg-4 {
	   margin-top:20px;
	   height:460px;
	   
	  }
	  
	  .col-lg-4 img{
	    width:90;
		height:auto;
	  }
	  
	  .thumbnil{
	    width:98%;
		margin:10px;
		background-color:#FFFFFF;
		height:460px;
		border-radius:2px;
		font-family: 'Aref Ruqaa', serif;
	  }
	  
	 .footer{
	  width:100%;
	  height:300px;
	  background-color:#A0522D;
	  font-family: 'Jomhuria', cursive;
	 } 
	  
	  label{
	    color:#FFFFFF;
	  }
	  
	  .col-lg-6{
	  float:right;
	  }
	  
	  .black{
	   color:#000000;
	  }
	 
	</style>
  </head>
  <body >
       <nav class="navbar navbar-expand-lg navbar-light" dir="rtl">
             <a class="navbar-brand" href="#">المكتبة الالكترونية</a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
             </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                        <a class="nav-link" href="adminindex.php">الرئيسية <span class="sr-only">(current)</span></a>
                  </li>
				  <li class="nav-item active">
                        <a class="nav-link" href="logout.php">تسجيل الخروج <span class="sr-only">(current)</span></a>
                  </li>
                  
              </ul>
              
          </div>
       </nav>
	    <br> <br>
	   <div class="container">
	     <div class="row">
		
		   <div class="col-lg-12 col-md-12">
		       <table class="table table-striped" dir="rtl">
			       <tr>
				     <td>الرقم</td>
					 <td>اسم الكتاب</td>
					 <td>اسم المؤلف</td>
					 <td>فئة</td>
					 <td>عدد الصفحات </td>
					 <td>وصف الكتاب</td>
					 <td>#</td>
					 <td>#</td>
				   </tr>
				   <?php
				   $sql="select * from items";
				   $ret=mysqli_query($connection,$sql);
				   while($res=mysqli_fetch_assoc($ret)){
					   echo'<tr>
					         <td>'.$res['id'].'</td>
							 <td>'.$res['bookname'].'</td>
							 <td>'.$res['authorname'].'</td>
							 <td>'.$res['category'].'</td>
							 <td>'.$res['number'].'</td>
							 <td>'.$res['descrp'].'</td>';
							 ?>
							<td><a type="button" href="deletep.php?id=<?php echo $res['id'] ?>" class="btn btn-danger">حذف</a></td>
							<td><a type="button" href="editp.php?id=<?php echo $res['id'] ?>" class="btn btn-success">تعديل</a></td>
						
							
							 <?php
							 echo'</tr>';
					   
				   }
				   
				   ?>
			   </table>
		   </div>
		 </div>
	   </div>
	   <br><br>
	   
  </body>
</html>