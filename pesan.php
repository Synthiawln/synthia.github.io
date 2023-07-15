<html>
<head>
    <title>WEB Perpustakaan </title>
    <link rel="stylesheet" href="syn.css" />
</head>
<body>
    <div class="container">
    <!-- NAVIGATION BAR -->
    <div class="di-navbar">
        <ul class="ul-navbar">
            <li class="li-navbar">
                <a href="#" class="a-navbar">BERANDA</a>
            </li>
            <li class="li-navbar">
                <a href="katalog.html" class="a-navbar">KATALOG</a>
            </li>
            <li class="li-navbar">
               <a href="pesan.php" class="a-navbar">PEMESANAN</a> 
            </li>
            <li class="li-navbar">
               <a href="contact.html" class="a-navbar">KONTAK</a> 
            </li>
        </ul>
    </div>
    <!-- NAVIGATION BAR SELESAI -->

    <!-- CONTENT 1 -->
    <div class="container-content">
    <table align="center" width="50%" cellpadding="10">
        <form action="proses.php" method="post">
            <tr>
                <td align="center" colspan="2">
                    <h2> PEMESANAN BUCKET</h2>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="vnama" size="10" maxlength="10"></td>
            </tr>

            <tr>
                <td>Jumlah Order</td>
                <td><input type="number" name="vjml" min="1" max="10"></td>
            </tr>

            <tr>
                <td>Pilihan Bucket</td>
                <td valign="top"> <select name="vpilih">
                    <option value="bunga">Bucket Bunga</option>
                    <option value="uang">Bucket Uang</option>
                    <option value="boneka">Bucket Boneka</option>
                    <option value="snack">Bucket Snack</option>
                </select></td>
            </tr>
            <tr>
                <td>Code Katalog</td>
                <td><input type="number" name="vcode" min="1" max="6"></td>
            </tr>
            <tr>
                <td>Tanggal Pesan</td>
                <td><input type="date" name="vtanggal"></td>
            </tr>
            <tr>
                <td>Pembayaran Via</td>
                <td>
                    <input type="radio" name="via" value="transfer bank">Transfer Bank
                    <input type="radio" name="via" value="cod">COD
                    <input type="radio" name="via" value="shopee/dana">Shopee/DANA
                </td>
            </tr>
            <tr>
                <td>HARGA</td>
                <td valign="top"> <select name="vharga">
                   <option value="50000">50000</option>
                    <option value="60000">60000</option>
                    <option value="100000">100000</option>
                    <option value="200000">200000</option>
                </select></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input name="valamat" type="text" id="alamat"></td>
            </tr>

            <tr>
                <td>&nbsp;</td><td><input type="submit" name="simpan"></td>
            </tr>
        </form>
    </table>
    </div>
    <!-- CONTENT END -->

    <!-- FOOTER -->
    <div class="container-footer">
        <p align="center">&copy; 2023 oleh synthia </p>
    </div>
    <!-- FOOTER END -->
    </div>
</body>
</html>  