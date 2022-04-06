<html>
    <head>
        <title>RZ Resto-Upload Foto</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik+Puddles&display=swap" rel="stylesheet">
        <Link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        <div class="header">
            <h2>RZ Resto</h2>
            <div class="menu">
                <a href="halamanHome.html"><b>Home</b></a>
                <a href="halamanTransaksi.html"><b>Transaksi</b></a>
                <a href="halamanUploadFoto.html"><b>Tambah Foto</b></a>
            </div>
        </div>
        <div class="formUpload">
            <?php
    
            $target_path = "foto/";
    
            $target_path = $target_path.basename(
            $_FILES['uploadedfile']['name']);

            if(move_uploaded_file($_FILES['uploadedfile'] ['tmp_name'], $target_path)) {
                echo "File ". basename($_FILES['uploadedfile'] ['name'])." berhasil di upload, yeaayy!!!";
            } else {
                echo "Mohon maaf, file yang anda upload tidak terkirim. Coba Lagi!!!";
            }
        ?>
        </div>

        <div class="footer">
            <h4 style="text-align: center;">Copyright &copy; 2022 Oleh Rizqi Zamzami Jamil</h4>
            <h4>Jl. Merdeka No 26. Meikarta City</h4>
            <h4>082147083442</h4>
        <br>
        </div>
    </body>
</html>