<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Biodata (PHP)</title>
</head>
<body>
    <p style=text-align:center>BIODATA</p>
    <form action="tugaskelompok.php" method="post">
             Nama :<br><input type="text" name="Nama"><br>
             Alamat :<br><input type="text" name="Alamat"><br>
             Tanggal lahir :<br><input type="date" name="Tanggal"><br>
             Umur :<br><input type="text" name="Umur"><br>
             Sekolah :<br><input type="text" name="Sekolah"><br>
             Rombel :<br><input type="text" name="Rombel"><br>
             <hr>
             <P>NILAI</P>
             Produktif :<br><input type="text" name="Prod"><br>
             Matematika :<br><input type="text" name="MTK"><br>
             Bahasa Indonesia :<br><input type="text" name="BINDO"><br>
             Bahasa inggris :<br><input type="text" name="BInggris"><br>
             Bahasa Sunda :<br><input type="text" name="BSun"><br>
             IPA :<br><input type="text" name="Ipa"><br>
             IPS :<br><input type="text" name="Ips"><br>
             <hr>
             <p style=text-align:center>Nama kelompok</p>
             Nama1 :<br><input type="text" name="Nama1"><br>
             Nama2 :<br><input type="text" name="Nama2"><br>
             Nama3 :<br><input type="text" name="Nama3"><br>
             Nama4 :<br><input type="text" name="Nama4"><br>
             Nama5 :<br><input type="text" name="Nama5"><br>
            

            <!-- https://s.id/tgsPPLG1_4 -->
            <br><input type="submit" name="submit"><br>
           
    </form>
<hr>
    <?php 
     if (isset($_POST['submit'])) {
        echo $_POST ['Nama'].'<br>' ;
        echo $_POST ['Alamat'].'<br>' ;
        echo $_POST ['Tanggal'].'<br>';
        echo $_POST ['Umur']. '<br>';
        echo $_POST ['Sekolah']. '<br>';
        echo $_POST ['Rombel']. '<br>';


        $prod = $_POST ['Prod'];
        $MTK = $_POST ['MTK'];
        $Bindo = $_POST ['BINDO'];
        $BIng = $_POST ['BInggris'];
        $BSun = $_POST ['BSun'];
        $Ipa = $_POST ['Ipa'];
        $Ips = $_POST ['Ips'];

        function ratarata($prod,$MTK,$Bindo,$BIng,$BSun,$Ipa,$Ips){
            $rata_rata = ($prod + $MTK + $Bindo + $BIng + $BSun + $Ipa + $Ips) / 7;
            return $rata_rata;
        }

        $nilai = [$prod,$MTK,$Bindo,$BIng,$BSun,$Ipa,$Ips];
        $max   = max($nilai);
        $min   = min($nilai);

        echo "NILAI PRODUKTIF =" . "$prod".'<br>';
        echo "NILAI MATEMATIKA =" . "$MTK". '<br>';
        echo "NILAI BAHASA INDONESIA =" . "$Bindo". '<br>';
        echo "NILAI BAHASA INGGRIS =" . "$BIng". '<br>';
        echo "NILAI BAHASA SUNDA=" . "$BSun". '<br>';
        echo "NILAI BAHASA IPA =" . "$Ipa". '<br>';
        echo "NILAI BAHASA IPS =" . "$Ips". '<br>';      
        
        echo "HASIL NILAI".'<br>'.'<br>';
        echo "NILAI TERTINGGI =". "$max". '<br>';
        echo "NILAI TERENDAH =". "$min". '<br>';
        echo "NILAI RATA RATA =". ratarata($prod,$MTK,$Bindo,$BIng,$BSun,$Ipa,$Ips). '<br>';
        echo "<br>";
        echo "<p>nama anggota</p>";
        echo $_POST ['Nama1']. '<br>';
        echo $_POST ['Nama2']. '<br>';
        echo $_POST ['Nama3']. '<br>';
        echo $_POST ['Nama4']. '<br>';
        echo $_POST ['Nama5']. '<br>';

        }
?>
<hr>
</body>
</html>
