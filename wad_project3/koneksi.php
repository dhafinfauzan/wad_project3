<?php
//koneksi database
$conn = mysqli_connect("127.0.0.1","root","","wad_project3");
$result = mysqli_query($conn,"SELECT * FROM students");

//ambil data dari object $result
//mysqli_fetch_row()
//mysqli_fetch_assoc()
//mysqli_fetch_array()
//mysqli_fetch_object()

?>
