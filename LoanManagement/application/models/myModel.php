<?php
class myModel extends CI_Model{
    function insert($table,$data){
        return $this->db->insert($table,$data);
    }
    function select($table){
        return $this->db->where(["status"=>"active"])->get($table)->result_array();
    }
    function selectWhere($table,$condition){
        $condition["status"]="active";
        return $this->db->where($condition)->get($table)->result_array();
    }
    function update($table,$condition,$data){
        return $this->db->where($condition)->update($table,$data);
    }
    function disable($table,$condition){
        return $this->db->where($condition)->update($table,["status"=>"inactive"]);
    }
    function delete($table,$condition){
        return $this->db->where($condition)->delete($table);
    }
}
?>