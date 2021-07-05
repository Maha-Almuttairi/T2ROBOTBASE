<?php

if(isset($_POST['save'])){

$servo1 = $_POST['servo1'];
$servo2 = $_POST['servo2'];
$servo3 = $_POST['servo3'];
$servo4 = $_POST['servo4'];
$servo5 = $_POST['servo5'];
$servo6 = $_POST['servo6'];
}


$conn = mysqli_connect('localhost','root','','robot_arm_control');





$sql = mysqli_query($conn,"INSERT INTO robot_arm_control(servo1,servo2,servo3,servo4,servo5,servo6) VALUES ('$servo1', '$servo2', '$servo3', '$servo4', '$servo5',$servo6)");


if($sql){	
	echo "The data has been saved !";
}

else{
	
	echo "nothing was inserted into table.";
}

}

if(isset($_POST['run'])){

$sql = mysqli_query($conn,"UPDATE robot_arm_control SET status='1' WHERE servo1='$servo1' AND servo2='$servo2' AND servo3='$servo3' AND servo4='$servo4' AND servo5='$servo5' AND servo6='$servo6'");	
	
if($sql){	
	
	echo"in progress now...";

}

else{
	
	echo"Not working, there is an error.";
}

}	


mysqli_close($conn);

$conn2 = mysqli_connect('localhost','root','','robot_arm_control');

if(isset($_POST['left'])){


$sql = mysqli_query($conn2,"INSERT INTO robot_base(direction) VALUES ('LEFT')");


if(!$sql){	

	echo "nothing was inserted into table.";

}
}

if(isset($_POST['right'])){


$sql = mysqli_query($conn2,"INSERT INTO robot_base(direction) VALUES ('RIGHT')");


if(!$sql){	

	echo "nothing was inserted into table.";

}
}

if(isset($_POST['forward'])){


$sql = mysqli_query($conn2,"INSERT INTO robot_base(direction) VALUES ('FORWARD')");


if(!$sql){	

	echo "nothing was inserted into table.";

}
}

if(isset($_POST['backward'])){


$sql = mysqli_query($conn2,"INSERT INTO robot_base(direction) VALUES ('BACWARD')");


if(!$sql){	

	echo "nothing was inserted into table.";

}
}	


if(isset($_POST['stop'])){

echo "You stopped the robot from moving.";

}

mysqli_close($conn2);


?>
