<?php
include 'config.php';
$query = "SELECT * FROM reservations";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="src/output.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header class="bg-white">
        <div class="flex justify-between w-[90%] my-5 mx-auto">
            <div class=""></div>
            <nav class="nav-bar">
                <ul class="flex gap-x-20 ">
                    <li class="link-list"><a href="">Home</a></li>
                    <li class="link-list"><a href="">Service</a></li>
                    <li class="link-list"><a href="">About Us</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>

        <table border="1" id="table">
            <tr>
                <th>Nama</th>
                <th>Date</th>
                <th>Time</th>
                <th>Person</th>
                <th>action</th>
            </tr>
            <?php while($data = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $data['nama'] ?></td>
                    <td><?php echo $data['tanggal_reservasi']?></td>
                    <td><?php echo $data['waktu_reservasi']?></td>
                    <td><?php echo $data['jumlah_orang']?></td>
                    <td>
                        <a href="update.php?id=<?php echo $data['id']?>">Edit</a>
                        <a href="delete.php?id=<?php echo $data['id']?>">Hapus</a>
                    </td>
                    <?php endwhile; ?>
                </tr>
        </table>
        
    </main>
</body>
</html>