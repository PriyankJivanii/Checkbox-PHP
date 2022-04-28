<form method="POST">
<input type="checkbox" name="english[]" value="english"> english <?php PHP_EOL; ?>
<input type="checkbox" name="english[]" value="hindi"> hindi <?php PHP_EOL; ?>
<input type="checkbox" name="english[]" value="gujrati"> gujrati <?php PHP_EOL; ?><br>
<input type="submit" name="submit" value="submit">
</form>
<?php 
$con=mysqli_connect('localhost','root','','checkbox');

if(isset($_POST['submit'])){
		$english=implode(',',$_POST['english']);
		
		
		$insert="insert into chechbox(value) values('$english')";
		
		$query=mysqli_query($con,$insert);
		if($query){
			
			echo "insert successfull";
			
			
		}else{
			
			
			echo "not inserted";
			
			
		}
}
?>