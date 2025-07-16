<!-- photo uploaded codding -->
<?php

if(isset($_POST['submit']))
{
	include "connection.php";
	$title=$_POST['title'];
	
	
	$cmd="insert into adddata(number,title) values('','$title')";
	$result=mysqli_query($con,$cmd) or die(mysqli_error($con));
	if($result)
	{
		
		echo "done";
		
	}
	else
	{
		echo "<script>alert('Error');</script>";
	}
}
?>
<html>
<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style>
img {
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 150px;
}

img:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
</style>

</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
    
<section name="content">
    <div class="container">
	
	
	 <h3 style="text-align: center;color: blue">Title</h3>
       
     <div style="width: 300px;margin-left: 36%;margin-top:3%">
	 
                
				
				<!--  <div class="form-group">
                    <label for="lblMob">Upload Image</label>
                    <input type="file" name="file" class="form-control">
                </div>  -->
				
				<div class="form-group">
                    <label for="lblName">Add Title Discriptions</label>
                    <textarea  name="title" class="form-control" id="title"  placeholder="Enter Sub name"> </textarea>
                </div>
				
            </div>

            <div class="row" style="margin-top: 3%">
                <div class="btn-toolbar" style="margin-left:45%">
                    <input id="submit" name="submit" type="submit"  value="Send" class="btn btn-primary">
                    
                </div>
            </div>
	
    </div>
</section>


</form>
</body>
</html>