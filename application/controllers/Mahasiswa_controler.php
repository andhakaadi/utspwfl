<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa_controler extends CI_Controller {

	public function index()
	{
		$data= $this->model->GetTable('mahasiswa');
		$this->load->view('view', array('data'=>$data));
	}

	public function riwayat()
	{
		$data= $this->model->GetTableRiwayat('riwayat');
		$this->load->view('riwayat', array('data'=>$data));
	}

	public function insert()
	{
		if(isset($_POST['submit'])){
			$nim = $this->input->post('nim');
			$nama = $this->input->post('nama');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$alamat = $this->input->post('alamat');
			$nomor_hp = $this->input->post('nomor_hp');
			$data = array('nim'=>$nim, 'nama'=>$nama, 'jenis_kelamin'=>$jenis_kelamin,'alamat'=>$alamat,'nomor_hp'=>$nomor_hp);
			$this->model->InsertData('mahasiswa', $data);
			redirect('Mahasiswa_controler');
		}else{
			$this->load->view('tambahdata');
		}
	}

	public function update(){
		if(isset($_POST['submit'])){
			$nim = $this->input->post('nim');
			$nama = $this->input->post('nama');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$alamat = $this->input->post('alamat');
			$nomor_hp = $this->input->post('nomor_hp');
			$data = array('nim'=>$nim, 'nama'=>$nama, 'jenis_kelamin'=>$jenis_kelamin,'alamat'=>$alamat,'nomor_hp'=>$nomor_hp);
			$this->model->UpdateData('mahasiswa', $data,'nim',$nim);
			redirect('Mahasiswa_controler');
		}else{
			$id = $this->uri->segment(3);
			$data = $this->model->getByID('mahasiswa','nim',$id)->row_array();
			$this->load->view('update',array('r'=>$data));
		}
	}

	public function delete(){
		$id = $this->uri->segment(3);
		$this->model->DeleteData('mahasiswa','nim',$id);
		redirect('Mahasiswa_controler');
	}
}