<div class="container">
	<div class="col-xl-6">
		<form method="post" action="" enctype="multipart/form-data">
			<div class="form-group">
				<label>Image : </label>
				<input type="file" name="file[]" class="form-control" multiple="">
			</div>
			<input type="submit" name="submit" class="btn btn-info">
		</form>
	</div>
</div>
<?php
if(isset($_POST["submit"]))
{
	// foreach($_FILES["file"]["name"] as $name=>$values)
	// {
	// 	$file=$_FILES["file"]["tmp_name"][$name];
	// 	$destination="img/".$_FILES["file"]["name"][$name];
	// 	if(move_uploaded_file($file,$destination))
	// 	{
	// 		$file=$_FILES["file"]["name"][$name];
	// 	}
	// 	$con=mysqli_connect("localhost","root","","my_multiple_file");
	// 	$qry=mysqli_query($con,"insert into upload (file) values ('$file')");
	// }

	// echo "<pre>";
	// print_r($_FILES["file"]["name"]);
	
	for($i=0;$i<count($_FILES["file"]["name"]);$i++)
	{
		$file=$_FILES["file"]["tmp_name"][$i];
		$destination="img/".$_FILES["file"]["name"][$i];
		if(move_uploaded_file($file,$destination))
		{
			$file=$_FILES["file"]["name"][$i];
		}
		$con=mysqli_connect("localhost","root","","my_multiple_file");
		$qry=mysqli_query($con,"insert into upload (file) values ('$file')");
	}
}
?>
