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

class AdminController extends Controller
{
    

    // public function listuserAction()
    // {
    //     echo "daftar";
    // }

    public function loginadminAction()
    {
        $this->view->pick('loginadmin');
    }

    public function halamanadminAction()
    {
        $id = $this->session->get('admin');
        if ($id == NULL) {
            // echo "berhasil login";
            // die();
            (new Response())->redirect('loginadmin')->send();          
        }
        $this->view->pick('halamanadmin');
    }
    
    public function storeloginAction()
    {
        $username = $this->request->getPost('username');
        $pass = $this->request->getPost('password');
        // echo $username;
        // echo $pass;
        // die();
        $admin = admin::findFirst("username = '$username'");
        // // var_dump ($pemesan);
        // die();
            if ($admin){
                // echo "userada";
                // die();
                // if($this->security->checkHash($pass, $pemesan->password)){
                    $this->session->set(
                        'admin',
                        [
                            'id' => $admin->id,
                            'username' => $admin->username,
                        ]
                    );
                    (new Response())->redirect('halamanadmin')->send();
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
                $this->flashSession->error("Gagal masuk sebagai admin. Akun tidak ditemukan.");
                $this->response->redirect('loginadmin');
                // echo "Akun tidak ditemukan.";
            }
    }
    public function logoutAction()
    {
        $this->session->destroy();
        $this->response->redirect("loginadmin");
    }

    public function storetambahstudioAction()
    {   

        $uploaddir1 = 'assets/img/studio/';
        $uploadfile1 = $uploaddir1 . basename($_FILES['file']['name']);

        if (move_uploaded_file($_FILES["file"]["tmp_name"], $uploadfile1)) {

            $img = $_FILES["file"]["name"];
            $studio = new Studio();
            $nama = $this->request->getPost('nama');
            $harga = $this->request->getPost('harga');
            $deskripsi = $this->request->getPost('deskripsi');
            $status = 1;

            $studio->nama = $nama;
            $studio->harga =  $harga;
            $studio->deskripsi = $deskripsi;
            $studio->status = $status;
            $studio->image = $img;
            // echo $nama;
            // echo $kapasitas;
            // echo $harga;
            // die();

            $studio->save();
            $this->response->redirect('liststudio');
        }

    }

    public function tambahstudioAction()
    {   
        $id = $this->session->get('admin');
        if ($id == NULL) {
            // echo "berhasil login";
            // die();
            (new Response())->redirect('loginadmin')->send();          
        }
        $this->view->pick('tambahstudio');
    }

    public function tabelstudioAction()
    {

        $listjenisstudios = studio::find();
        $data = array();

        foreach ($listjenisstudios as $listjenisstudio)
        {
            // status = 1 itu available
            if($listjenisstudio->status == 1)
            {
                $status_sekarang = "Tersedia";
            }
            else{
                $status_sekarang = "Tidak Tersedia";
            }
            $data[] = array(
                'nama' => $listjenisstudio->nama,
                'deskripsi' => $listjenisstudio->deskripsi,
                'harga' => $listjenisstudio->harga,
                'status' => $status_sekarang,
                'link' => $listjenisstudio->id,
            );
        }

        $content = json_encode($data);
        return $this->response->setContent($content);
    }
 
    public function liststudioAction()
    {   
        $id = $this->session->get('admin');
        if ($id == NULL) {
            // echo "berhasil login";
            // die();
            (new Response())->redirect('loginadmin')->send();          
        }
        $this->view->pick('liststudio');
    } 

    public function deleteAction($id)
    {
        $isAdmin = $this->session->get('admin');
        if ($isAdmin == NULL) {
            // echo "berhasil login";
            // die();
            (new Response())->redirect('loginadmin')->send();          
        }
        $user = Studio::findFirst("id='$id'");
            $user->status = 0;
            $user->save();
        $this->response->redirect('liststudio');

    } 

