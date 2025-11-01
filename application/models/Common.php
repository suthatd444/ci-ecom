<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Common extends CI_Model{ 

    public function insert($table,$data = array()) { 
        if(!empty($data)){ 
            $insert = $this->db->insert($table, $data); 
            return $insert?$this->db->insert_id():false; 
        } 
        return false; 
    } 

    public function update($table,$data,$id) { 
        if(!empty($id)){ 
            $this->db->where('id', $id);
            $this->db->update($table,$data);
            return true; 
        } 
        return false; 
    }

    public function delete($table,$id) { 
        if(!empty($id)){ 
            $this->db->where('id', $id);
            $this->db->delete($table);
            return true; 
        } 
        return false; 
    }

    public function getSingleRows($table,$data){
        if(!empty($data)){ 
            $this->db->select('*'); 
            $this->db->from($table); 
            $this->db->where($data); 
            $query = $this->db->get(); 
            $result = $query->result_array();
        } 
        return !empty($result)?$result[0]:[];
    }
    
    public function getAllSingleRows($table,$data){
        if(!empty($data)){ 
            $this->db->select('*'); 
            $this->db->from($table); 
            $this->db->where($data); 
            $query = $this->db->get(); 
            $result = $query->result_array();
        } 
        return $result;
    }

    public function getAllData($table){
            $this->db->select('*'); 
            $this->db->from($table); 
            $query = $this->db->get(); 
            $result = $query->result_array();
        return $result;
    }
    public function getAllDataLimit($table,$limit){
            $this->db->select('*'); 
            $this->db->from($table); 
            $this->db->limit($limit); 
            $this->db->order_by("id", "desc");
            $query = $this->db->get(); 
            $result = $query->result_array();
        return $result;
    }

     public function getAllSingleRowsByLimit($table, $data, $limit=null)
    {
        if (!empty($data)) {
            $this->db->select('*');
            $this->db->from($table);
            $this->db->where($data);
            if (!empty($limit)) {
                $this->db->limit($limit);
            }
            $query = $this->db->get();
            $result = $query->result_array();
        }
        return $result;
    }
     public function pages_update($table,$data,$id) { 
        $this->db->select('*'); 
        $this->db->from($table); 
        $this->db->where('page_type_id', $id);
        $query = $this->db->get()->result_array(); 
        if(count($query)>0){
            if(!empty($id)){ 
                $this->db->where('page_type_id', $id);
                $this->db->update($table,$data);
                return true; 
            } 
        }else{
            $insert = $this->db->insert($table, $data); 
            return $insert?$this->db->insert_id():false; 
        }
       
        return false; 
    }
    
    public function updateNO($table,$data) { 
       
            $this->db->where("is_primary","YES");
            $this->db->update($table,$data);
            return true; 
       
    }
     public function getAllSingleRowsLike($table,$data){
        if(!empty($data)){ 
            $this->db->select('*'); 
            $this->db->from($table); 
            $this->db->like($data);
            $query = $this->db->get(); 
            $result = $query->result_array();
        } 
        return $result;
    }
 public function deletenew($table, $where)
    {
        if (!empty($where)) {
            $this->db->where($where);
            $this->db->delete($table);
            return true;
        }
        return false;
    }

    public function investors_relations_tabcontent_list($id = null)
    {
        $return = NULL;

        $this->db->select('irtd.*,irtc.title');
        $this->db->from('investors_relations_tabcontent as irtc');
        $this->db->join('investors_relations_tabdata as irtd', 'irtd.id=irtc.investors_relations_tabdata_id', 'LEFT');

        if ($id) {
            $this->db->where('irtc.investors_relations_tabdata_id', $id);
            $this->db->group_by('irtc.title');
        } else {
            $this->db->group_by('irtc.investors_relations_tabdata_id');
        }

        $return = $this->db->get()->result_array();

        return $return;
    }

    public function investors_relations_tabcontent_list_ungroup($title = null)
    {
        $return = NULL;

        $this->db->select('irtd.*,irtc.title,irtc.subtitle,irtc.docs');
        $this->db->from('investors_relations_tabcontent as irtc');
        $this->db->join('investors_relations_tabdata as irtd', 'irtd.id=irtc.investors_relations_tabdata_id', 'LEFT');
        $this->db->where($title);

        $return = $this->db->get()->result_array();
        return $return;
    }
      public function investors_relations_tabcontent_admin_list()
    {
        $return = NULL;

        $this->db->select('irtd.*,irtc.title');
        $this->db->from('investors_relations_tabcontent as irtc');
        $this->db->join('investors_relations_tabdata as irtd', 'irtd.id=irtc.investors_relations_tabdata_id', 'LEFT');
        $this->db->group_by('irtc.title');
        $return = $this->db->get()->result_array();
        return $return;
    }
}