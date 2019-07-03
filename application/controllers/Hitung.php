<?php 
 
 
class Hitung extends CI_Controller{

	protected $kriteria = array();
	protected $crips = array();
    protected $rumah = array();
    protected $matriks = array();
    protected $normal = array();
    protected $hasil = array();
    protected $total = array();
    protected $rank = array();
 
	function __construct()
    {
		parent::__construct();
        if (! $this->session->userdata('username'))
        {
            redirect('login');
        }
		$this->load->model('Model_Kriteria'); 
		$this->load->model('Model_Rumah');
		$this->load->model('Model_Crips');
		$this->load->model('Model_Hitung');
	}

	function index()
    {

		$data['title'] = 'Perhitungan SAW';
        $data['title2'] = '(Simple Additive Weighting)';
        $data['kriteria'] = $this->get_kriteria();
        $data['crips'] = $this->get_crips();
        $data['rumah'] = $this->get_rumah();
        $data['matriks'] = $this->matriks();
        $data['normal'] = $this->normalisasi();
        $data['hasil'] = $this->hasil();
        $data['total'] = $this->total();
        $data['rank'] = $this->rank();
         
		$this->load->view('header', $data);
		$this->load->view('view_hitung', $data);
		$this->load->view('footer');
	}

	function get_kriteria()
    {

		$rows = $this->Model_Kriteria->tampil_hitung();
		foreach ($rows as $row)
        {
			$this->kriteria[$row->id_k] = $row;
		}
		return $this->kriteria;
	}

	function get_crips()
    {

		$rows = $this->Model_Crips->tampil_hitung();
		foreach ($rows as $row)
        {
			$this->crips[$row->id_cp] = $row;
		}
		return $this->crips;
	}

	function get_rumah()
    {

		$rows = $this->Model_Rumah->tampil_hitung();
		foreach ($rows as $row)
        {
			$this->rumah[$row->id_a] = $row;
		}
		return $this->rumah;
	}

	function matriks( $rel = array() )
    {

		$rows = $this->Model_Hitung->get_rel();
		foreach ($rows as $row)
        {
			$this->matriks[$row->id_a][$row->id_k] = $row->id_cp;
		}
		return $this->matriks;
	}

	function normalisasi()
    {

		$mm = array();
                
        foreach($this->matriks as $key => $value)
        {
            $temp = array();        
            foreach($value as $k => $v)
            {
                $mm[$k][] = $this->crips[$v]->skor;
            }
        }
        
        foreach($this->matriks as $key => $value)
        {                
            foreach($value as $k => $v)
            {
                if($this->kriteria[$k]->atribut == '1')
                    $this->normal[$key][$k] = $this->crips[$v]->skor / max($mm[$k]);
                else
                    $this->normal[$key][$k] = min($mm[$k]) / $this->crips[$v]->skor; 
            }
        }
        return $this->normal;
	}

	function hasil()
    {

		foreach($this->normal as $key => $value)
        {
            foreach($value as $ke => $val)
            {
                $this->hasil[$key][$ke] = $val * $this->kriteria[$ke]->bobot;
            }
        }
        return $this->hasil;
	}


	function total()
    {

		foreach($this->hasil as $key => $value)
        {
            $this->total[$key] = 0;
            foreach($value as $ke => $val)
            {
                $this->total[$key]+=$val;
            }
        }
        return $this->total;
	}

	function rank()
    {

		$data = $this->total;
        arsort($data);
        $no=1;
        foreach($data as $key => $value)
        {
            $this->rank[$key] = $no++;
        }
        return $this->rank;
	}


	function cetak( $ID = NULL)
    {
        $data['title'] = 'Cetak Hasil Rank';
        $data['kriteria'] = $this->get_kriteria();
        $data['crips'] = $this->get_crips();
        $data['rumah'] = $this->get_rumah();
        $data['matriks'] = $this->matriks();
        $data['normal'] = $this->normalisasi();
        $data['hasil'] = $this->hasil();
        $data['total'] = $this->total();
        $data['rank'] = $this->rank();

        $this->load->view('header_hitung', $data);
        $this->load->view('print_hitung', $data);
        $this->load->view('footer');
    }

}	