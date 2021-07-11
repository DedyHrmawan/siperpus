<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	//Controller Kepalaperpus

	public function vOverviewKepala()
    {
        $data['title']          = 'Overview | e-Libs';

        $this->kepalatemplate->view('kepalaperpus/VOverviewKepala', $data);
    }

    //Controller Petugas
    public function vOverviewPetugas()
    {
        $data['title']          = 'Overview Petugas | e-Libs';

        $this->petugastemplate->view('petugas/VOverviewPetugas', $data);
    }

    public function vPeminjamanPetugas()
    {
        $data['title']          = 'Peminjaman | e-Libs';

        $this->petugastemplate->view('petugas/VPeminjamanPetugas', $data);
    }

    public function vTambahPeminjaman()
    {
        $data['title']          = 'Tambah Peminjaman Buku | e-Libs';

        $this->petugastemplate->view('petugas/VTambahPeminjaman', $data);
    }

    public function vEditPeminjaman()
    {
        $data['title']          = 'Edit Peminjaman Buku | e-Libs';

        $this->petugastemplate->view('petugas/VEditPeminjaman', $data);
    }

    public function vSetBuku()
    {
        $data['title']          = 'Jumlah Buku | e-Libs';

        $this->petugastemplate->view('petugas/VSetBuku', $data);
    }

    public function vPengembalianPetugas()
    {
        $data['title']          = 'Pengembalian | e-Libs';

        $this->petugastemplate->view('petugas/VPengembalianPetugas', $data);
    }

    public function vSanksiPetugas()
    {
        $data['title']          = 'Sanksi | e-Libs';

        $this->petugastemplate->view('petugas/VSanksiPetugas', $data);
    }

    // Controller Anggota
    public function vBukuAnggota()
    {
        $data['title']          = 'Daftar Buku | e-Libs';

        $this->anggotatemplate->view('anggota/VBuku', $data);
    }   

    public function vPeminjamanAnggota()
    {
        $data['title']          = 'Peminjaman Anggota | e-Libs';

        $this->anggotatemplate->view('anggota/VPeminjamanAnggota', $data);
    }   

    public function vPengembalianAnggota()
    {
        $data['title']          = 'Pengembalian Anggota | e-Libs';

        $this->anggotatemplate->view('anggota/VPengembalianAnggota', $data);
    }   

    public function vSanksiAnggota()
    {
        $data['title']          = 'Sanksi Anggota | e-Libs';

        $this->anggotatemplate->view('anggota/VSanksiAnggota', $data);
    }   

    public function vKeranjang(){
        $data['title']          = 'Keranjang | e-Libs';

        $this->anggotatemplate->view('anggota/VKeranjang', $data);   
    }
}
