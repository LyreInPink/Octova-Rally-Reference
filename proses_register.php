<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if (empty($username) || empty($password)) {
    echo "<script>alert('Username dan password wajib diisi!'); window.location='register.php';</script>";
    exit;
}

if (strlen($password) < 5) {
    echo "<script>alert('Password minimal 5 karakter!'); window.location='register.php';</script>";
    exit;
}

$password_hash = password_hash($password, PASSWORD_DEFAULT);

$stmt = mysqli_prepare($conn, "SELECT id FROM users WHERE username = ?");
mysqli_stmt_bind_param($stmt, "s", $username);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Username sudah dipakai!'); window.location='register.php';</script>";
    exit;
}

$stmt = mysqli_prepare($conn, "INSERT INTO users (username, password) VALUES (?, ?)");
mysqli_stmt_bind_param($stmt, "ss", $username, $password_hash);
mysqli_stmt_execute($stmt);

echo "<script>alert('Registrasi berhasil!'); window.location='index.php';</script>";
exit;
?><?php
session_start();
include 'koneksi.php';

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if (empty($username) || empty($password)) {
    echo "<script>alert('Username dan password wajib diisi!'); window.location='register.php';</script>";
    exit;
}

if (strlen($password) < 5) {
    echo "<script>alert('Password minimal 5 karakter!'); window.location='register.php';</script>";
    exit;
}

$password_hash = password_hash($password, PASSWORD_DEFAULT);

$stmt = mysqli_prepare($conn, "SELECT id FROM users WHERE username = ?");
mysqli_stmt_bind_param($stmt, "s", $username);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Username sudah dipakai!'); window.location='register.php';</script>";
    exit;
}

$stmt = mysqli_prepare($conn, "INSERT INTO users (username, password) VALUES (?, ?)");
mysqli_stmt_bind_param($stmt, "ss", $username, $password_hash);
mysqli_stmt_execute($stmt);

echo "<script>alert('Registrasi berhasil!'); window.location='index.php';</script>";
exit;
?>