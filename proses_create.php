<?php
    include 'connection.php';
    $db = new database();
    $action = $_GET['action'];
    if($action == "add"){
        $db->create_data($_POST['nim'],$_POST['nama'],$_POST['email'],$_POST['phone'],$_POST['jk'],$_POST['alamat'],$_POST['status'],$_POST['kelas']);
        header('Location:index.php');
    }if($action == "update"){
        $db->update_data($_POST['nim'],$_POST['nama'],$_POST['email'],$_POST['phone'],$_POST['jk'],$_POST['alamat'],$_POST['status'],$_POST['kelas'],$_POST['id_siswa']);
        header('Location:index.php');
    }if($action == "delete"){
        $id_siswa = $_GET['id'];
        $db->delete($id_siswa);
        header('Location:index.php');
    }
?>