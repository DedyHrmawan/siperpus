<?php
class PeminjamanController extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('Peminjaman');
        $this->load->model('Anggota');
        $this->load->model('Buku');
    }
    public function vPeminjaman(){
        $data['title']       = 'Peminjaman | e-Libs';
        $data['peminjamans'] = $this->Peminjaman->getAll();

        $this->petugastemplate->view('petugas/VPeminjamanPetugas', $data);
    }
    public function vTambah(){
        $data['title']      = 'Tambah Peminjaman Buku | e-Libs';
        $data['anggotas']   = $this->Anggota->getAll();
        $data['bukus']      = $this->Buku->getAll();

        $this->petugastemplate->view('petugas/VTambahPeminjaman', $data);
    }
    public function vTambahDetail(){
        $param = $_POST;
        $data['title']      = 'Jumlah Buku | e-Libs';
        $data['bukus']      = $this->Buku->getIn($param['ID_BUKU']);
        $data['peminjaman'] = $param;

        $this->petugastemplate->view('petugas/VSetBuku', $data);
    }
    public function vUbah($idPeminjaman){
        $data['title']              = 'Ubah Peminjaman | e-Libs';
        $data['anggotas']           = $this->Anggota->getAll();
        $data['bukus']              = $this->Buku->getAll();
        $data['peminjaman']         = $this->Peminjaman->get(['ID_PEMINJAMAN' => $idPeminjaman]);
        $data['peminjamanDetails']  = $this->Peminjaman->getAllDetail(['ID_PEMINJAMAN' => $idPeminjaman]);
        $data['idPeminjaman']       = $idPeminjaman;

        $this->petugastemplate->view('petugas/vEditPeminjaman', $data);
    }
    public function vUbahDetail(){
        $param = $_POST;

        $data['title']              = 'Ubah Jumlah Peminjaman | e-Libs';
        $data['bukus']              = $this->Buku->getIn($param['ID_BUKU']);
        $data['peminjaman']         = $param;
        $data['peminjamanDetails']  = $this->Peminjaman->getAllDetail(['ID_PEMINJAMAN' => $param['idPeminjaman']]);

        $this->petugastemplate->view('petugas/VEditSetBuku', $data);
    }
    public function store(){
        $param = $_POST;

        $peminjamanStore['ID_PEMINJAMAN']               = 'PEM_'.date('YmdHis');
        $peminjamanStore['USERNAME_ANGGOTA']            = $param['USERNAME_ANGGOTA'];
        $peminjamanStore['USERNAME_PETUGAS']            = 'ilhamsagitap';
        $peminjamanStore['TGL_PEMINJAMAN']              = $param['TGL_PEMINJAMAN'];
        $peminjamanStore['TGLPENGEMBALIAN_PEMINJAMAN']  = $param['TGLPENGEMBALIAN_PEMINJAMAN'];
        $peminjamanStore['ISVERIF_PEMINJAMAN']          = '1';
        $this->Peminjaman->insert($peminjamanStore);

        $peminjamanDetailStore = array();
        for($i = 0; $i < count($param['JML']); $i++){
            $temp['ID_PEMINJAMAN']  = $peminjamanStore['ID_PEMINJAMAN'];
            $temp['ID_BUKU']        = $param['ID_BUKU'][$i];
            $temp['JML_PEMINJAMAN'] = $param['JML'][$i];

            $stok       = $this->Buku->get(['ID_BUKU' => $param['ID_BUKU'][$i]])->STOK_BUKU;
            $sisaStok   = (int)$stok - (int)$param['JML'][$i];
            $this->Buku->update(['ID_BUKU' => $param['ID_BUKU'][$i], 'STOK_BUKU' => $sisaStok]);

            array_push($peminjamanDetailStore, $temp);
        }
        $this->Peminjaman->insertDetail($peminjamanDetailStore);

        redirect('peminjaman');
    }
    public function edit(){
        $param = $_POST;
        $this->Peminjaman->update($param);
        redirect('peminjaman');
    }
    public function destroy(){
        $param = $_POST;

        $pemDetails = $this->Peminjaman->getAllDetail(['ID_PEMINJAMAN' => $param['ID_PEMINJAMAN']]);
        foreach ($pemDetails as $item) {
            $stok       = $this->Buku->get(['ID_BUKU' => $item->ID_BUKU])->STOK_BUKU;
            $sisaStok   = (int)$stok + (int)$item->JML_PEMINJAMAN;
            $this->Buku->update(['ID_BUKU' => $item->ID_BUKU, 'STOK_BUKU' => $sisaStok]);
        }
        
        $this->Peminjaman->deleteDetail($param);
        $this->Peminjaman->delete($param);
        redirect('peminjaman');
    }
}
