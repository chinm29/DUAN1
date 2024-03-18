<?php
$host="localhost";
$dbname='photozone_data';
$user="root";
$pass="";
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Kết nối thành công";
} catch(PDOException $e) {
    echo "Kết nối không thành công: " . $e->getMessage();
}

// if (!$conn) {
//     die("Kết nối không thành công: " .mysqli_connect_error());
// }else{
//     echo("Kết nối không thành công ");
// }
?>
