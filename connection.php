<?php
    class database{
        var $host ="localhost";
        var $name = "root";
        var $pass ="";
        var $db = "oop";
        var $koneksi = "";
        function __construct(){
            $this->koneksi = mysqli_connect($this->host,$this->name,$this->pass,$this->db);
            if(mysqli_connect_error()){
                echo"NO CONNECTION DATABASE ! :".mysqli_connect_error();
            }
        }

        // SELECT DATA
        function tampil_data(){
            $tabel = mysqli_query($this->koneksi,"SELECT * FROM siswa");
            while($data = mysqli_fetch_array($tabel)){
                $hasil[] = $data;
            }
            return $hasil;
        }

        //CREATE DATA
        function create_data($nim,$nama,$email,$phone,$jk,$alamat,$status,$kelas){
            $create = mysqli_query($this->koneksi, "INSERT INTO siswa VALUES('','$nim','$nama','$email','$phone','$jk','$alamat','$status','$kelas')");
        }

        //UPDATE DATA 
        function update($id_siswa){
            $query = mysqli_query($this->koneksi, "SELECT * FROM siswa WHERE id_siswa='$id_siswa'");
            return $query->fetch_array();
        }
    }
?>