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
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <table border="1" id="table">
            <tr>
                <th>Nama</th>
                <th>Date</th>
                <th>Time</th>
                <th>Person</th>
            </tr>
            <?php while($data = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $data['nama'] ?></td>
                    <td><?php echo $data['date']?></td>
                    <td><?php echo $data['time']?></td>
                    <td><?php echo $data['people']?></td>
                    <td>
                        <a href="">Edit</a>
                        <a href="">Hapus</a>
                    </td>
                    <?php endwhile; ?>
                </tr>
        </table>
        
    </main>
</body>
</html>