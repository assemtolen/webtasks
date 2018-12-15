<html>
<head>
	<style>
.div{
    display: inline-block;
}
img{
    width: 150px;
    height: 100px;
    display: inline-block;
}

.car{
    border: solid red;
    margin: 10px;
    padding-bottom: 0px;
    display: inline-block;
    border-radius:5px;
    width: 350px;
}
</style>
</head>
<body>
<?php
$host = 'localhost';
$username ='root';
$password = '';
$dataBase = 'cars';
$conn = mysqli_connect($host,$username,$password,$dataBase);
$conn_error = mysqli_connect_error();
if ($conn_error != null){
    echo "We have an error:<p>  $conn_error </p>";
}
$query="SELECT * FROM cars";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($result)) {

    echo "<div class='car'>";
    echo "<img src=".$row['url'].">";
    echo "<div class='div'>";
    echo "<b>".$row['maker']." ".$row['model']."</b>";
    echo "<p>".$row['price']."</p>";
    echo $row['year']." year ";
    echo "</div>";
    echo "</div>";
}
mysqli_close($conn);
?>
</body>
</html>