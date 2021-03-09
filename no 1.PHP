<?php

//class buku
class buku{
    //Property
    var $judul;
    var $pengaran;
    var $penerbit;
    var $tahun_terbit;
    var $cetakan;

    //method buku
function judul_buku() {
    return "Judul Buku DUNIA BALAP<br/>";
    //isi dari method judul_buku
}

function pengarang_buku() {
    return "Pengarang Buku INAN<br/>";
    //isi dari method pengarang_buku
}
function penerbit_buku() {
    return "Penerbit Buku SINAR DUNIA<br/>";
    //isi dari method penerbit_buku
}
function tahun_terbit_buku() {
    return "Tahun Terbit Buku 2021<br/>";
    //isi dari method pengarang_buku
}
function cetakan_buku() {
    return "Cetakan Buku RCTI<br/>";
    //isi dari method cetakan_buku
}

}
//instansiasi class buku
$buku= new buku();

//memanggil method judul_buku dari class buku
echo $buku->judul_buku();
//memanggil method pengarang_buku dari class buku
echo $buku->pengarang_buku();
//memanggil method penerbit_buku dari class buku
echo $buku->penerbit_buku();
//memanggil method tahun_terbit_buku dari class buku
echo $buku->tahun_terbit_buku();
//memanggil method cetakan_buku dari class buku
echo $buku->cetakan_buku();

?>