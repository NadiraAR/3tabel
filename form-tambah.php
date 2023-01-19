<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form tambah join</title>
</head>
<body>
    <h1>Form tambah</h1>
    <form action = "proses-tambah.php" method = "POST">
        <form>
            <fieldset>
                <p>
                    <label for = "nama"> Nama : </label>
                    <input type = "text" name = "nama"/>
                </p>
                <p>
                    <label for = "kelas"> Kelas : </label>
                   <input type = "text" name = "kelas"/>
                </p>
                <p>
                    <label for="jurusan">Nama Jurusan : </label>
                    <label><input type = "radio" name = "jurusan" value = "TL"/>TL</label>
                    <label><input type = "radio" name = "jurusan" value = "TBSM"/>TBSM</label>
                    <label><input type = "radio" name = "jurusan" value = "RPL"/>RPL</label>
                    <label><input type = "radio" name = "jurusan" value = "TBG"/>TBG</label>
                    <label><input type = "radio" name = "jurusan" value = "TB"/>TB</label>
                </p>
                <p>
                    <label for = "tahun"> Tahun : </label>
                    <input type = "text" name = "tahun"/>
                </p>
                <p>
                    <label for = "nominal"> Nominal : </label>
                    <input type = "text" name = "nominal"/>
                </p>
                <p>
                    <input type = "submit" value = "Kirim data" name = "kirim"/>
                </p>
</fieldset>
</form>
</body>
</html>