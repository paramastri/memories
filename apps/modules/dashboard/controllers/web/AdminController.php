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
            $studio = new studio();
            $nama = $this->request->getPost('nama');
            $kapasitas = $this->request->getPost('kapasitas');
            $harga = $this->request->getPost('harga');
            $deskripsi = $this->request->getPost('deskripsi');
            $status = 1;

            $studio->nama = $nama;
            $studio->kapasitas = $kapasitas;
            $studio->harga =  $harga;
            $studio->deskripsi = $deskripsi;
            $studio->status = $status;
            $studio->image = $img;
            // echo $nama;
            // echo $kapasitas;
            // echo $harga;
            // die();

            $studio->save();
            $this->response->redirect('studio');
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

    public function listjenistudioAction()
    {

        $listjenissurats = jenis_surat::find();
        $data = array();

        foreach ($listjenissurats as $listjenissurat)
        {

            if($listjenissurat->deleted == 0)
            {
                $status = "Aktif";
            }
            else{
                $status = "Tidak Aktif";
            }
            $data[] = array(
                'nama_surat' => $listjenissurat->nama_surat,
                'kode_surat' => $listjenissurat->kode_surat,
                'status' => $status,
                'link' => $listjenissurat->id,
                
                // 'verifikasi' => $verifikasi,
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
        $status = 1;
        $studio = studio::find("status = '$status'");
        $this->view->data=$studio;
        $this->view->pick('liststudio');
    } 

    public function deleteAction($id)
    {
        $id = $this->session->get('admin');
        if ($id == NULL) {
            // echo "berhasil login";
            // die();
            (new Response())->redirect('loginadmin')->send();          
        }
        $studio = studio::findFirst("id = '$id'");
        // $status = 0
        $studio->status = 0;
        $studio->update();
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
        $kapasitas = $this->request->getPost('kapasitas');
        $harga = $this->request->getPost('harga');
        $deskripsi = $this->request->getPost('deskripsi');

        $studio->nama = $nama;
        $studio->kapasitas = $kapasitas;
        $studio->harga =  $harga;
        $studio->deskripsi = $deskripsi;

        if($studio->update()){
            // echo "berhasil update";
            // die();
            return $this->response->redirect('liststudio');
        }
        else{
            return $this->response->redirect('studio/editstudio' . '/' . $id);
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


}   