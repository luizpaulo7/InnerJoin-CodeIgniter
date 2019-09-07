<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$cursos = $this->db
					->select('*')
					->from('Curso')
					->get()
					->result();

		$alunos = $this->db
					->select('a.*, c.nome AS nomeCurso')
					->from('Aluno AS a')
					->join('AlunoCurso AS ac', 'ac.idAluno = a.idAluno')
					->join('Curso AS c', 'c.idCurso = ac.idCurso')
					->get()
					->result();
		
		$data['title'] = 'LISTA DE CLIENTES';

		$data['alunos'] = $alunos;
		$data['cursos'] = $cursos;

		$this->load->view('includes/header', $data);

		$this->load->view('cliente/lista', $data);
		
		$this->load->view('includes/footer');
	}
}
