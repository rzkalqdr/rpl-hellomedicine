<?php
    class User {
        private $idUser;
        private $displayName;
        private $username;
        private $password;

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

?>