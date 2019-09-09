<?php

class Curso extends CI_Model
{

    function getAll()
    {
        return $this->db
            ->get('Curso')
            ->result();
    }

    function getById($idCurso)
    {
        return $this->db
            ->select('*')
            ->from('Curso')
            ->where('idCurso', $idCurso)
            ->get()
            ->row();
    }
}
