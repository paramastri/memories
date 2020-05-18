<?php

namespace Phalcon\Init\Dashboard\Controllers\Web;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Init\Dashboard\Models\users;
use Phalcon\Init\Dashboard\Models\admin;
use Phalcon\Init\Dashboard\Models\studio;
use Phalcon\Init\Dashboard\Models\booking;
use Phalcon\Http\Request;
use Phalcon\Events\Manager as EventsManager;
use Phalcon\Http\Response;

class UserController extends Controller
{

    public function halamanuserAction()
    {
        $id = $this->session->get('user');
        if ($id == NULL) {
            // echo "berhasil login";
            // die();
            (new Response())->redirect('login')->send();          
        }
        $this->view->pick('halamanuser');
    }

    public function akunsayaAction()
    {
        $ids = $this->session->get('user');
        if ($ids == NULL) {
            // echo "berhasil login";
            // die();
            (new Response())->redirect('login')->send();          
        }
        $id = $this->session->get('user')['id'];
        $studio = users::findFirst("id = '$id'");
        $this->view->data=$studio;
        $this->view->pick('akunsaya');
    }

    public function editprofilAction($id)
    {
        $ids = $this->session->get('user');
        if ($ids == NULL) {
            // echo "berhasil login";
            // die();
            (new Response())->redirect('login')->send();          
        }
        $studio = users::findFirst("id = '$id'");
        $this->view->data=$studio;
        $this->view->pick('editprofil');
    }
    public function storeeditprofilAction()
    {
        // echo "yes pos";
        // die();

        $id = $this->request->getPost('id');
        $studio = users::findFirst("id = '$id'");
        $smw = users::find();
        // var_dump($studio);
        // die();
        $nama = $this->request->getPost('nama');
        $email = $this->request->getPost('email');
        $telepon = $this->request->getPost('telepon');
       

        
            $studio->username = $username;
            $studio->nama = $nama;
            $studio->email =  $email;
            $studio->telepon = $telepon;
            
            
            if($studio->update()){
                // echo "berhasil update";
                // die();
                return $this->response->redirect('akunsaya');
            }
            else{
                $this->flashSession->error("Gagal diupdate.");
                $this->response->redirect('editprofil' . '/' . $id);
            }
        
     } 
    public function registerAction()
    {
        $id = $this->session->get('user');
        if ($id) {
            // echo "berhasil login";
            // die();
            (new Response())->redirect('halamanuser')->send();          
        }
        $this->view->pick('register');
    }

    public function storeregisterAction()
    {

        $pelanggan = new Users();
        $pelanggan->username = $this->request->getPost('username');
        $pelanggan->email = $this->request->getPost('email');
        $pelanggan->nama = $this->request->getPost('nama');
        $pelanggan->jkel = $this->request->getPost('jkel');
        $password = $this->request->getPost('password');
        $pelanggan->telepon = $this->request->getPost('telepon');
        $pelanggan->password = $this->security->hash($password);
        $user = users::findFirst("username = '$pelanggan->username'");
        if ($user) { 
            $this->flashSession->error("Gagal daftar. Username telah digunakan.");
            return $this->response->redirect('register');
            // echo "username sudah digunakan.";
        }
        else
        {
            $pelanggan->save();
            // printf (strlen($pelanggan->password));
            // echo "masuk";
            return $this->response->redirect('login');
        }
        
    }


    public function loginAction()
    {
        $id = $this->session->get('user');
        if ($id) {
            // echo "berhasil login";
            // die();
            (new Response())->redirect('halamanuser')->send();          
        }
        $this->view->pick('login');
    }

    public function storeloginAction()
    {
        $username = $this->request->getPost('username');
        $pass = $this->request->getPost('password');
        // echo $username;
        // echo $pass;
        // die();
        $user = users::findFirst("username = '$username'");
        // // var_dump ($pemesan);
        // die();
            if ($user){
                // echo "userada";
                // die();
                // if($this->security->checkHash($pass, $pemesan->password)){
                    $this->session->set(
                        'user',
                        [
                            'id' => $user->id,
                            'username' => $user->username,
                        ]
                    );
                    (new Response())->redirect('halamanuser')->send();
                    // echo "Masuk bos mantap";
                //     (new Response())->redirect('home')->send();
                // }
                // else{
                //     echo "password salah";
                //     die();
                //     $this->flashSession->error("Gagal masuk sebagai pemesan. Silakan cek kembali username dan password anda.");
                //     $this->response->redirect('login');
                // }
            }
            else{
                $this->flashSession->error("Gagal masuk sebagai user. Akun tidak ditemukan.");
                $this->response->redirect('login');
                // echo "Akun tidak ditemukan.";
            }
    }
    public function logoutAction()
    {
        $this->session->destroy();
        $this->response->redirect("login");
    }

    public function tambahreservasiAction()
    {   
        $id = $this->session->get('user');
        // if ($id == NULL) {
        //     // echo "berhasil login";
        //     // die();
        //     (new Response())->redirect('login')->send();          
        // }
        $studio = studio::find();
        $this->view->data=$studio;
        $this->view->pick('tambahreservasi');
    } 

    public function storetambahreservasiAction(){
        $booking = new booking();

        $jenis = $this->request->getPost('jenis');
        $studio = studio::findFirst("id='$jenis'");
        // var_dump($studio);
        // die();
        $users = $this->request->getPost('id_users');
        $nama = $this->request->getPost('nama');
        $tanggal = $this->request->getPost('tanggal');
        $jam_mulai = $this->request->getPost('jam_mulai');
        $jam_selesai = $this->request->getPost('jam_selesai');
        $selama = $this->request->getPost('selama');
        $bayar = $selama * $studio->harga;
        // echo $bayar;
        // die();

        $booking->id_studio = $jenis;
        $booking->id_user = $users;
        $booking->nama = $nama;
        $booking->tanggal = $tanggal;
        $booking->jam_mulai = $jam_mulai;
        $booking->jam_selesai = $jam_selesai;
        $booking->selama = $selama;
        $booking->bayar = $bayar;

        $booking->save();
        $this->response->redirect('listreservasisaya');
    }

    public function listreservasisayaAction()
    {   
        $id = $this->session->get('user');
        if ($id == NULL) {
            // echo "berhasil login";
            // die();
            (new Response())->redirect('login')->send();          
        }
        $this->view->pick('listreservasisaya');
    } 
    public function tabelreservasisayaAction()
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
            $this->response->redirect('listreservasisaya');
        }
        
    }



}   