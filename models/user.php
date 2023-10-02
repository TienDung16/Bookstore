<?php
class User {
    private $id;
    private $username;
    private $email;
    private $password;
    private $mobile;
    private $address;
    private $authority;

    public function __construct($id, $username, $email, $password, $mobile, $address, $authority) {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->mobile = $mobile;
        $this->address = $address;
        $this->authority = $authority;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getMobile() {
        return $this->mobile;
    }

    public function setMobile($mobile) {
        $this->mobile = $mobile;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function getAuthority() {
        return $this->authority;
    }

    public function setAuthority($authority) {
        $this->authority = $authority;
    }
}
?>