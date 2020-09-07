<!DOCTYPE html>
<html>

<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<table>
<body style="background-image: url('cover.png');">
    <header>
      <hr><h1 style="text-align:center;">Pendaftaran Siswa Baru</h1><hr/>
 <tr>
<h3 style="text-align:center;">SMK Coding</h3>
</tr>
</header>
</table>
    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php"><font style="color:blue;">Daftar Baru</h3></a></li>
           <li> <a href="list-siswa.php"><font style="color:blue;">Pendaftar</h3></a></li>
        </ul>
<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>

    </nav>

    </body>
</html>
