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

	//kepalaperpus
	public function vOverviewKepala()
    {
        $data['title']          = 'Overview | e-Libs';

        $this->templatekepala->view('kepalaperpus/VOverviewKepala', $data);
    }

	public function vTransaksi()
    {
        $data['title']          = 'Overview | e-Libs';

        $this->templatekepala->view('kepalaperpus/VTransaksi', $data);
    }

	public function vLaporanBuku()
    {
        $data['title']          = 'Laporan Buku | e-Libs';

        $this->templatekepala->view('kepalaperpus/VLaporanBuku', $data);
    }

	public function vLaporanPeminjaman()
    {
        $data['title']          = 'Laporan Peminjaman | e-Libs';

        $this->templatekepala->view('kepalaperpus/VLaporanPeminjaman', $data);
    }

	public function vLaporanPengembalian()
    {
        $data['title']          = 'Laporan Pengembalian | e-Libs';

        $this->templatekepala->view('kepalaperpus/VLaporanPengembalian', $data);
    }

	public function vLaporanDenda()
    {
        $data['title']          = 'Laporan Denda | e-Libs';

        $this->templatekepala->view('kepalaperpus/VLaporanDenda', $data);
    }

	public function vLaporanPetugas()
    {
        $data['title']          = 'Laporan Petugas | e-Libs';

        $this->templatekepala->view('kepalaperpus/VLaporanPetugas', $data);
    }

	public function vadmin()
    {
        $data['title']          = 'Admin | e-Libs';

        $this->templatekepala->view('kepalaperpus/VAdmin', $data);
    }

	public function vPetugas()
    {
        $data['title']          = 'Petugas | e-Libs';

        $this->templatekepala->view('kepalaperpus/VPetugas', $data);
    }
}
