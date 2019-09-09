<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$this->load->model('aluno');
		$this->load->model('curso');

		$data['title'] = 'LISTA DE CLIENTES';

		$data['alunos'] = $this->aluno->getAll();
		$data['cursos'] = $this->curso->getAll();

		$data['aluno'] = $this->aluno->getById(2);

		$this->load->view('includes/header', $data);

		$this->load->view('cliente/lista', $data);

		$this->load->view('includes/footer');
	}
}
