<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->savelog();
        }
	public function savelog()
	{
		if (!empty($_SERVER['HTTP_REFERER'])) {
			$data['comefrom']=$_SERVER['HTTP_REFERER'];
		}
		$data['get']=$_GET;
		$data['post']=$_POST;
		if (!empty($_SESSION['user'])) {
			$data['user']=$_SESSION['user'];
		}
		$json=json_encode($data);
		$save=array(
			'data'=>$json
		);
		$this->db->insert('data_log', $save);
	}

	public function index()
	{
		$fas = $this->db->get('F_Hotel')->result();
		$this->load->view('master/fasilitas',['fas'=>$fas]);
	}
	
	public function now()
	{
		// $data['user']=$_SESSION['user'];
		// $this->db->where('id', $_GET['id']);

		$tipe_kamar = $this->db->get('Tipe_room')->result();
		$dataKamar=[];
		foreach ($tipe_kamar as $key => $kamar) {
					$this->db->where('id_tipekamar', $kamar->id);
					$fasilitaskamar = $this->db->get('F_kamar')->result();
					$dataKamar[$key]=array(
						'Info_kamar' =>$kamar,
						'F_kamar'=>$fasilitaskamar
					);
				}
		$allroom = $this->db->get('Tipe_room')->result();
		$data['kamar']=$dataKamar;
		$data['alltipe'] = $allroom;
		// var_dump($data['kamar']);
		// die;
		$this->load->view('Tamu/reve',['data'=>$data]);
	}

	public function prosBook()
	{
		
		$this->db->where('id', $_POST['id_kamar']);
		$tipe_kamar = $this->db->get('Tipe_room')->result();
		// var_dump($tipe_kamar);die;
		$total_harga=$_POST['jml_kamar']*$tipe_kamar[0]->harga;
		// var_dump($total_harga);die;
		$REF=date('mdy').$_POST['PayBay'].date('His');
		$data= array(
			'nama_pemesan' => $_POST['nama_pemesan'], 
			'email' => $_POST['email'], 
			'no_hp' => $_POST['no_hp'], 
			'nama_tamu' => $_POST['nama_pemesan'], 
			'id_kamar' => $_POST['id_kamar'], 
			'tgl_cekin' => $_POST['tgl_cekin'], 
			'tgl_cekout' => $_POST['tgl_cekout'], 
			'jml_kamar' => $_POST['jml_kamar'], 
			'Harga' => $total_harga, 
			'PayBay' => $_POST['PayBay'], 
			'PayEnd' => 0, 
			// 'Nomor_Kamar' => 0, 
			'RefPB' => $REF, 
		);
		$this->db->insert('pemesanan', $data);
		$this->print($REF);
	}

	public function print($REF)
	{
		$this->db->where('RefPB', $REF);
        $this->db->select('*');
        $this->db->from('pemesanan');
        $this->db->join('Tipe_room', 'Tipe_room.id = pemesanan.id_kamar');
        $print=$this->db->get()->result();
		$data['book']=$print;
		// var_dump($data);die;
		$this->load->view('Tamu/print',['data'=>$data]);
	}
}
