<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <script>
        window.print();
    </script>
	<table class="basic"  border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
	<td rowspan="6"><img src="../images/logo-teknik-ok.png" width="90" height="90"></td>
    <td width="550" align="center">&nbsp;</td>
	
	<td width="65" rowspan="6"><img src="../images/logo2.png" width="90" height="90"></td>
  </tr>
  <tr>
    <td align="center"><strong><p style='margin-bottom:-9px'>UNIVERSITAS ISLAM NUSANTARA </p></strong></td>
  </tr>
  <tr>
  <td align="center"><p>Jl. Soekarno-Hatta No.530, Sekejati, Kec. Buahbatu, Kota Bandung, Jawa Barat<br> Telp. 085891382300, Kode Pos. 40286</p></td>
  </tr>   
</table>
<hr>
    <center>Cetak Data Dosen</center><br>

    <table width="100%" border="1" cellpadding="4" cellspacing="0">
        <tr>
            <td>No</td>
            <td>Kd_Dosen</td>
            <td>Nama Dosen</td>
            <td>Jenis Kelamin</td>
            <td>Username</td>
            <td>Password</td>
            <td>Aktif</td>
        </tr>

        <?php
        include "../koneksi.php";
        $sql = mysqli_query($conn,"SELECT * FROM tbl_dosen ");
        $no = 1;
        while ($row = mysqli_fetch_array($sql)) {
        ?>
            <tr>
                <td align='center'> <?php echo $no; ?> </td>
                <td align='center'> <?php echo $row['kd_dosen']; ?> </td>
                <td> <?php echo $row['nama_dosen']; ?> </td>
                <td> <?php echo $row['jenis_kelamin']; ?> </td>
                <td> <?php echo $row['username']; ?> </td>
                <td> <?php echo $row['password']; ?> </td>
                <td align='center'> <?php echo $row['aktif']; ?> </td>
            </tr>
        <?php
            $no++;
        }
        ?>
    </table>

</body>

</html>