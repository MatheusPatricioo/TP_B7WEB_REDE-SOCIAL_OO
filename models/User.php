<?php
//tudo relacionado ao usuario vou tratar aqui :)

class User
{
    public $id;
    public $name;
    public $email;
    public $password;
    public $birthdate;
    public $city;
    public $avatar;
    public $work;
    public $cover;
    public $token;
}
interface UserDAO //tava "Dao", mudei pra DAO, se der algum erro, é só reverter :)
{
    public function findByToken($token);
    public function findByEmail($email);
    public function update(User $u);
    public function insert(User $u);
}
