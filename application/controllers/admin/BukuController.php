<?php
class BukuController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Buku');
        $this->load->model('Kategori');
        $this->load->model('Pengarang');
        $this->load->model('Penerbit');
        $this->load->library('upload');
    }
    public function vBuku()
    {
        $data['title']      = 'Buku | e-Libs';
        $data['bukus']      = $this->Buku->getAll(); 
        $data['kategoris']  = $this->Kategori->getAll();
        $data['pengarangs'] = $this->Pengarang->getAll();
        $data['penerbits']  = $this->Penerbit->getAll();

        $this->admintemplate->view('admin/VBuku', $data);
    }
    public function store(){
        $param = $_POST;

        $gmbr = $this->upload_image();
        if($gmbr != false){
            $param['IMG_BUKU'] = $gmbr;
        }

        $this->Buku->insert($param);
        redirect('buku');
    }

    public function ajxDetail(){
        $param = $_POST;
        echo json_encode($this->Buku->get(['ID_BUKU' => $param['ID_BUKU']]));
    }
    public function edit(){
        $param = $_POST;
        
        $gmbr = $this->upload_image();
        if($gmbr != false){
            $param['IMG_BUKU'] = $gmbr;
        }
        
        $this->Buku->update($param);
        redirect('buku');
    }
    public function destroy(){
        $param = $_POST;
        $this->Buku->delete($param);
        redirect('buku');
    }

    function upload_image(){
        $config['upload_path'] = 'public/images/buku'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
 
        $this->upload->initialize($config);
        if(!empty($_FILES['image']['name'])){
 
            if ($this->upload->do_upload('image')){
                $gbr = $this->upload->data();

                return base_url('public/images/buku/'.$gbr['file_name']);
            }
                      
        }else{
            return false;
        }         
    }
}
