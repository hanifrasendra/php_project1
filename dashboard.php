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
    <header class="bg-white sticky top-0 z-0 mx-0 items-center">
        <div class="flex justify-between w-[90%] mx-auto h-15">
            <div class=""></div>
            <nav class="flex items-center">
                <ul class="flex gap-x-20">
                    <li class="link-list"><a href="">Home</a></li>
                    <li class="link-list"><a href="">Service</a></li>
                    <li class="link-list"><a href="">About Us</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="w-screen">
            <img src="https://images.pexels.com/photos/3155726/pexels-photo-3155726.jpeg?cs=srgb&dl=pexels-asadphoto-3155726.jpg&fm=jpg" alt=""
            class="w-screen z-0">
            <p>for more information</p>
            <button class="z-1 absolute top-200 left-[20%]">Make reservation
            </button>
    </section>
    <section>
        <div>

        </div>
    </section>
    <main class="">
        <div class="w-300 h-screen mx-auto shadow-xl mt-5">
        <table border="1" class="w-150">
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
        </div>
    </main>
</body>
</html>