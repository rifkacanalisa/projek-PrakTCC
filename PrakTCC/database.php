<?php
class database
{
    var $host = "localhost";
    var $user = "root";
    var $pass = "";
    var $database1 = "pelanggan_rumah_makan";
    var $database2 = "rumah_makan";

    //BAGIAN PELANGGAN  DB1
    function tambah_pelanggan($nama, $jk, $hp){
        $link = new mysqli($this->host,$this->user,$this->pass,$this->database1);
        $query = mysqli_query($link, "INSERT into pelanggan (`nama`, `jenis_kelamin`, `nomor_hp`) VALUES ('$nama','$jk','$hp')") or die (mysqli_error($link));
        if($query){
            $pesan="berhasil";
        }
        else{
            $pesan="gagal";
        }
        return $pesan;
    }

    function tabel_pelanggan(){
        $link = new mysqli($this->host,$this->user,$this->pass,$this->database1);
        $query = mysqli_query($link, "SELECT * from pelanggan");
        $hasil = null;
        while($dt = mysqli_fetch_array($query)){
            $hasil[] = $dt;
        }
        return $hasil;
    }

    function cari_pelanggan($id){
        $link = new mysqli($this->host,$this->user,$this->pass,$this->database1);
        $query = mysqli_query($link, "SELECT * from pelanggan where id = $id");
        $hasil = mysqli_fetch_array($query);
        return $hasil;
    }

    function edit_pelanggan($id, $nama, $jk, $hp){
        $link = new mysqli($this->host,$this->user,$this->pass,$this->database1);
        $query = mysqli_query($link, "UPDATE pelanggan SET `nama` = '$nama', `jenis_kelamin` = '$jk', `nomor_hp` = '$hp' WHERE id = '$id'") or die (mysqli_error($link));
        if($query){
            $pesan="berhasil";
        }
        else{
            $pesan="gagal";
        }
        return $pesan;
    }

    function delete_pelanggan($id){
        $link = new mysqli($this->host,$this->user,$this->pass,$this->database1);
        $query = mysqli_query($link, "DELETE from pelanggan where id='$id'");
        if($query){
            $pesan="berhasil";
        }
        else{
            $pesan="gagal";
        }
        return $pesan;
    }

    // BAGIAN RM  MENU  DB2
    function tambah_menu($jenis, $nama, $harga){
        $link = new mysqli($this->host,$this->user,$this->pass,$this->database2);
        $query = mysqli_query($link, "INSERT INTO `menu` (`jenis`, `nama`, `harga`) VALUES ('$jenis','$nama','$harga')") or die (mysqli_error($link));
        if($query){
            $pesan="berhasil";
        }
        else{
            $pesan="gagal";
        }
        return $pesan;
    }

    function tabel_menu(){
        $link = new mysqli($this->host,$this->user,$this->pass,$this->database2);
        $query = mysqli_query($link, "SELECT * from menu");
        $hasil = null;
        while($dt = mysqli_fetch_array($query)){
            $hasil[] = $dt;
        }
        return $hasil;
    }

    function cari_menu($id){
        $link = new mysqli($this->host,$this->user,$this->pass,$this->database2);
        $query = mysqli_query($link, "SELECT * from menu where id = $id");
        $hasil = mysqli_fetch_array($query);
        return $hasil;
    }

    function edit_menu($id, $jenis, $nama, $harga){
        $link = new mysqli($this->host,$this->user,$this->pass,$this->database2);
        $query = mysqli_query($link, "UPDATE `menu` SET `jenis` = '$jenis', `nama` = '$nama', `harga` = '$harga' WHERE id = '$id'") or die (mysqli_error($link));
        if($query){
            $pesan="berhasil";
        }
        else{
            $pesan="gagal";
        }
        return $pesan;
    }

    function delete_menu($id){
        $link = new mysqli($this->host,$this->user,$this->pass,$this->database2);
        $query = mysqli_query($link, "DELETE from menu where id='$id'");
        if($query){
            $pesan="berhasil";
        }
        else{
            $pesan="gagal";
        }
        return $pesan;
    }
}

?>