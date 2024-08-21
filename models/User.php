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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 9465deb1214930d5850a22590b05ba2c4ad3d811
interface UserDao
{
    public function findByToken($token);
    public function findByEmail($email);
    public function update(User $u);
}
<<<<<<< HEAD
=======
=======
    interface UserDao {
        public function findByToken($token);

    }

>>>>>>> 2e3c1cf57a483fac35ac88130822420755cd8c46
>>>>>>> 9465deb1214930d5850a22590b05ba2c4ad3d811