    public function editstudioAction($id)
    {
        $ids = $this->session->get('admin');
        if ($ids == NULL) {
            // echo "berhasil login";
            // die();
            (new Response())->redirect('loginadmin')->send();          
        }
        // echo "berhasil";
        // die();
        $studio = studio::findFirst("id = '$id'");
        $this->view->data=$studio;

        $this->view->pick('editstudio');
    } 


    public function storeeditstudioAction()
    {
        // echo "yes pos";
        // die();

        $id = $this->request->getPost('id');
        $studio = studio::findFirst ("id = '$id'");
        // var_dump($studio);
        // die();
        $nama = $this->request->getPost('nama');
        $harga = $this->request->getPost('harga');
        $deskripsi = $this->request->getPost('deskripsi');

        $studio->nama = $nama;
        $studio->harga =  $harga;
        $studio->deskripsi = $deskripsi;

        if($studio->update()){
            // echo "berhasil update";
            // die();
            return $this->response->redirect('liststudio');
        }
        else{
            $this->flashSession->error("Gagal diupdate.");
            $this->response->redirect('editstudio' . '/' . $id);
        }
     } 

    public function listreservasiAction()
    {
        $id = $this->session->get('admin');
        if ($id == NULL) {
            // echo "berhasil login";
            // die();
            (new Response())->redirect('loginadmin')->send();          
        }
        $this->view->pick('listreservasi');
     } 

    public function tabelreservasiadminAction()
    {   
        $bookings = booking::find();
        $data = array();

        foreach ($bookings as $booking) {
            $studio = studio::findFirst("id='$booking->id_studio'");

            if($booking->sudah_bayar == 1)
            {
                $status = "Sudah";
            }
            else{
                $status = "Belum";
            }
            if($booking->status == 1)
            {
                $konfirmasi = "Oke";
            }
            else{
                $konfirmasi = "Belum Oke";
            }
            
            
            $data[] = array(
                'link' => $booking->id,
                'nama_studio' => $studio->nama,
                'nama' => $booking->nama,
                // 'no_hp' => $booking->no_hp,
                'tanggal' => $booking->tanggal,
                'jam_mulai' => $booking->jam_mulai,
                'jam_selesai' => $booking->jam_selesai,
                'selama' => $booking->selama,
                'bayar' => $booking->bayar,
                'sudah_bayar' => $status,
                'status' => $booking->status,
                'konfirmasi'=> $konfirmasi,
            );
        }


        
        $content = json_encode($data);
        return $this->response->setContent($content);
    } 
    public function detailreservasiAction($id)
    {
        $booking = booking::findFirst("id='$id'");
        $idstu = $booking->id_studio;
        $studio = studio::findFirst("id='$idstu'");
        if($booking){
            $this->view->data=$booking;
            $this->view->datas=$studio;
            $this->view->pick('detailreservasi');
        }
        
    }

    public function downloadAction($id)
    { 
        // echo $id;
        // die();
        $booking = booking::findFirst("id='$id'");
        
            if($booking->bukti)
            {
                // echo "ada";
                // die();
                $upload_dir = __DIR__ . '/../../public/assets/img/bukti/';
                $path = $upload_dir.$booking->bukti;
                $filetype = filetype($path);
                $filesize = filesize($path);
                // header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
                // header('Content-Description: File Download');
                header('Content-type: '.$filetype);
                header('Content-length: ' . $filesize);
                header('Content-Transfer-Encoding: binary');
                header('Accept-Ranges: bytes');
                header('Content-Disposition: attachment; filename="'.$booking->bukti.'"');
                readfile($path);

            }
            else
            {
                return $this->response->redirect('listreservasi');
            }
     }

    public function konfirmasiAction($id)
    {
        $booking = booking::findFirst("id='$id'");
        if($booking){
            $booking->status = 1;
            $booking->save();
            $this->response->redirect('listreservasi');
        }
        
    }

}   