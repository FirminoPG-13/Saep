<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cooperativa extends CI_Controller {
	// primeiramente chamamos a função de pagina inicial que conterá as opções da Cooperadora
	public function index()
	{
		$this->pagina_inicial();
	}
	


	// Chamamos a função da tela inicial
	public function pagina_inicial(){
	 	$this->load->view('view_topo');
	 	$this->load->view('view_sidebar');
	 	$this->load->view('view_pagina_inicial');
	 	$this->load->view('view_rodape');
	}


	// exemplo de chamada de função por parte da Cooperativa (finanças)
	public function financas($id_cliente){
		$this->load->model("Cooperativa_model");
		$data = $this->Cooperativa_model->financas();
		$this->load->view('view_topo');
		$this->load->view('view_sidebar');
		$this->load->view('view_financas',$data);
	 	$this->load->view('view_rodape');

	}
	// Função para que a Cooperativa veja seus bancos integrantes
	public function listagem(){
		//Carregar o Model
		$this->load->model('Cooperativa_model');

		//Obter os dados resultantes de uma consulta SQL
		$data['clientes'] = $this->Cooperativa_model->get_clientes();
		
		// Chamando uma view para mostrar o resultado
		$this->load->view('view_topo');
		$this->load->view('view_listar',$data);
		$this->load->view('view_rodape');
	}

	// função para fornecer crédito necessário aos bancos
	public function fornecer_crédito($id){
		$this->load->model("Cooperativa_model");
		// primeiramente buscamos o banco que deseja ter mais crédito a partir do seu id
		$data['cliente']=$this->Clientes_model->get_cliente($id);
		$this->load->view('view_topo');
		$this->load->view('view_fornecer_crédito',$data);
		$this->load->view('view_rodape');
	}

	public function inserir_credito(){
		// conectamos aos dados do banco para injetar crédito ao seu fundo
		$data = $this->input->post();
		$this->load->model("Cooperativa_model");
		$this->Clientes_model->inserir_credito($data);
		$this->listagem();
	}





	// Carregue a biblioteca de criptografia
	$this->load->library('encryption');

	// Codifique a senha antes de armazená-la no banco de dados
	$password_to_db = $this->encryption->encode($this->input->post('password'));

	
	















	//Caso ele não seja cadastrado chamamos a função de salvar clientes
	public function salvar_novo_cliente(){
		$this->load->model('Clientes_model');
		$this->Clientes_model->insert($this->input->post());
		pagina_inicial();
	}
	
	
	
	
	
	
	
	
	
	











	// public function editar($id){
	// 	$this->load->model("Clientes_model");
	// 	$data['cliente']=$this->Clientes_model->get_cliente($id);
		
	// 	$this->load->view('view_topo');
	// 	$this->load->view('view_editar_cliente',$data);
	// 	$this->load->view('view_rodape');
	// }

	// public function editado(){
	// 	$data = $this->input->post();
	// 	$this->load->model("Clientes_model");
	// 	$this->Clientes_model->update($data);
	// 	$this->listar();
	// }






































	
}