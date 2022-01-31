<?php
class Alunos_model extends CI_Model {
    public function buscaTodos(){
        return $this->db->get("alunos")->result_array();
    }

    public function salva($aluno){
        $this->db->insert("alunos", $aluno);
    }

    public function retorna($id){
        return $this->db->get_where("alunos", array(
            "id" => $id
            ))->row_array();
    }

    public function deletar_aluno($id){
        $this->db->where('id', $id);
        $this->db->delete('alunos');
        return TRUE;
    }

    public function salvar(){
        $id = $this->input->post("id");

        $aluno = array(
            "nome" => $this->input->post("nome"),
            "endereco" => $this->input->post("endereco"),
            "foto_base64" => $this->input->post("foto_base64")
        );

        $this->db->where('id', $id);
        return $this->db->update('alunos', $aluno);
    }
}