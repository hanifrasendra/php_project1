<?php include 'config.php'; // Ambil data reservasi berdasarkan ID 
if(isset($_GET['id'])) { 
    $id = $_GET['id']; 
    $query = "SELECT * FROM reservations WHERE id = '$id'"; 
    $result = mysqli_query($conn, $query); 
    $data = mysqli_fetch_assoc($result); 
    } else { 
        die("ID tidak ditemukan."); 
        } // Proses update data 

if(isset($_POST['update'])) { 
    $name = $_POST['nama']; 
    $date = $_POST['date']; 
    $time = $_POST['time']; 
    $people = $_POST['people']; 
    $update = "UPDATE reservations SET nama = '$name', tanggal_reservasi = '$date', waktu_reservasi = '$time', jumlah_orang = '$people' WHERE id = '$id'"; 
    
    if(mysqli_query($conn, $update)) { 
        echo "<script>alert('Data diperbarui!'); location='dashboard.php';</script>"; 
        } else { 
            echo "Error: " . mysqli_error($conn); 
            } 
            
    } ?>



<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="style.css"> 
        <title>Edit Reservasi</title> 
    </head> 
    <body> 
        <main> 
            <div class="container1"> 
                <form method="POST"> 
                    <div class="form-group"> 
                        <label for="nama">Nama</label><br> 
                        <input type="text" name="nama" value="<?php echo $data['nama']; ?>"><br> 
                    </div> 
                    <div class="form-group"> 
                        <label for="date">Date</label><br> 
                        <input type="date" name="date" value="<?php echo $data['tanggal_reservasi']; ?>"><br> 
                    </div> 
                    <div class="form-group"> 
                        <label for="time">Time</label><br> 
                        <input type="time" name="time" value="<?php echo $data['waktu_reservasi']; ?>"><br> 
                    </div> 
                    <div class="form-group"> 
                        <label for="people">People</label><br> 
                        <input type="number" name="people" value="<?php echo $data['jumlah_orang']; ?>"><br> 
                    </div> <div class="form-group"> 
                        <input type="submit" name="update" value="Update"> 
                    </div> 
                </form> 
            </div> 
        </main> 
    </body> 
    </html> 
    [file content end]