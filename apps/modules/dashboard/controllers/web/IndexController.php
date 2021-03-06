<?php

namespace Phalcon\Init\Dashboard\Controllers\Web;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Init\Dashboard\Models\admin;
use Phalcon\Init\Dashboard\Models\user;
use Phalcon\Init\Dashboard\Models\studio;
use Phalcon\Init\Dashboard\Models\booking;
use Phalcon\Http\Request;
use Phalcon\Events\Manager as EventsManager;
use Phalcon\Http\Response;

class IndexController extends Controller
{
    public function indexAction()
    {
        $db = $this->getDI()->get('db');

        $sql = "SELECT * from pasien";

        $result = $db->fetchAll($sql, \Phalcon\Db\Enum::FETCH_ASSOC);

        echo var_dump($result);
    }

    public function homeAction()
    {
        $_isAdmin = $this->session->get('admin');
        $_isUser = $this->session->get('user');
        if ($_isAdmin) {
            $this->response->redirect('halamanadmin');
        }
        if ($_isUser) {
            $this->response->redirect('halamanuser');
        }
        
        $this->view->pick('home');
    }

    public function katalogAction()
    {
        $status = 1;
        $studio = studio::find("status = '$status'");
        $this->view->data=$studio;
        $this->view->pick('katalog');
    }


    public function route404Action()
    {
        $this->view->pick('error');
    }




}   