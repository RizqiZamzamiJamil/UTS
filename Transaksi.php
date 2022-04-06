<html>
    <head>
        <title>RZ Resto-Transaksi</title>
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

        <div class="formTransaksi">
            <?php
            $pembeli = $_POST['pembeli'];
            $status = $_POST['status'];
            $menu = $_POST['menu'];
            $jumlah = $_POST['jumlah'];
    
            if($status == "Member"){
                if($menu == "Paket 1 (20.000)"){
                    $harga = 20000;
                    if($jumlah == 1){
                        $total = $harga * $jumlah;
                        $diskon = ($harga * 0.05)*$jumlah;
                        $bayar = $total - $diskon;
                    }else if($jumlah == 2 || $jumlah == 3){
                        $total = $harga * $jumlah;
                        $diskon = ($harga * 0.07)*$jumlah;
                        $bayar = $total - $diskon;
                    }else if($jumlah > 3){
                        $total = $harga * $jumlah;
                        $diskon = ($harga * 0.10)*$jumlah;
                        $bayar = $total - $diskon;
                    }
                }else if($menu == "Paket 2 (30.000)"){
                    $harga = 30000;
                    if($jumlah == 1){
                        $total = $harga * $jumlah;
                        $diskon = ($harga * 0.05)*$jumlah;
                        $bayar = $total - $diskon;
                    }else if($jumlah == 2 || $jumlah == 3){
                        $total = $harga * $jumlah;
                        $diskon = ($harga * 0.07)*$jumlah;
                        $bayar = $total - $diskon;
                    }else if($jumlah > 3){
                        $total = $harga * $jumlah;
                        $diskon = ($harga * 0.10)*$jumlah;
                        $bayar = $total - $diskon;
                    }
                }else if($menu == "Paket 3 (50.000)"){
                    $harga = 50000;
                    if($jumlah == 1){
                        $total = $harga * $jumlah;
                        $diskon = ($harga * 0.05)*$jumlah;
                        $bayar = $total - $diskon;
                    }else if($jumlah == 2 || $jumlah == 3){
                        $total = $harga * $jumlah;
                        $diskon = ($harga * 0.07)*$jumlah;
                        $bayar = $total - $diskon;
                    }else if($jumlah > 3){
                        $total = $harga * $jumlah;
                        $diskon = ($harga * 0.10)*$jumlah;
                        $bayar = $total - $diskon;
                    }
                }
            }else if($status == "Non-Member"){
                if($menu == "Paket 1 (20.000)"){
                    $harga = 20000;
                    if($jumlah >=1 && $jumlah <=5){
                        $total = $harga * $jumlah;
                        $diskon = 0;
                        $bayar = $total - $diskon;
                    }else if($jumlah >=6 || $jumlah <=10){
                        $total = $harga * $jumlah;
                        $diskon = $total * 0.05;
                        $bayar = $total - $diskon;
                    }else if($jumlah > 10){
                        $total = $harga * $jumlah;
                        $diskon = $total * 0.07;
                        $bayar = $total - $diskon;
                    }
                }else if($menu == "Paket 2 (30.000)"){
                    $harga = 30000;
                    if($jumlah >=1 && $jumlah <=5){
                        $total = $harga * $jumlah;
                        $diskon = 0;
                        $bayar = $total - $diskon;
                    }else if($jumlah >=6 || $jumlah <=10){
                        $total = $harga * $jumlah;
                        $diskon = $total * 0.05;
                        $bayar = $total - $diskon;
                    }else if($jumlah > 10){
                        $total = $harga * $jumlah;
                        $diskon = $total * 0.07;
                        $bayar = $total - $diskon;
                    }
                }else if($menu == "Paket 3 (50.000)"){
                    $harga = 50000;
                    if($jumlah >=1 && $jumlah <=5){
                    $total = $harga * $jumlah;
                        $diskon = 0;
                        $bayar = $total - $diskon;
                    }else if($jumlah >=6 || $jumlah <=10){
                        $total = $harga * $jumlah;
                        $diskon = $total * 0.05;
                        $bayar = $total - $diskon;
                    }else if($jumlah > 10){
                        $total = $harga * $jumlah;
                        $diskon = $total * 0.07;
                        $bayar = $total - $diskon;
                    }
                }
            }
        ?>
        <div class="Hasil">
            
            <table>
                <tr>
                    <td>Nama Pembeli </td><td>: <?php echo $pembeli ?></td>
                </tr>
                <tr>
                    <td>Status Pembeli </td><td>: <?php echo $status ?></td>
                </tr>
                <tr>
                    <td>Total Harga </td><td>: <?php echo $total ?></td>
                </tr>
                <tr>
                    <td>Total Diskon </td><td>: <?php echo $diskon ?></td>
                </tr>
            </table>
            <h3 style="color : red;"> Total Yang Harus Dibayarkan Adalah : <?php echo $bayar?>
        </div>

        <div class="footer">
            <h4 style="text-align: center;">Copyright &copy; 2022 Oleh Rizqi Zamzami Jamil</h4>
            <h4>Jl. Merdeka No 26. Meikarta City</h4>
            <h4>082147083442</h4>
        <br>
        </div>
    </body>
<html>