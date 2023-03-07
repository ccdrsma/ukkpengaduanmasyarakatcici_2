<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Masyarakat;
class MasyarakatController extends BaseController{
    protected $masyarakats;
    function __construct()
    {
        $this->masyarakats = new Masyarakat();
    }

    public function index()
    {
        $data['masyarakat'] = $this->masyarakats->findAll();
        return view('masyarakat_view', $data);
     }
     public function create()
    {
        return view('fmasyarakat_view');
    }
     public function simpan()
    {
        $data= array(
            'nik'=>$this->request->getPost('nik'),
            'nama'=>$this->request->getPost('nama'),
            'username'=>$this->request->getPost('username'),
            'telp'=>$this->request->getPost('telp'),
            'password' => password_hash($this->request->getPost('password')."",PASSWORD_DEFAULT),
        );
        $this->masyarakats->insert($data);
        session()->setFlashdata("message","Data berhasil disimpan");
        return $this->response->redirect('/masyarakat');
    }
    public function edit($id)
    {
    
        if($this->request->getPost('ubahpassword')){

        }
        $data = array(
            'nik'=>$this->request->getPost('nik'),
            'nama'=>$this->request->getPost('nama'),
            'username'=>$this->request->getPost('username'),
            'telp'=>$this->request->getPost('telp'),
            'password' => password_hash($this->request->getPost('password')."",PASSWORD_DEFAULT),
        );
            $this->masyarakats->update($id, $data);
            session()->setFlashdata("message","Data berhasil disimpan");
            return redirect('masyarakat');
        
    }
    public function delete($id)
    {
        $this->masyarakats->delete($id);
        session()->setFlashdata("message","Data berhasil dihapus");
        return $this->response->redirect('/masyarakat');
    }

}