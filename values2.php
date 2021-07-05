<?php


$conn = mysqli_connect('localhost','root','','robot_arm_control');


$sql = mysqli_query($conn,"SELECT * FROM robot_base WHERE id=(SELECT MAX(id) FROM robot_base)");



if($sql){	

   echo nl2br("Fetched data successfully ! \n"); 
   echo "<br>";
   
   while($row = mysqli_fetch_assoc($sql)) {
	  echo "Direction: "; echo $row['direction'];	  
}


}

else{
	
	echo "Error.";
}

mysqli_close($conn);


?>