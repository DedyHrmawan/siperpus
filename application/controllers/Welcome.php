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
        $data['title']          = 'Overview Kepala | e-Libs';

        $this->kepala->view('kepalaperpus/VOverviewKepala', $data);
    }

	public function vTransaksi()
    {
        $data['title']          = 'Overview | e-Libs';

        $this->kepala->view('kepalaperpus/VTransaksiKepala', $data);
    }

	public function vLaporanBuku()
    {
        $data['title']          = 'Laporan Buku | e-Libs';

        $this->kepala->view('kepalaperpus/VLaporanBuku', $data);
    }

	public function vLaporanPeminjaman()
    {
        $data['title']          = 'Laporan Peminjaman | e-Libs';

        $this->kepala->view('kepalaperpus/VLaporanPeminjaman', $data);
    }

	public function vLaporanPengembalian()
    {
        $data['title']          = 'Laporan Pengembalian | e-Libs';

        $this->kepala->view('kepalaperpus/VLaporanPengembalian', $data);
    }

	public function vLaporanDenda()
    {
        $data['title']          = 'Laporan Denda | e-Libs';

        $this->kepala->view('kepalaperpus/VLaporanDenda', $data);
    }

	public function vLaporanPetugas()
    {
        $data['title']          = 'Laporan Petugas | e-Libs';

        $this->kepala->view('kepalaperpus/VLaporanPetugas', $data);
    }

	public function vadmin()
    {
        $data['title']          = 'Admin | e-Libs';

        $this->kepala->view('kepalaperpus/VAdmin', $data);
    }

	public function vPetugas()
    {
        $data['title']          = 'Petugas | e-Libs';

        $this->kepala->view('kepalaperpus/VPetugas', $data);
    }

    //Controller Petugas
    public function vOverviewPetugas()
    {
        $data['title']          = 'Overview Petugas | e-Libs';

        $this->petugas->view('petugas/VOverviewPetugas', $data);
    }

    public function vTransaksiPetugas()
    {
        $data['title']          = 'Transaksi | e-Libs';

        $this->petugas->view('petugas/VTransaksiPetugas', $data);
    }

    public function vSanksi()
    {
        $data['title']          = 'Sanksi | e-Libs';

        $this->petugas->view('petugas/VSanksi', $data);
    }

    // Controller Anggota
    public function vBuku()
    {
        $data['title']          = 'Daftar Buku | e-Libs';

        $this->anggota->view('anggota/VBuku', $data);
    }   

    public function vTransaksiAnggota()
    {
        $data['title']          = 'Transaksi | e-Libs';

        $this->anggota->view('anggota/VTransaksi', $data);
    }   

    public function vKeranjang(){
        $data['title']          = 'Keranjang | e-Libs';

        $this->anggota->view('anggota/VKeranjang', $data);   
    }
}
