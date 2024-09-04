<?php
include("config.php");

$stmt = $conn->prepare("INSERT INTO form (Nama, Nim, phone, Email, Gender, Kritik) VALUES (?, ?, ?, ?, ?, ?)");

if ($stmt) {
    $stmt->bind_param("ssssss", $nama, $nim, $phone, $email, $gender, $kritik);

    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $kritik = $_POST['kritik'];

    $stmt->execute();
    echo "Thank You For Contacting Us";
    $stmt->close();
} else {
    die("Couldn't enter data: " . $conn->error);
}

$conn->close();
?>