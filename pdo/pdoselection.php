<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=test2", "root", "");
	$add='kota';
    $sql = 'SELECT * FROM student where address= :address';
	$query = $pdo -> prepare($sql);
	$query -> bindParam(':address', $add, PDO::PARAM_STR);
	$query -> execute();
    $query->setFetchMode(PDO::FETCH_ASSOC);
	while($row=$query->fetch())
	{
		echo $row['id']." ".$row["name"]." ".$row['address']." ".$row['mobile']." "."<br>";
		
	}
} catch (PDOException $e) {
    die("Could not connect to the database :" . $e->getMessage());
}
?>