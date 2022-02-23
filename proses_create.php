<?php
    include 'connection.php';
    $db = new database();
    $action = $_GET['action'];
    if($action == "add"){
        $db->create_data($_POST['nim'],$_POST['nama'],$_POST['email'],$_POST['phone'],$_POST['jk'],$_POST['alamat'],$_POST['status'],$_POST['kelas']);
        header('Location:index.php');
    }
?>