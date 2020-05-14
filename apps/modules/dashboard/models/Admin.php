<?php

namespace Phalcon\Init\Dashboard\Models;

use Phalcon\Mvc\Model;

class admin extends Model
{
    public $id;
    public $email;
    public $username;
    public $password;
    public $status;
}