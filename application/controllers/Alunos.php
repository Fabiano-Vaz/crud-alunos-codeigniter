<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alunos extends CI_Controller
{

	// Controllrs da página inicial 
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

	// Página de detálhes do Aluno 
	public function detalhe()
	{
		$id = $this->input->get("id");
		$this->load->model("alunos_model");
		$aluno = $this->alunos_model->retorna($id);
		$dados = array("aluno" => $aluno);
		$this->load->view("includes/header");
		$this->load->view("includes/nav-top");
		$this->load->view("Alunos/detalhe", $dados);
		$this->load->view("includes/footer");
		$this->load->view("includes/js");
	}


	// Criando Novo Alunos 
	public function novo()
	{
		// validando campos obrigatórios
		$this->load->library('form_validation');
		$this->form_validation->set_rules("nome", "nome", "required|min_length[4]");
		$this->form_validation->set_rules("endereco", "endereco", "required");
		$this->form_validation->set_rules("foto_base64", "foto_base64", "required");
		$this->form_validation->set_error_delimiters("<p class='alert alert-danger'>", "</p>");

		$sucesso = $this->form_validation->run();

		if ($sucesso) {
			// Se for validado, chama o model com o insert
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
			// Caso não passe na validação, redireciona para index e exibe a mensagem de erro
			$this->session->set_flashdata("danger", "Aluno não cadastrado, verifique os campos e tente novamente!");
			redirect("/");
		}
	}

	// Deleta o aluno
	public function delete($id)
	{
		$this->load->model("alunos_model");
		$this->alunos_model->deletar_aluno($id);
		$this->session->set_flashdata('success', 'Aluno deletado com sucesso!');
		redirect('/');
	}

	// Salva após edição
	public function salvar($id)
	{
		$this->load->model("alunos_model");

		$this->alunos_model->salvar($id);
		$this->session->set_flashdata("success", "Aluno Alterado!");
		redirect('/');
	}
}
