<?php

namespace Phalcon\Init\Dashboard\Models;

use Phalcon\Mvc\Model;

class Studio extends Model
{
    public $id;
    public $nama;
    public $kapasitas;
    public $deskripsi;
    public $harga;
    public $status;
    public $image;
}