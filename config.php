<?php
class database{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "job_sheet7";
    var $koneksi = "";
    function __construct(){
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (mysqli_connect_errno()){
            echo "Koneksi database gagal : " . mysqli_connect_error();
        }
    }

    function tampil_data_mhs_berdasar_prodi($kode_prodi){
        $data_prodi = mysqli_query($this->koneksi, "SELECT * from data_prodi WHERE kode_prodi = '$kode_prodi'");
        $row_prodi = mysqli_fetch_array($data_prodi);
        $nama_prodi = $row_prodi['nama_prodi'];
        $data = mysqli_query($this->koneksi, "SELECT a.*, b.* from data_mahasiswa a
                                                INNER JOIN data_prodi b ON b.kode_prodi = a.kode_prodi
                                                WHERE a.kode_prodi = '$kode_prodi'");
        if (mysqli_num_rows($data)==0){
            echo "<b>Tidak ada mahasiswa pada program studi $nama_prodi</b>";
            $hasil=[];
        }
        else{
            echo "<b>Data mahasiswa pada program studi $nama_prodi</b>";
            while($row = mysqli_fetch_array($data)){
                $hasil[] = $row;
            }
        }
        return $hasil;
    }
//MAHASISWA

    function tampil_data_prodi(){
        $data_prodi = mysqli_query($this->koneksi,"SELECT * from data_prodi");
        while($row_prodi = mysqli_fetch_array($data_prodi)){
            $hasil_prodi[] = $row_prodi;
        }
        return $hasil_prodi;
    }
    function tampil_data(){
        $data = mysqli_query($this->koneksi, "SELECT a.*, b.* from data_mahasiswa a INNER JOIN data_prodi b ON b.kode_prodi = a.kode_prodi");
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
        return $hasil;
    }
    function tambah_data($nim, $nama, $tempat_lahir, $tanggal_lahir, $alamat, $kode_prodi){
        mysqli_query($this->koneksi, "INSERT into data_mahasiswa values ('','$nim','$nama','$tempat_lahir','$tanggal_lahir','$alamat','$kode_prodi')");
    }
    function nim_mahasiswa($nim){
        $data_nim = mysqli_query($this->koneksi, "SELECT a.*, b.* from data_mahasiswa a
                                                    INNER JOIN data_prodi b ON b.kode_prodi = a.kode_prodi
                                                    where a.nim='$nim'");
        while($row_nim = mysqli_fetch_assoc($data_nim)){
            $hasil_nim[] = $row_nim;
        }
        return $hasil_nim;
    }
    function edit_data_mahasiswa($nim,$nama,$tempat_lahir,$tanggal_lahir,$alamat,$kode_prodi){
        mysqli_query($this->koneksi,"UPDATE data_mahasiswa set nama = '$nama', tempat_lahir = '$tempat_lahir',
                                    tanggal_lahir = '$tanggal_lahir', alamat = '$alamat', kode_prodi = '$kode_prodi' where nim = '$nim'");
    }
    function hapus_data_mahasiswa($nim){
        mysqli_query($this->koneksi,"DELETE from data_mahasiswa where nim = '$nim'");
    }
    function tampil_data_kelas(){
        $data_kelas = mysqli_query($this->koneksi,"SELECT * from kelas");
        while($row_kelas = mysqli_fetch_array($data_kelas)){
            $hasil_kelas[] = $row_kelas;
        }
        return $hasil_kelas;
    }
//END OF MAHASISWA

//MATA KULIAH
    function tambah_data_mata_kuliah($kode_mata_kuliah, $nama_mata_kuliah, $tingkat, $smt){
        mysqli_query($this->koneksi, "INSERT into data_mata_kuliah values ('','$kode_mata_kuliah','$nama_mata_kuliah','$tingkat','$smt')");
    }
    function tampil_data_mata_kuliah(){
        $data_mata_kuliah = mysqli_query($this->koneksi,"SELECT * from data_mata_kuliah");
        while($row_matkul = mysqli_fetch_array($data_mata_kuliah)){
            $hasil_matkul[] = $row_matkul;
        }
        return $hasil_matkul;
    }
    function edit_data_mata_kuliah($kode_mata_kuliah,$nama_mata_kuliah,$tingkat,$smt){
        mysqli_query($this->koneksi,"UPDATE data_mata_kuliah set nama_mata_kuliah = '$nama_mata_kuliah',
                    tingkat = '$tingkat', smt = '$smt' where kode_mata_kuliah = '$kode_mata_kuliah'");
    }
    function kode_matkul($kode_mata_kuliah){
        $data_mk = mysqli_query($this->koneksi, "SELECT * from data_mata_kuliah WHERE kode_mata_kuliah='$kode_mata_kuliah'");
        while($row_kmk = mysqli_fetch_assoc($data_mk)){
            $hasil_kmk[] = $row_kmk;
        }
        return $hasil_kmk;
    }
    function hapus_data_matkul($kode_mata_kuliah){
        mysqli_query($this->koneksi,"DELETE from data_mata_kuliah where kode_mata_kuliah = '$kode_mata_kuliah'");
    }

//END OF MATA KULIAH
    
    function tambah_data_dosen($nip, $nama_dosen, $alamat){
        mysqli_query($this->koneksi, "INSERT into data_dosen values ('','$nama_dosen','$nip','$alamat')");
    }
    function tampil_data_dosen(){
        $data_dosen = mysqli_query($this->koneksi,"SELECT * from data_dosen");
        while($row_dosen = mysqli_fetch_array($data_dosen)){
            $hasil_dosen[] = $row_dosen;
        }
        return $hasil_dosen;
    }
    function edit_data_dosen($nip, $nama_dosen, $alamat){
        mysqli_query($this->koneksi,"UPDATE data_dosen set nama_dosen = '$nama_dosen',
                     alamat = '$alamat' where nip = '$nip'");
    }
    function nip_dosen($nip){
        $data_nip = mysqli_query($this->koneksi, "select a.*, b.* from data_dosen a
                                                    INNER JOIN data_dosen b ON b.nip = a.nip
                                                    where a.nip='$nip'");
        while($row_nip = mysqli_fetch_assoc($data_nip)){
            $hasil_nip[] = $row_nip;
        }
        return $hasil_nip;
    }
    function hapus_data_dosen($nip){
        mysqli_query($this->koneksi,"DELETE from data_dosen where nip = '$nip'");
    }
    
    //KRS
    function nim_data_krs($nim){
        $data_krs = mysqli_query($this->koneksi, "SELECT a.*, b.*, c.*, d.*, e.* from krs a
                        INNER JOIN kelas b ON b.id = a.id_kelas
                        INNER JOIN data_mata_kuliah c ON c.kode_mata_kuliah = b.id_mata_kuliah
                        INNER JOIN data_dosen d ON d.id = b.id_dosen
                        INNER JOIN data_mahasiswa e ON e.id = a.id_mahasiswa");
        while($row_krs = mysqli_fetch_array($data_krs)){
            $hasil_krs[] = $row_krs;
        } 
        return $hasil_krs;
}
/*function tampil_data_krs(){
    $data_krs = mysqli_query($this->koneksi,"SELECT * from krs");
    while($row = mysqli_fetch_array($data_krs)){
        $hasil_dosen[] = $row;
    }
    return $hasil_dosen;
}*/
function tampil_data_mhs_krs(){
    $data_krs = mysqli_query($this->koneksi,"SELECT * from krs");
    while($row_krs = mysqli_fetch_array($data_krs)){
        $hasil_krs[] = $row_krs;
    }
    return $hasil_krs;
}
function tampil_kelas(){
    $data = mysqli_query($this->koneksi, "SELECT a.*, b.id as id_mata_kuliah, b.nama_mata_kuliah as nama_mata_kuliah,
    c.id as id_dosen from kelas a
    INNER JOIN data_mata_kuliah b ON b.kode_mata_kuliah = a.id_mata kuliah
    INNER JOIN data_dosen c ON c.id = a.id_dosen");
    while($row = mysqli_fetch_array($data)){
        $kelas[] = $row;
    }
    return $kelas;
}
function tambah_data_krs($nim, $nama_mhs, $matkul, $smt, $dosen){
    mysqli_query($this->koneksi, "INSERT into krs values ('','$nim', '$nama_mhs', '$matkul', '$smt', '$dosen')");
}
function edit_data_krs($nim, $nama_mhs, $matkul, $smt, $dosen){
    mysqli_query($this->koneksi,"UPDATE krs set nama = '$nama_mhs', matkul = '$matkul',
                                smt = '$smt', dosen = '$dosen' where nim = '$nim'");
}
function hapus_data_krs($nim){
    mysqli_query($this->koneksi,"DELETE from krs where nim = '$nim'");
}

function login($username, $password){
    $data = mysqli_query($this->koneksi, "SELECT * FROM admin where username ='$username' AND password='$password'");
    if(mysqli_num_rows($data)== 0){
        echo "<b>Data user tidak<b>";
        $hasil = [];
        header('location:login.php');
    }
    else{
        while($row = mysqli_fetch_array($data)){
            $hasil[] = $row;
        }
    }
    return $hasil;
}

function register($nama,$username,$password){
    $insert = mysqli_query($this->koneksi, "INSERT INTO admin VALUES ('', '$nama', '$username', '$password')");
    return $insert;
}

}