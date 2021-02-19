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
	  height:60%;
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
                        <a class="nav-link" href="index.php">الرئيسية <span class="sr-only">(current)</span></a>
                  </li>
				  <li class="nav-item active">
                        <a class="nav-link" href="register.php">تسجيل <span class="sr-only">(current)</span></a>
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
		      <form dir="rtl"  action="" method="post">
              <div class="form-group">
               <label for="exampleInputEmail1" class="black">الاسم</label>
               <input type="text" name="pname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="اكتب اسمك الثلاثي" required>
             </div>
             <div class="form-group">
              <label for="exampleInputPassword1" class="black">رقم الهاتف</label>
              <input type="Phone" name="Phone" class="form-control" id="exampleInputPassword1" placeholder="أدخل رقم الهاتف" required>
             </div>
			 <div class="form-group">
              <label for="exampleInputPassword1" class="black">البلد</label>
               <select name="Country">
			     <option value="Saudi">السعودية</option>
				 <option value="Kuwait">الكويت</option>
				 <option value="UAE">الامارات </option>
				 <option value="qatar">قطر</option>
				 <option value="albahrayn">البحرين</option>
				 <option value="Oman">عمان</option>
				 <option value="Syria">سوريا</option>
				 <option value="Lebanon">لبنان</option>
				 <option value="Jordan">الاردن</option>
				 <option value="Iraq">العراق</option>
			   </select>
             </div>
			 
			 <div class="form-group">
              <label for="exampleInputPassword1" class="black">اسم المستخدم</label>
              <input type="text" name="username" class="form-control" id="exampleInputPassword1" placeholder="اكتب اسم المستخدم" required>
             </div>
			 <div class="form-group">
              <label for="exampleInputPassword1" class="black">كلمة المرور</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="اكتب كلمة المرور" required>
             </div>
			  <div class="form-group">
              <label for="exampleInputPassword1" class="black">تأكيد كلمة المرور</label>
              <input type="password" name="password1" class="form-control" id="exampleInputPassword1" placeholder="اكتب كلمة المرور" required>
             </div>
             <input type="submit" value="تسجيل" name="register" class="btn btn-primary">
			 <?php
			   if(isset($_POST['register'])){
				   
					  $pname=$_POST['pname'];
					  $Phone=$_POST['Phone'];
					  $Country=$_POST['Country'];
					  $username=$_POST['username'];
					  $pass1=$_POST['password'];
					  $pass2=$_POST['password1'];
					  if($pass1==$pass2){
					  $sql="insert into users(fullname,Phone,Country,username,password)values('$pname','$Phone','$Country','$username','$pass1')";
					  $ret=mysqli_query($connection,$sql);
					  if($ret)
						  echo'<p>تمت عملية التسجيل بنجاح</p>';
					  }
					  else{
						  echo'<p>الرجاء مطابقة كلمة المرور</p>';
					  }
					  
				  
			   }
			 
			 ?>
		    </form>
		   </div>
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
             <input  type="submit" name="signin" value="تسجيل الدخول" class="btn btn-primary" />
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
                       echo'<script>window.location.href="rindex.php"</script>';
				}
				echo'<center><p>البيانات غير صحيحة</p></center>';			   }
			 ?>
		   </form>
		</div>
		<div class="col-lg-6">
		    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3272.5253352936707!2d35.88568631523741!3d34.89326388038544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15217ddb7eff3c87%3A0xd46107eb6fc4fb69!2z2K3ZhNmI2YQg2YTYqtmD2YbZiNmE2YjYrNmK2Kcg2KfZhNmF2LnZhNmI2YXYp9iq!5e0!3m2!1sen!2s!4v1545004315198" style="width:100%; height:230px;" frameborder="0" style="border:0" allowfullscreen></iframe> 
		    <br><br>
		</div>
		<center>
		     <p style="font-size:14px;">جميع الحقوق محفوظة  - حلول 2018</p>
			 <hr>
		     <a href="http://facebook.com" onMouseOver="button.src='img/facebook1.png';" onMouseOut="button.src='img/facebook2.png'">
			   <img src="img/facebook1.png" style="width:36px; height:36px; " name="button" />
			 </a>
	    </center>  
		<br>
	 </footer>
  </body>
</html>