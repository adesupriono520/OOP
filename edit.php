<?php
    include('connection.php');
    $db = new database();
    $id = $_GET['id'];
    if(! is_null($id))
    {
        $data = $db->update($id);
    }else{
        header('Location:index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Create</title>
</head>
<body>
    <div class="container"><br>
        <form action="proses_create.php?action=add" method="POST">
            <div class="form-group">
                <label for="nim">NIM :</label>
                <input type="number" class="form-control" id="nim" name="nim" value="<?php echo $data['nim'];?>">
            </div>
            <div class="form-group">
                <label for="nama">Nama Masasiswa :</label>
                <input type="nama" class="form-control" id="nama" name="nama" value="<?php echo $data['nama_mahasiswa'];?>">
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $data['email_mahasiswa'];?>">
            </div>
            <div class="form-group">
                <label for="phone">Phone :</label>
                <input type="number" class="form-control" id="phone" name="phone" value="<?php echo $data['no_hp_mahasiswa'];?>">
            </div>
            <div class="form-group">
                <label for="jk">Jenis Kelamin :</label><br>
                <input type="radio" name="jk" value="Laki - Laki" <?php if($data['jk'] == 'Laki - Laki') echo 'checked'?>> Laki - Laki 
                <input type="radio" name="jk" value="Perempuan"<?php if($data['jk'] == 'Perempuan') echo 'checked'?>> Perempuan
            </div>
            <div class="form-group">
                <label for="alamat">Alamat :</label>
                <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $data['alamat_mahasiswa'];?>">
            </div>
            <div class="form-group">
                <label for="status">Status :</label>
                <select name="status" id="status" class="form-control">
                    <option value="ACTIVE"<?php if($data['status']=="ACTIVE") echo'checked'?>></option>
                    <option value="NO ACTIVE"<?php if($data['status']=="NO ACTIVE") echo'checked'?>></option>
                </select>
            </div>
            <div class="form-group">
                <label for="kelas">Kelas :</label>
                <input type="text" class="form-control" id="kelas" name="kelas" value="<?php echo $data['kelas'];?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
</body>
</html>