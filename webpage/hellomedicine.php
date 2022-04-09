<?php
class User {
    private $idUser;
    private $displayName;
    private $username;
    private $password;

    // Constructor
    public function __construct($idUser, $displayName, $username, $password) {
        $this->idUser = $idUser;
        $this->displayName = $displayName;
        $this->username = $username;
        $this->password = $password;
    }

    // Methods: setter & getter idUser
    function set_idUser($idUser) {
        $this->idUser = $idUser;
    }

    function get_idUser() {
        return $this->idUser;
    }

    // Methods: setter & getter displayName
    function set_displayName($displayName) {
        $this->displayName = $displayName;
    }

    function get_displayName() {
        return $this->displayName;
    }

    // Methods: setter & getter  username
    function set_Username($username) {
        $this->username = $username;
    }

    function get_Username() {
        return $this->username;
    }

    // Methods: setter & getter password
    function set_Password($password) {
        $this->password = $password;
    }

    function get_Password() {
        return $this->password;
    }

    // Method: registerUser
    function registerUser($username, $password) {
        //
    }

    // Method: changePassword
    function changePassword() {
        //
    }
}

    class Pasien extends User {
    // Properties
    private $idPasien;
    private $RiwayatSakit;
    private $alamatPasien;

    //Contructor
    public function __construct($idUser, $displayName, $username, $password,$idPasien,$RiwayatSakit,$alamatPasien) {
        $this->idUser = $idUser;
        $this->displayName = $displayName;
        $this->username = $username;
        $this->password = $password;
        $this->idPasien = $idPasien;
        $this->RiwayatSakit = $RiwayatSakit;
        $this->alamatPasien = $alamatPasien;
    }

    // Method: set get id pasien
    function set_idPasien($idPasien) {
        $this->idPasien = $idPasien;
    }
    function get_idPasien() {
        return $this->idPasien;
    }
    // Method: set get riwayat sakit
    function set_RiwayatSakit($RiwayatSakit) {
        $this->RiwayatSakit = $RiwayatSakit;
    }
    function get_RiwayatSakit() {
        return $this->RiwayatSakit;
    }

    // Method: set get alamat pasien
    // Ada kemungkinan menggunakan API location
    function set_alamat($alamatPasien) {
        $this->alamatPasien = $alamatPasien;
    }
    function get_alamat() {
        return $this->alamatPasien;
    }
    // Method: registerUser
    function cariRumahSakit($idPasien, $alamatPasien, $username) {
      //
    }
    // Method: registerUser
    function konsultasiDokter($idPasien, $username, $RiwayatSakit) {
     //
    }
    // Method: registerUser
    function rekomendasiObat($idUser,$username ,$RiwayatSakit) {
    //
    }
    // Method: registerUser
    function pesanObat($idUser, $alamatPasien,$username) {
      //
    }
    // Method: registerUser
    function bacaArtikel() {
      //
    }

    class Dokter extends User {
        // Properties
        private $idDokter;
        private $spesialisDokter = $spesialisDokter;
        private $nomorSTR = $nomorSTR;

        // Constructor
        public function __construct($idUser, $displayName, $username, $password, $idDokter, $spesialisDokter, $nomorSTR) {
            $this->idUser = $idUser;
            $this->displayName = $displayName;
            $this->username = $username;
            $this->password = $password;
            $this->idDokter = $idDokter;
            $this->spesialisDokter = $spesialisDokter;
            $this->nomorSTR = $nomorSTR;
        }

        // Methods: setter & getter idDokter
        function set_idUser($idDokter) {
            $this->idUser = $idDokter;
        }

        function get_idDokter() {
            return $this->idDokter;
        }

        // Methods: setter & getter spesialisDokter
        function set_spesialisDokter($spesialisDokter) {
            $this->spesialisDokter = $spesialisDokter;
        }

        function get_spesialisDokter() {
            return $this->spesialisDokter;
        }

        // Methods: setter & getter  nomorSTR
        function set_nomorSTR($nomorSTR) {
            $this->set_nomorSTR = $nomorSTR;
        }

        function get_nomorSTR() {
            return $this->nomorSTR;
        }

        // Methods: setter & getter chatKonsultasiPasien
        function set_chatKonsultasiPasien($chatKonsultasiPasien) {
            $this->chatKonsultasiPasien = $chatKonsultasiPasien;
        }

        function get_chatKonsultasiPasien() {
            return $this->chatKonsultasiPasien;
        }

        // Methods: setter & getter beriRekomendasiObat
        function set_beriRekomendasiObat($beriRekomendasiObat) {
            $this->beriRekomendasiObat = $beriRekomendasiObat;
        }

        function get_beriRekomendasiObat() {
            return $this->beriRekomendasiObat;
        }

        // Method: chatKonsultasiPasien
        function chatKonsultasiPasien() {
            //
        }

        // Method: beriRekomendasiObat
        function beriRekomendasiObat() {
            //
        }
    }

    class Apotek {
        private string $idApotek;
        private string $namaApotek;
        private string $alamatApotek;

        // Constructor
        public function __construct($idApotek, $namaApotek, $alamatApotek)
        {
            $this->idApotek = $idApotek;
            $this->namaApotek = $namaApotek;
            $this->alamatApotek = $alamatApotek;
        }

        // Method Setter and Getter idApotek
        public function set_idApotek($idApotek){
            $this->idApotek = $idApotek;
        }

        public function get_idApotek(){
            return $this->idApotek;
        }

        // Method Setter and Getter namaApotek
        public function set_namaApotek($namaApotek){
            $this->namaApotek = $namaApotek;
        }

        public function get_namaApotek(){
            return $this->namaApotek;
        }

        // Method Setter and Getter alamatApotek
        // Ada kemungkinan menggunakan API location
        public function set_alamatApotek($alamatApotek){
            $this->alamatApotek = $alamatApotek;
        }

        public function get_alamatApotek(){
            return $this->alamatApotek;
        }

        public function inputDataObat($idObat,$namaObat,$deskripsiObat,$hargaObat,$jumlahObat){

        }

        public function manageDataObat(){

        }
    }
?>