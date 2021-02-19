<?php
include'inc/conn.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <title>المكتبة الألكترونية</title>
    <meta charset="utf-8" />
	<link href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa:wght@400;700&family=Jomhuria&family=Reem+Kufi&display=swap" rel="stylesheet">
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
	    background-color:#A0522D;00
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
	 .col-lg-12 {
		 margin-top:20px;
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
                        <a class="nav-link" href="index.php">الرئيسية <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            أنواع الكتب 
                       </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">الكتب العلمية</a>
                        <a class="dropdown-item" href="#">الكتب الأدبية</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">جميع الكتب</a>
                    </div>
                 </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="اكتب اسم الجهاز" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">البحث</button>
              </form>
          </div>
       </nav>
	   <div class="container">
	     <div class="row">
		   <div class="col-lg-12 col-md-12">
		       <center><video width="300" height="150" controls>
			     <source src="video1.mp4" type="video/mp4" >
				</video></center>
		   </div>
		   <div class="col-lg-12 col-md-12">
		       <center><video width="300" height="150" controls>
			     <source src="video2.mp4" type="video/mp4" >
				</video></center>
		   </div>
		   <div class="col-lg-12 col-md-12">
		       <center><video width="300" height="150" controls>
			     <source src="video3.mp4" type="video/mp4" >
				</video></center>
		   </div>
		 </div>
	   </div>
	   <br><br>
	   <footer class="footer">
	    <div class="col-lg-6">
		    <form>
              <div class="form-group">
               <label for="exampleInputEmail1">البريد الالكتروني</label>
               <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="أدخل بريدك الالكتروني">
               <small id="emailHelp" class="form-text text-muted">لن نشارك المعلومات مع أحد</small>
             </div>
             <div class="form-group">
              <label for="exampleInputPassword1">كلمة المرور</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="كلمة المرور">
             </div>
             <button type="submit" class="btn btn-dark">تسجيل دخول</button>
		   </form>
		</div>
		<div class="col-lg-6">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28618.02901478879!2d43.878044469440106!3d26.285876737676638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1581fc02c6631821%3A0x8c755656febea742!2z2KfZhNio2LXYsdiMINio2LHZitiv2Kk!5e0!3m2!1sar!2ssa!4v1591472988444!5m2!1sar!2ssa" style="width:100%; height:230px;" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	   </footer>
  </body>
</html>