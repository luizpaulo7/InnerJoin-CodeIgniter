<?php

class Aluno extends CI_Model
{

    function getAll()
    {
        return $this->db
            ->select('a.*, c.nome AS nomeCurso')
            ->from('Aluno AS a')
            ->join('AlunoCurso AS ac', 'ac.idAluno = a.idAluno')
            ->join('Curso AS c', 'c.idCurso = ac.idCurso')
            ->get()
            ->result();
    }

    function getById($idAluno)
    {
        return $this->db
            ->select('*')
            ->from('Aluno')
            ->where('idAluno', $idAluno)
            ->get()
            ->row();
    }
}
