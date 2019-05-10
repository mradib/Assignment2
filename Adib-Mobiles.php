<?php

class AdibMobile {
		
	public function MyName () {
		$a = "Nokia";
		return $a;
} 
    public function MyModel () {
		$b = "1100";
		return $b;
} 
    public function MyPrice () {
		$c = 3000;
		return $c;
} 
}

$obj = new AdibMobile; 
$Model = $obj->MyName(); 
$Name  = $obj->MyModel();
$Price = $obj->MyPrice();
if(!empty($Model)){
	if(!empty($Price)){
	if(!empty($Name)){
		$host = "localhost";
        $dbusername = "testuser";
        $dbpassword = "1";
        $dbname = "test";
		$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
		if(mysqli_connect_error()){
             die('Connection Error ('. mysqli_connect_errno().')'. mysqli_connect_error());
            }
        else{for($i = 1;$i <= 10;$i++){
	         $sql = "INSERT INTO mobiles (Model, Name, Price) values ('$Model','$Name','$Price')";
	         if ($conn->query($sql)){
		echo "New record is inserted successfully";
		    }
	         else{
		echo "Error: ". $sql ."<br>";
	        }
		}
	$conn->close();
}
	}
	else{
        echo "Name cannot be left empty";
		die();
	}
	}
	else{
		echo "Price cannot be left empty";
		die();
	}
}
else	{
	echo "Username cannot be left empty";
	die();
}
?> 