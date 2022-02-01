<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alunos extends CI_Controller
{

	public function index()
	{
		$this->load->model("Alunos_model");
		$lista = $this->Alunos_model->buscaTodos();
		$dados = array("alunos" => $lista);
		$id = $this->input->get("id");
		$this->load->view("includes/header");
		$this->load->view("includes/nav-top");
		$this->load->view("Alunos/index", $dados);
		$this->load->view("includes/footer");
		$this->load->view("includes/js");
	}


	public function detalhe(){
		$id = $this->input->get("id");
		$this->load->model("alunos_model");
		$aluno = $this->alunos_model->retorna($id);
		$dados = array("aluno" => $aluno);
		$this->load->view("includes/header");
		$this->load->view("includes/nav-top");
		$this->load->view("Alunos/detalhe", $dados);
		$this->load->view("Modais/editAluno");		
		$this->load->view("includes/footer");
		$this->load->view("includes/js");

	}

	public function novo()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("nome", "nome", "required|min_length[4]");
		$this->form_validation->set_rules("endereco", "endereco", "required");
	    $this->form_validation->set_rules("foto_base64", "foto_base64", "required");
		$this->form_validation->set_error_delimiters("<p class='alert alert-danger'>","</p>");

		$sucesso = $this->form_validation->run();

		if ($sucesso) {

			$aluno = array(
				"nome" => $this->input->post("nome"),
				"endereco" => $this->input->post("endereco"),
				"foto_base64" => $this->input->post("foto_base64")
			);

			$this->load->model("alunos_model");
			$this->alunos_model->salva($aluno);
			$this->session->set_flashdata("success", "Aluno Cadastrado com sucesso");
			redirect("/");

		} else {
			$this->session->set_flashdata("danger", "Aluno não cadastrado, verifique os campos e tente novamente!");
			redirect("/");
		}
	}


	public function delete($id) {
		$this->load->model("alunos_model");
		$this->alunos_model->deletar_aluno($id);
		$this->session->set_flashdata('success', 'Aluno deletado com sucesso!');
		redirect('/');
	}

	public function editar() {
		$id = $this->input->get("id");
		$this->load->model("alunos_model");
		$aluno = $this->alunos_model->retorna($id);
		$dados = array("aluno" => $aluno);

		$this->load->view("includes/header");
		$this->load->view("includes/nav-top");
		$this->load->view("alunos/editar", $dados);
		$this->load->view("includes/footer");
		$this->load->view("includes/js");
	}

	public function salvar($id){
		$this->load->model("alunos_model");
		$this->alunos_model->salvar($id);

		$this->session->set_flashdata("success", "Aluno Alterado!");
		redirect('/');
	}
}
