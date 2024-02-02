<?php

$dataSiswa = [['nama' => 'M. Rizqi Fithyarabbani','kelas' => 'X-RPL 2','alamat' => 'Jl. Mangga Besar 13, RT.010/RW.003 No.4','nisn' => '0078663159','wa' => '0895-3454-23600','hobi' => 'Lari','cita' => 'Programmer'],
['nama' => 'Teuku Fayyad','kelas' => 'XI-OTKP 1','alamat' => 'Jl. Kebagusan, RT.021/RW.04 No.31','nisn' => '7428641503','wa' => '0821-3429-3170','hobi' => 'Berenang','cita' => 'TNI'],
['nama' => 'Rahmat Gatusso','kelas' => 'X-AK 2','alamat' => 'Jl. Batu Tulis, RT.012/RW.02 No.14','nisn' => '0799472946','wa' => '0812-7544-4128','hobi' => 'Sepak Bola','cita' => 'Polisi'],
['nama' => 'Arbani Aziz','kelas' => 'XII-BDP 1','alamat' => 'Jl. Lautze RT.08/RW.06 No.8','nisn' => '0776639681','wa' => '0895-3179-1427','hobi' => 'Futsal','cita' => 'Dokter'],
['nama' => 'Giselma Anaufa Salsabila','kelas' => 'XI-AK 1','alamat' => 'Jl. Pantai Indah Kapuk, RT.010/RW.04 No.31','nisn' => '9872478912','wa' => '0838-3456-9641','hobi' => 'Makeup','cita' => 'MUA'],
['nama' => 'Candra Liow','kelas' => 'XII-OTKP 2','alamat' => 'Jl. Penjaringan, RT.014/RW.02 No.5','nisn' => '825849201','wa' => '0812-9488-2614','hobi' => 'Ngegame','cita' => 'Content Creator'],
['nama' => 'Arief Muhammad','kelas' => 'X-MP 2','alamat' => 'Jl. Bintaro, RT.07/RW.01 No.41','nisn' => '9467301839','wa' => '0821-8458-9831','hobi' => 'Traveling','cita' => 'Chef'],
['nama' => 'Bobi Simatupang','kelas' => 'XII-RPL 1','alamat' => 'Jl. Karang Anyar, RT.011/RW.03 No.22','nisn' => '64928364','wa' => '0812-3454-2331','hobi' => 'Mancing','cita' => 'Polisi'],
['nama' => 'Nina Syakila','kelas' => 'X-MP 1','alamat' => 'Jl. Tanah Abang 2, RT.09/RW.04 No.5','nisn' => '2430862836','wa' => '0838-3123-3131','hobi' => 'Bersepeda','cita' => 'PNS'],
['nama' => 'Asyrof Alkalifi','kelas' => 'XI-OTKP 1 ','alamat' => 'Jl. pademangan, RT.012./RW.04 No.21','nisn' => 3027587310,'wa' => '0895-9745-2781','hobi' => 'Menggambar','cita' => 'Seniman']
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <table border="1" cellspacing="3">
        <th>Nama</th>
        <th>Kelas</th>
        <th>Alamat</th>
        <th>NISN</th>
        <th>No. WhatsApp</th>
        <th>Hobi</th>
        <th>Cita-Cita</th>
        <?php foreach ($dataSiswa as $data) : ?>
            <tr>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['kelas']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['nisn']; ?></td>
                <td><?php echo $data['wa']; ?></td>
                <td><?php echo $data['hobi']; ?></td>
                <td><?php echo $data['cita']; ?></td>
            </tr>
            <?php endforeach; ?>
    </table>
</body>
</html>