<?php
// Connecting database
$conn = mysqli_connect('localhost', 'root', '', 'visitors');
if (!$conn) {
    die("Error: " . mysqli_connect_error());
}

$ip = $_SERVER['REMOTE_ADDR'];
$sql = "SELECT * FROM visitors WHERE ip_address = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $ip);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) == 0) {
    $sql = "INSERT INTO visitors (ip_address, last_active) VALUES (?, NOW())";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $ip);
    mysqli_stmt_execute($stmt);
} else {
    $sql = "UPDATE visitors SET last_active = NOW() WHERE ip_address = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $ip);
    mysqli_stmt_execute($stmt);
}

$sql = "SELECT COUNT(*) AS total_visitors FROM visitors WHERE last_active >= NOW() - INTERVAL 5 MINUTE";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $total_visitors);
mysqli_stmt_fetch($stmt);
echo 'Количество посетителей онлайн: ' . $total_visitors;
mysqli_close($conn);
?>
