<!DOCTYPE html>

<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  </head>

<body>



<!--header-->
<div>
<h2><p style="text-align:center;height: 40px;background: grey"> apex software house </p></h2>
</div>

<!--complete-->
<div class="container">
<html>
<head>
<style style="text/css">
div.slide-left {
  width:100%;
  overflow:hidden;
}
div.slide-left p {
  animation: slide-left 10s;
}

@keyframes slide-left {
  from {
    margin-left: 100%;
    width: 300%; 
  }

  to {
    margin-left: 0%;
    width: 100%;
  }
}
</style>


</head>
<body>
  <h2>Title</h2>
  
	
	<section>
<!--image upload codding.....-->
<?php
// Include the database configuration file
include 'connection.php';

//Get images from the database
//$query ="SELECT * FROM adddata";
$query ="select * from adddata  ORDER BY number DESC limit 1";
$result=mysqli_query($con,$query) or die(mysqli_error($con));
$count=mysqli_num_rows($result);
if($count>0){
    while($row =mysqli_fetch_array($result)){
       // $imageURL = 'photo/'.$row["img"];
		$title= $row["title"];
	}
}
	
		
?>


<div class="col-sm-4" style="margin-top:10px">
 <div class="col-md-4"  class="slide-right">
 <b><input type="text" style="border:none"  value="<?php echo $title; ?>" /></b>
  </div>

</div>	

<div class="slide-left">
<p><input type="text" style="border:none;width:000px"  value="<?php echo $title; ?>"  /></p>
</div>

<textarea style="border:none" rows="5" cols="100" >
<?php echo $title; ?>
</textarea>




    
<?php 
}}
else
{
	?>
    <p>No title is complete or found...</p>
<?php } ?>
</section>
 
</div>
</body>

</html>

<!-- footer -->
<div>
<p style="text-align:center;height:20px;background:grey;margin-top:17%"> contact-us:1234567890</p>
</div>
<!-- complete-->

</body>
</html>
