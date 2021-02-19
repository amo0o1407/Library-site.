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
	  p{
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
	  height:30%;
	  background-color:#A0522D;
	  margin-top:280px;
	  font-family: 'Jomhuria', cursive;
	 } 
	  
	  label{
	    color:#FFFFFF;
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

	  <b><center> <p style="margin-top:100px;font-size:20px;">المكتبات بوابة الحصول على مجموعة واسعة من المصادر والخدمات مجتمعة لدعم التعلم والتدريس والبحث العلمي في المجتمع الجامعي. وتقوم المكتبات<br> بتوفير خدمات بحثية نوعية جيدة بما في ذلك المصادر ، وتهدف إلى تلبية الاحتياجات من المعلومات و البرامج الأكاديمية المتنوعة في الجامعة.


إننا ندعوكم إلى الاستفادة الكاملة من المجموعة الواسعة من المعلومات الرقمية والدراسات القيمة المحفوظة في الكتب . كما نشجعكم على الاستفادة من موظفينا المختصين فى المكتبات فهم دوما على استعداد تام لمساعدتكم في البحث و استخدام المكتبة. لا تترددوا في الاستفادة من المساحات الفضائية المريحة للقراءة والدراسة أفرادا وجماعات.

ونحن نتطلع إلى أسئلتكم وتعليقاتكم ومقترحاتكم</p></center><b>
	   
	   
	   
	   
	   
	   
	   
	   <footer class="footer">
	    <div class="col-lg-6">
		    
		   </form>
		</div>
		
		<center>
		     
		     <a href="http://facebook.com" onMouseOver="button.src='img/rr.png';" onMouseOut="button.src='img/rr.png'">
			   <img src="img/rr.png" style="width:70px; height:70px;margin-top:14px; " name="button" />
			 </a>
			  <a href="http://Twitter.com" onMouseOver="button.src='img/ww.png';" onMouseOut="button.src='img/ww.png'">
			   <img src="img/ww.png" style="width:70px; height:70px;margin-top:14px; " name="button" />
			 </a>
			  <a href="http://Instagram.com" onMouseOver="button.src='img/ee.png';" onMouseOut="button.src='img/ee.png'">
			   <img src="img/ee.png" style="width:70px; height:70px;margin-top:14px; " name="button" />
			 </a>
			 <hr>
			 <p style="font-size:14px;">جميع الحقوق محفوظة أماني الحربي2020</p>
	    </center>  
		<br>
	 </footer>
  </body>
</html>