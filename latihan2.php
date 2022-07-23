<html>
<head>
    <title>Cek Lingkaran</title>
</head>
<body>
    <h1>Mengecek bilangan di antara 2 bilangan masukan</h1>
    <h2>Isi Data:</h2>
    <form action="hitung_bilangan.php" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Masukkan Bilangan</td>
                <td>:</td>
                <tr>
                <td>Bilangan A</td>
                <td><input type="text" name="bil1" required></td>
                </tr>
                <tr>
                <td>Bilangan B</td>
                <td><input type="text" name="bil2" required></td>
                </tr>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_POST['submit'])){
            $bil1   =$_POST['bil1'];
            $bil2   =$_POST['bil2'];

            // menghitung luas lingkaran
            if ($bil1 == $bil2) {
                echo "Bilangan A Sama dengan Bilangan B";
            } else if($bil1 > $bil2) {
                echo "Bilangan A lebih besar dari pada bilangan B";
            } else if($bil2 > $bil1) {
                echo "Bilangan B lebih besar dari pada bilangan A";
            }
            return;