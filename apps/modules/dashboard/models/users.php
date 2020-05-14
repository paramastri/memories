<?php

namespace Phalcon\Init\Dashboard\Models;

use Phalcon\Mvc\Model;

class Users extends Model
{
    public $id;
    public $username;
    public $email;
    public $password;
    public $jkel;
    public $telepon;
}