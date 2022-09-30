<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""method="post">
        <label for="nama">Masukan Nama Anda : </label>
        <input type="text" id="nama" name="nama">
        <button type="submit" name="submit">proses</button>
    </form>
    <?php
        if(isset($_POST['submit'])){
            echo "Selamat Datang, ", $_POST['nama'];
        }
    ?>
</body>
</html>