<?php

namespace Phalcon\Init\Dashboard\Controllers\Web;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Init\Dashboard\Models\pemesan;
use Phalcon\Init\Dashboard\Models\admin;
use Phalcon\Init\Dashboard\Models\studio;
use Phalcon\Init\Dashboard\Models\booking;
use Phalcon\Http\Request;
use Phalcon\Events\Manager as EventsManager;
use Phalcon\Http\Response;

class UserController extends Controller
{
    public function registerAction()
    {
        $this->view->pick('register');
    }

    public function loginAction()
    {
        $this->view->pick('login');
    }

    public function reservasistudioAction()
    {   
        $id = $this->session->get('pemesan');
        if ($id == NULL) {
            // echo "berhasil login";
            // die();
            (new Response())->redirect('login')->send();          
        }
        $studio = studio::find();
        $this->view->data=$studio;
        $this->view->pick('reservasistudio');
    } 

    public function storereservasistudioAction(){
        $booking = new booking();

        $jenis = $this->request->getPost('jenis');
        $studio = studio::findFirst("id='$jenis'");
        // var_dump($studio);
        // die();

        $nama = $this->request->getPost('nama');
        $no_hp = $this->request->getPost('no_hp');
        $tanggal = $this->request->getPost('tanggal');
        $jam_mulai = $this->request->getPost('jam_mulai');
        $jam_selesai = $this->request->getPost('jam_selesai');
        $selama = $this->request->getPost('selama');
        $bayar = $selama * $studio->harga;
        // echo $bayar;
        // die();

        $booking->id_studio = $jenis;
        $booking->nama = $nama;
        $booking->no_hp =  $no_hp;
        $booking->tanggal = $tanggal;
        $booking->jam_mulai = $jam_mulai;
        $booking->jam_selesai = $jam_selesai;
        $booking->selama = $selama;
        $booking->bayar = $bayar;

        $booking->save();
        $this->response->redirect('reservasisaya');
    }

    public function reservasisayaAction()
    {   
        $id = $this->session->get('pemesan');
        if ($id == NULL) {
            // echo "berhasil login";
            // die();
            (new Response())->redirect('login')->send();          
        }
        $this->view->pick('reservasisaya');
    } 
    public function listreservasisayaAction()
    {   
        $bookings = booking::find();
        $data = array();

        foreach ($bookings as $booking) {
            $studio = studio::findFirst("id='$booking->id_studio'");

            if($booking->sudah_bayar)
            {
                $status = "Sudah";
            }
            else{
                $status = "Belum";
            }
            
            $data[] = array(
                'link' => $booking->id,
                'nama_studio' => $studio->nama,
                'nama' => $booking->nama,
                'no_hp' => $booking->no_hp,
                'tanggal' => $booking->tanggal,
                'jam_mulai' => $booking->jam_mulai,
                'jam_selesai' => $booking->jam_selesai,
                'selama' => $booking->selama,
                'bayar' => $booking->bayar,
                'sudah_bayar' => $status,
                'status' => $booking->status,
            );
        }
        
        $content = json_encode($data);
        return $this->response->setContent($content);
    } 

    public function batalkanAction($id)
    {
        $booking = booking::findFirst("id='$id'");
        if($booking){
            $this->db->query("delete from booking where id='".$id."'");
            $this->response->redirect('reservasisaya');
        }
        
    }



}   