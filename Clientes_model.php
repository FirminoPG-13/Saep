<?php
class Clientes_model extends CI_Model {

    public function get_clientes(){
        $query = $this->db->get('clientes');
        return $query->result();
    }
    
    //Insere um novo registro
    //$cliente é contem os dados do form
    public function insert($cliente){
        $this->db->insert('clientes', $cliente);
    }

    public function get_cliente($id){
        $this->db->where('id', $id);
        $query = $this->db->get('clientes');
        return $query->result()[0];
    }

    public function update($data){
        $this->db->where('id', $data['id']);
		$this->db->update('clientes', $data);
    }

    public function autenticacao(){
        $query = $this->db->get('clientes');
        
        $this->db->where()
    }


}
?>