<?php
    include 'connection.php';
    $db = new database();
    $row = $db->tampil_data();
?>
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
    <title>Index</title>
</head>
<body>
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">No</th>
            <th scope="col">NIM</th>
            <th scope="col">Nama Mahasiswa</th>
            <th scope="col">Email Mahasiswa</th>
            <th scope="col">No Hp</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Alamat</th>
            <th scope="col">Kelas</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <?php foreach($row as $data){ ?>
        <tbody>
            <tr>
                <th scope="row"><?php echo $data['id_siswa'] ?></th>
                <td><?php echo $data['nim'] ?></td>
                <td><?php echo $data['nama_mahasiswa'] ?></td>
                <td><?php echo $data['email_mahasiswa'] ?></td>
                <td><?php echo $data['no_hp_mahasiswa'] ?></td>
                <td><?php echo $data['jk'] ?></td>
                <td><?php echo $data['alamat_mahasiswa'] ?></td>
                <td><?php echo $data['kelas'] ?></td>
                <td><?php echo $data['status'] ?></td>
                <td>
					<a href="edit.php?id=<?php echo $data['id_siswa']; ?>">Update</a>
					<a href="proses_create.php?action=delete&id=<?php echo $data['id_siswa']; ?>">Delete</a>
				</td>
            </tr>
        </tbody>
        <?php } ?>
    </table>
</body>
</html>