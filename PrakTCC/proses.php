<?php
include "database.php";
$db = new database();

$pesan = "inisial";

if(isset($_POST['aksi'])){
  $aksi = $_POST['aksi'];
  if($aksi == "tambah-menu"){
    $jenis = $_POST['kriteria'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $pesan = $db->tambah_menu($jenis, $nama, $harga);
    header("location:home.php?pesan=$pesan&aksi=menambahkan&sumber=menu");
  }

  else if($aksi == "update-menu"){
    $id = $_POST['id'];
    $jenis = $_POST['kriteria'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $pesan = $db->edit_menu($id, $jenis, $nama, $harga);
    header("location:home.php?pesan=$pesan&aksi=merubah&sumber=menu");
  }

  else if ($aksi == "tambah-pelanggan") {
    $jk = $_POST['jk'];
    $nama = $_POST['nama'];
    $hp = $_POST['hp'];
    $pesan = $db->tambah_pelanggan($nama, $jk, $hp);
    header("location:home.php?pesan=$pesan&aksi=menambahkan&sumber=pelanggan");
  }

  else if ($aksi == "update-pelanggan") {
    $id = $_POST['id'];
    $jk = $_POST['jk'];
    $nama = $_POST['nama'];
    $hp = $_POST['hp'];
    $pesan = $db->edit_pelanggan($id, $nama, $jk, $hp);
    header("location:home.php?pesan=$pesan&aksi=merubah&sumber=pelanggan");
  }

}

else if(isset($_GET['aksi'])){
  $aksi1 = $_GET['aksi'];
  if($aksi1 == "delete_menu"){
    $id = $_GET['id'];
    $pesan = $db->delete_menu($id);
    header("location:home.php?pesan=$pesan&aksi=menghapus&sumber=menu");
  }
  else if($aksi1 == "delete_pelanggan"){
    $id = $_GET['id'];
    $pesan = $db->delete_pelanggan($id);
    header("location:home.php?pesan=$pesan&aksi=menghapus&sumber=pelanggan");
  }
}
