<?php 
// Mendefinisikan nilai-nilai
$page = 3;  // halaman yang sedang dilihat
$perPage = 10;    // jumlah data yang ditamp
$total = 100;    // Total Jumlah Data di Database

// Membuat tautan navigasi pagination
$pager = \Config\Services::pager(null, null, false); // Membuat instance pager
$paginationLinks = $pager->makeLinks($page, $perPage, $total, 'bootstrap');
?>

<!DOCTYPE html>