<?php
	include ("connect.php");
	
	$id = $_REQUEST['customer_id'];
	 if (isset($id) && is_numeric($id))
 {

 
 $query="DELETE  FROM customer_details WHERE customer_id=$id";

 $result = mysqli_query($conn, $query)or die(mysqli_error($conn)); 
 	if($result==true){
?>

<?php	
	}
 
 header("Location: viewticket.php");
 }
 
 
 else
 {
 header("Location: viewticket.php");
 }
	
	
	
mysqli_close($conn);
?>