<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styleCV.css">
    <title>CV</title>
</head>
<body>
    <?php $nama = "Putri Dwi Agnesya";
    $namaBelakang = "Agnesya";
    $kotaLahir = "Jombang";
    $PT = "UPN Veteran Jawa Timur";
    $fakultass = "Ilmu Komputer";
    $jurusan = "Informatika";
    $npm = "21081010142";
    $email ="21081010142@student.upnjatim.ac.id";
    $SMA = "SMA Negeri 2 Jombang";
    $SMP ="SMP Negeri 2 Jombang";
    $SD="SD Negeri Sentul 2";

    $tglLahir = new Datetime ("2003-08-02");
    $today = new Datetime("today");
    $tahun = $today->diff($tglLahir)->y;
    $bulan = $today->diff($tglLahir)->m;
    $hari = $today->diff($tglLahir)->d;
    $umur = "$tahun tahun $bulan bulan $hari hari"

    ?>

    <header id="awal">
            <ul class="judul"> <h3><?php echo $namaBelakang?>'s CV</h3></ul>
            <div class="ul">
                <ul> <a href="#awal">home</a> </ul>
                <ul> <a href="#linkContact">contact</a></ul>
            </div>
            
    </header>
    
    <div class="kotak">
        <table align="center">
            <tr >
                <td align="center" > <h1><?php echo $nama ?> </h1></td>
                <td rowspan="2" class="foto"><img src="fotoDiri.jpg" ;></td>
            </tr>
            <tr>
                <td align="center"> <?php echo "Nama panggilan saya yaitu Nesya. Saya lahir di Kota   $kotaLahir. <br>
                Saat ini berdomisili di Surabaya. Saya sedang menempuh pendidikan <br>
                di $PT jurusan  $jurusan semester 4.<br>
               Saya memiliki minat pada web development." ?> </td>
            </tr>
        </table>
    </div>
    <div class="tabelProfil" align="center">
        <h4 >My Profil</h4>
        <div >
            <table class="rincianprofil">
                <tr>
                    <td>Nama </td>
                    <td>:</td>
                    <td><?php echo $nama ?></td>
                </tr>
                <tr>
                    <td>Kota Lahir </td>
                    <td>:</td>
                    <td><?php echo $kotaLahir ?></td>
                </tr>
                <tr>
                    <td>Umur </td>
                    <td>:</td>
                    <td> <?php echo $umur?> </td>
                </tr>
                <tr>
                    <td>NPM </td>
                    <td>:</td>
                    <td><?php echo $npm ?></td>
                </tr>
                <tr>
                    <td>Fakultas</td>
                    <td>:</td>
                    <td> <?php echo $fakultass ?> </td>
                </tr>
                <tr>
                    <td>Jurusan </td>
                    <td>:</td>
                    <td> <?php echo $jurusan ?></td>
                </tr>
                <tr>
                    <td>E-mail</td>
                    <td>:</td>
                    <td> <?php echo $email ?> </td>
                </tr>
            </table>
        </div>
    </div> 
        
    <div class="gabungan">
        <div class="tataedu" >
            <table cellpadding="10" width="500">
                <tr>
                    <td rowspan="4" id="edu" > <h4>EDUCATION</h4></td>
                    <td class="edu"> <?php echo  "<b> $PT </b> <br> (2021 - sekarang) "?> </td>
                </tr>
                <tr>
                    <td class="edu"> <?php echo " <b> $SMA </b>  <br> (2018 - 2021) "?></td>
                </tr>
                <tr>
                    <td class="edu"> <?php echo " <b> $SMP </b>  <br> (2018 - 2021) "?></td>
                </tr>
                <tr>
                    <td class="edu"> <?php echo " <b> $SD </b>  <br> (2018 - 2021) "?></td>
                </tr>
            </table>
        </div>
        <div class="tatasertif">
            <table cellpadding="10" width="500">
                <tr>
                    <td rowspan="2" id="sertif" > <h4>SERTIFICATE</h4></td>
                    <td class="sertif"> <b>PHYTON</b>  <br> telah diverifikasi oleh PROGATE</td>
                </tr>
                <tr>
                    <td class="sertif"> <b>IT Support</b> <br> telah diverifikasi oleh COURSERA & GOOGLE</td>
                </tr>
            </table>
        </div>
    </div>

    <footer align="center" id="linkContact">
        <b>Contact Me</b> <br>
            instagram : <a href="https://www.instagram.com/agnesya259/">agnesya259</a> <br>
            email     : <a href="https://mail.google.com/mail/u/0/?tf=cm&fs=1&to=21081010142@student.upnjatim.ac.id">21081010142@student.upnjatim.ac.id</a>
    </footer>

</body>
</html>