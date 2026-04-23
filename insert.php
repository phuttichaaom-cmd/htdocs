<?php
$host = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$dbname = "is222";

$connect = mysqli_connect($host,$dbuser,$dbpass,$dbname,'3306');
if($connect){
	echo "Connect Success";
}else{
	echo "Connect Failed";
}

$sql = "INSERT INTO t_internship (studentID, firstName, lastName, email, term, company, address, province, startDate, endDate, contact)
VALUES ('67101029', 'Jennie', 'Sad','jenni@gmail.com', '2568', 'COKE', 'khaosan Road', 'Bangkok', '11/09/69', '11/10/69', 'Kelly 0961535643')";

if ($connect->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $connect->error;
}

$connect->close();
?>