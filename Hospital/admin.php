<?php
include "header.php";
?>
<table>
    <tr>
        <th>الرقم</th>
        <th>اسم المريض</th>
        <th>البريد الالكتروني</th>
        <th>التاريخ</th>
    </tr>

<?php
$host = "localhost";
$user = "root"; 
$password = "root";
$dbName = "Hospital";
$db = mysqli_connect($host, $user, $password,$dbName);
/*if (isset($db)) {
    echo "Database connected succesfuly";
} else {
    echo "Database connect faild";
}
*/
$query = "SELECT * FROM patients";
$res = mysqli_query($db,$query);
if($res){
    while($row = mysqli_fetch_assoc($res)){
        echo "<tr><td>".$row['id']. "</td><td>". $row['name']."</td><td>".  $row['email']. "</td><td>". $row['date']. "</td></tr>";
    }
    echo "</table>";
}else{
    echo "يوجد خطأ ما";
}
?>