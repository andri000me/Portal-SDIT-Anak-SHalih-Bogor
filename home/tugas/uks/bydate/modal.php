<?php    
    /*
     * Memanggil user guru atau walikeas
    */
    
    /*
     *---------------------------
    */
    function getList ($nama) {
        $connect = $GLOBALS['connect'];
        $query = "SELECT * FROM base_data_siswa WHERE nama_siswa LIKE '%$nama%'";
        $mysqli = mysqli_query ($connect,$query);
        return $mysqli;
    }
    
    
    /*
     * Get Time
     * Mencari siswa yang ke uks berdasarkan
     * tanggal
     * butuh satu buah argumen. . . 
    */
    
    function getTimeKes ($time) {
        $connect = $GLOBALS['connect'];
        $query = "SELECT * FROM uks_his_pemeriksaan WHERE waktu = '$time'";
        $mysqli = mysqli_query ($connect,$query);
        return $mysqli;
    }
    
    /*
     * Get detail peserta
     * Agumen pertama adalah nomor peserta
    */
    function getDetail ($idpeserta) {
        $connect = $GLOBALS['connect'];
        $query = "SELECT * FROM biodata WHERE id = '$idpeserta'";
        $mysqli = mysqli_query ($connect,$query);
        return $mysqli;
    }
    
    /*
     * get tugas from
    */
    function getJobDesc (){
        $connect = $GLOBALS['connect'];
        $query = "SELECT * FROM tugas";
        $mysqli = mysqli_query ($connect,$query);
        return $mysqli;
    }
    
    /*
     * is the user already have an accsess or not
     * true if has an accsess and false if opposite
    */
    function isSetJobDesc ($id,$jobdesc){
        $connect = $GLOBALS['connect'];
        $query = "SELECT * FROM akses_tugas WHERE id = '$id' AND deskripsi = '$jobdesc'";
        $mysqli = mysqli_query ($connect,$query);
        return $mysqli;
    }
    
?>