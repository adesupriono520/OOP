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
                <input type="number" class="form-control" id="nim" name="nim" placeholder="Input Your Nim ..">
            </div>
            <div class="form-group">
                <label for="nama">Nama Masasiswa :</label>
                <input type="nama" class="form-control" id="nama" name="nama" placeholder="Input Your Name ..">
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Input Your Email ..">
            </div>
            <div class="form-group">
                <label for="phone">Phone :</label>
                <input type="number" class="form-control" id="phone" name="phone" placeholder="Input Your Phone ..">
            </div>
            <div class="form-group">
                <label for="jk">Jenis Kelamin :</label><br>
                <input type="radio" name="jk" value="Laki - Laki"> Laki - Laki 
                <input type="radio" name="jk" value="Perempuan"> Perempuan
            </div>
            <div class="form-group">
                <label for="alamat">Alamat :</label>
                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Input Your Address ..">
            </div>
            <div class="form-group">
                <label for="status">Status :</label>
                <select name="status" id="status" class="form-control">
                    <option value="Active">Active</option>
                    <option value="No Active">No Active</option>
                </select>
            </div>
            <div class="form-group">
                <label for="kelas">Kelas :</label>
                <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Input Your Class ..">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>