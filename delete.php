<?php
include 'config.php';

// Check if ID parameter exists in URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Create delete query
    $hapus = "DELETE FROM reservations WHERE id = '$id'";
    
    // Execute query
    if (mysqli_query($conn, $hapus)) {
        echo "<script>alert('Data berhasil dihapus!'); location='dashboard.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data: " . mysqli_error($conn) . "'); location='dashboard.php';</script>";
    }
} else {
    // If no ID provided, redirect to dashboard
    echo "<script>alert('ID tidak ditemukan!'); location='dashboard.php';</script>";
}
?>