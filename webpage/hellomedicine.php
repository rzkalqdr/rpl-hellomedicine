<?php
    class User {
        private $idUser;
        private $displayName;
        private $username;
        private $password;

        // Methods: idUser
        function set_idUser($idUser) {
            $this->idUser = $idUser;
        }

        function get_idUser() {
            return $this->idUser;
        }
        
        // Methods: displayName
        function set_displayName($displayName) {
            $this->displayName = $displayName;
        }

        function get_displayName() {
            return $this->displayName;
        }

        // Methods: username
        function set_Username($username) {
            $this->username = $username;
        }

        function get_Username() {
            return $this->username;
        }

        // Methods: password
        function set_Password($password) {
            $this->password = $password;
        }

        function get_Password() {
            return $this->password;
        }
    }

?>