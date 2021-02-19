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
	    background-color:#FFF5EE;
	  }
	  
	  .col-lg-4 {
	   margin-top:10px;
	   height:500px;
	   
	  }
	  
	  .col-lg-4 img{
	    width:240px;
		height:320px;
		margin-top:13px;
	  }
	  
	  .thumbnil{
	    width:80%;
		margin:10px;
		background-color:#FFFFFF;
		height:430px;
		border-radius:2px;
		font-family: 'Aref Ruqaa', serif;
	  }
	  
	 .footer{
	  width:100%;
	  height:80%;
	  background-color:#A0522D;
	  font-family: 'Jomhuria', cursive;
	 } 
	  
	  label{
	    color:#FFFFFF;
	  }
	  
	  .col-lg-6{
	  float:right;
	  }
	  

.banner-img img
{
	width: 100%;
	height:150px;

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
				  <li class="nav-item active">
                        <a class="nav-link" href="register.php">تسجيل</a>
                  </li>
				   <li class="nav-item active">
                        <a class="nav-link" href="we.php">من نحن</a>
                  </li>
				  
                  <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          أنواع الكتب 
                       </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="">الكتب العلمية</a>
						<a class="dropdown-item" href="">الكتب الأدبية</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php">جميع الكتب</a>
                    </div>
                 </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="اكتب اسم الكتاب" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">البحث</button>
              </form>
          </div>
       </nav>
	   <div class="banner">
      <div class="banner-img">

         <img src="img/m.jpg">
      </div>

       </div>

	   
	   
	   
	   
	   
	   
	   
	   <div class="container" dir="rtl">
	     <div class="row">
         <?php
	     $sql="select * from items where category ='scientific'";
		 $ret=mysqli_query($connection,$sql);
		 while($res=mysqli_fetch_assoc($ret)){
			 echo'<div class="col-lg-4 col-md-12 col-sm-12" style="float:right;">
			  <div class="thumbnil">
			  <center><img src="img/'.$res['img'].'" /></center>
			  <hr>
			  <center><button type="button" class="btn btn-dark">مواصفات الكتاب</a></center>
			 </div>
			</div>';
		 }?>	
		  
		 </div>
	   </div>
	   <br><br>
	   <footer class="footer">
	    <div class="col-lg-6">
		    <form  action="" method="post" dir="rtl">
              <div class="form-group">
               <label for="exampleInputEmail1">اسم المستخدم</label>
               <input type="text" class="form-control" id="exampleInputEmail1" name="user" aria-describedby="emailHelp" placeholder="ادخل اسم المستخدم">
               <small id="emailHelp" class="form-text text-muted">لن نشارك المعلومات مع أحد</small>
             </div>
             <div class="form-group">
              <label for="exampleInputPassword1">كلمة المرور</label>
              <input type="password" class="form-control" name="pass" id="exampleInputPassword1" placeholder="كلمة المرور">
             </div>
             <input  type="submit" name="signin" value="تسجيل الدخول" class="btn btn-dark" />
			<?php
			   
			   if(isset($_POST['signin'])){
				$user=$_POST['user'];
                $pass=$_POST['pass'];				
			    $sql="select * from users where username='$user' and password='$pass'";
				$ret=mysqli_query($connection,$sql);
				while($res=mysqli_fetch_assoc($ret)){
					   session_start();
					   $_SESSION['user']=$user;
					   $_SESSION['check']=1;
                       echo'<script>window.location.href="addmob.php"</script>';
				}
				echo'<center><p>البيانات غير صحيحة</p></center>';			   }
			 ?>
		   </form>
		</div>
		<div class="col-lg-6">
		    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28618.02901478879!2d43.878044469440106!3d26.285876737676638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1581fc02c6631821%3A0x8c755656febea742!2z2KfZhNio2LXYsdiMINio2LHZitiv2Kk!5e0!3m2!1sar!2ssa!4v1591472988444!5m2!1sar!2ssa" style="width:100%; height:230px;" frameborder="0" style="border:0" allowfullscreen></iframe> 
		    <br><br>
		</div>
		<center>
		     <p style="font-size:14px;">جميع الحقوق محفوظة أماني الحربي2020</p>
			 <hr>
		     <a href="http://facebook.com" onMouseOver="button.src='img/rr.png';" onMouseOut="button.src='img/rr.png'">
			   <img src="img/rr.png" style="width:36px; height:36px; " name="button" />
			 </a>
			  <a href="http://facebook.com" onMouseOver="button.src='img/ww.png';" onMouseOut="button.src='img/ww.png'">
			   <img src="img/ww.png" style="width:36px; height:36px; " name="button" />
			 </a>
			  <a href="http://facebook.com" onMouseOver="button.src='img/ee.png';" onMouseOut="button.src='img/ee.png'">
			   <img src="img/ee.png" style="width:36px; height:36px; " name="button" />
			 </a>
	    </center>  
		<br>
	 </footer>
  </body>
</html>