<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class studentModel extends CI_Model 
{
  var $table = "feedback";
  // var $table = "postmenu";

  function __construct()
  {
    parent::__construct();
    // $this->table = 'postmenu';
  }

  function getAll($limit = null)
  {
    if($limit != null)
    {
      $this->db->limit($limit['limit'],$limit['offset']);
    }
    $q = $this->db->get($this->table);
    if($q->num_rows() > 0)
    {
      return $q->result();
    }
    return array();
  }

  function countAll()
  {
    return $this->db->count_all($this->table);
  }


  function add($data)
  {
    $this->db->insert($this->table,$data);
  }

  function update($data,$id)
  {
    $this->db->where("feedback_id",$id);
    $this->db->update($this->table,$data);
  }


  function delete($id)
  {
    $this->db->where("feedback_id",$id);
    $this->db->delete($this->table);
  }

  /** Fetch data to update **/
  function getById($id)
  {
    $this->db->where("feedback_id",$id);
    $q = $this->db->get($this->table);
    if($q->num_rows() > 0)
    {
      return $q->row();
    }
    return false;
  }

  /** Fetch employee name to add or update issue **/
  function get_fichas() {
    $this->db->select('assigned_to')->from('employee');
    $query=$this->db->get();
    return $query->result_array();
}

function get_fichass() {
    $this->db->select('assigned_to')->from('employee');
    $query=$this->db->get();
    return $query->result_array();
}

}


