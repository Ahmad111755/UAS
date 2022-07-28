<?php
require_once('koneksi.php');

if (isset($_POST['userId']) && isset($_POST['id']) && isset($_POST['title']) && isset($_POST['body'])) {
    $userId       = $_POST['userId'];
    $id     = $_POST['id'];
    $title             = $_POST['title'];
    $body             = $_POST['body'];
    $sql = $conn->prepare("INSERT INTO berita (userId, id, title, body) VALUES (?, ?, ?, ?)");
    $sql->bind_param('ssdd', $userId, $id, $title, $body);
    $sql->execute();
    if ($sql) {
        //echo json_encode(array('RESPONSE' => 'SUCCESS'));
        header("location:index.php");
    } else {
        echo json_encode(array('RESPONSE' => 'FAILED'));
    }
} else {
    echo "GAGAL";
}
