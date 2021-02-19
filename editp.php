<?php
include'inc/conn.php';
$id=(int)$_GET['id'];
$sql="select * from items where id='$id'";
$ret=mysqli_query($connection,$sql);
while($res=mysqli_fetch_assoc($ret)){
   $bookname=$res['bookname'];
   $authorname=$res['authorname'];
   $category=$res['category'];
   $number=$res['number']; 
   $descrp=$res['descrp'];
   $pic=$res['img'];     
}
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
	  background-color:#444;
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
                        <a class="nav-link" href="logout.php">تسجيل الخروج <span class="sr-only">(current)</span></a>
                  </li>
                  
              </ul>
              
          </div>
       </nav>
	   <div class="container">
	     <div class="row">
		   <div class="col-lg-12 col-md-12">
		      <form dir="rtl"  action="" method="post" enctype="multipart/form-data">
              <div class="form-group">
               <label for="exampleInputEmail1" class="black">اسم الكتاب</label>
               <input type="text" name="mbook" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="<?php echo $bookname; ?>>
             </div>
             <div class="form-group">
              <label for="exampleInputPassword1" class="black">اسم المؤلف</label>
              <input type="text" name="mauthor" class="form-control" id="exampleInputPassword1" value="<?php echo $authorname; ?>">
             </div>
			 
			 <div class="form-group">
              <label for="exampleInputPassword1" class="black">فئة</label>
               <select name="category">
			      <option value='<?php echo $category; ?>'><?php echo $category; ?></option>
			     <option value="scientific">scientific</option>
				 <option value="literary">literary</option>
			   </select>
             </div>
			 <div class="form-group">
              <label for="exampleInputPassword1" class="black">عدد الصفحات </label>
              <textarea class="form-control" name="mnumber" id="exampleInputPassword1"><?php echo $number; ?> </textarea>
             </div>
			 <div class="form-group">
              <label for="exampleInputPassword1" class="black">وصف الكتاب</label>
              <textarea class="form-control" name="mdescrp" id="exampleInputPassword1"><?php echo $descrp; ?></textarea>
             </div>
			<div class="form-group">
              <label for="exampleInputPassword1" class="black">ألصورة الحالية</label>
                <center><img src="img/<?php echo $pic; ?>"  style="width:180px; height:auto;" /></center>
             </div>
			 <div class="form-group">
              <label for="exampleInputPassword1" class="black">الصورة</label>
              <input type="file" name="fileToUpload" class="form-control" id="fileToUpload">
             </div>
			 
			
             <td><input type="submit" value="تعديل" name="edit" class="btn btn-dark"></td>
			
			<?php
		       if(isset($_POST['edit'])){
				   
				   $bookname=$_POST['mbook'];
				   $authorname=$_POST['mauthor'];
				   $category=$_POST['category'];
				   $number=$_POST['mnumber'];
				   $descrp=$_POST['mdescrp'];
				   $fileToUpload=$_FILES['fileToUpload']['name'];
				   $uploaddir='img/';
				   $uploadfile=$uploaddir . basename($_FILES['fileToUpload']['name']);
				   if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$uploadfile)){
					 
					  if($fileToUpload=='')
					     $sql="update items set bookname='$bookname',authorname='$authorname',category='$category',number='$number',descrp='$descrp',img='$pic' where id='$id'";
				      else
					    $sql="update items set bookname='$bookname',authorname='$authorname',category='$category',number='$number',descrp='$descrp',img='$fileToUpload' where id='$id'";
					  $ret=mysqli_query($connection,$sql);
					  if($ret)
						  echo'<p>تمت عملية التعديل بنجاح</p>';
					      echo'<script>window.location.href="editp.php?id='.$id.'"</script>';
					  
				   }
				   
				   else {
					  if($fileToUpload=='')
					     $sql="update items set bookname='$bookname',authorname='$authorname',category='$category',number='$number',descrp='$descrp',img='$pic' where id='$id'";
				      else
					    $sql="update items set bookname='$bookname',authorname='$authorname',category='$category',number='$number',descrp='$descrp',img='$fileToUpload' where id='$id'";
					  $ret=mysqli_query($connection,$sql);
					  if($ret)
						  echo'<p>تمت عملية التعديل بنجاح</p>';
				   }
			   }
			  
			  
				   
			 ?>
			 
		    </form>
		   </div>
		 </div>
	   </div>
	   <br><br>
	 
  </body>
</html>