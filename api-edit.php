<?php
require_once('koneksi.php');

if (isset($_POST['id'])) {
    $id                 = $_POST['id'];
    $userId            = $_POST['userId'];
    $title               = $_POST['title'];
    $body              = $_POST['title'];

    $sql = $conn->prepare("UPDATE berita SET id=?, userId=?, title=?, body=? WHERE id=?");
    $sql->bind_param('ssddd', $id, $userId, $title, $body);
    $sql->execute();
    if ($sql) {

        header("location:index.php");
    } else {
        echo json_encode(array('RESPONSE' => 'FAILED'));
    }
} else {
    echo "GAGAL";
}
