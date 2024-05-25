<?php
class MyModel extends CI_Model{
    public function saveData($table,$data){
        $this->db->insert($table,$data);
        return $this->db->insert_id();
    }
    public function selectWhere($table,$condition){
        return $this->db->where($condition)->get($table)->result_array();
    }
    public function getData($table){
        return $this->db->get($table)->result_array();
    }
    public function saveUpdate($table,$data,$condition){
        return $this->db->where($condition)->update($table,$data);
    }
    public function deleteData($condition,$table){
        return $this->db->where($condition)->update($table,["status"=>"inactive"]);
    }
}
?>