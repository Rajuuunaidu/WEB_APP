<?php
if(isset($_GET['save']))
{
$bid=$_GET['bid'];
$color=$_GET['color'];
$qnt=$_GET['quantity'];
$servername = "localhost";
$username = "raju22";
$password = "rajunaidu548";
$dbname="mydatabase1";
$tab="internshala";


$conn =mysqli_connect($servername, $username, $password,$dbname);
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = " UPDATE internshala 
                 SET color= '$color' 
               WHERE block_id= '$bid'";
if (mysqli_query($conn, $sql)) {
    header('Location:gret.html');
} else {
echo $bid;
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>