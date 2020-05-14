<?php

namespace Phalcon\Init\Dashboard\Models;

use Phalcon\Mvc\Model;

class Booking extends Model
{
    public $id;
    public $id_user;
    public $id_studio;
    public $nama;
    public $no_hp;
    public $tanggal;
    public $jam_mulai;
    public $jam_selesai;
    public $selama;
    public $bayar;
}