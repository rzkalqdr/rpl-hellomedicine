<?php 
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