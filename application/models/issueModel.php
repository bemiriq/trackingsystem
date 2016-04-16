<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class issueModel extends CI_Model 
{
  var $table = "issue";
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
    $this->db->where("issue_id",$id);
    $this->db->update($this->table,$data);
  }


  function delete($id)
  {
    $this->db->where("issue_id",$id);
    $this->db->delete($this->table);
  }

  /** Fetch data to update **/
  function getById($id)
  {
    $this->db->where("issue_id",$id);
    $q = $this->db->get($this->table);
    if($q->num_rows() > 0)
    {
      return $q->row();
    }
    return false;
  }
  
  function get_fichas() {
    $this->db->select('assigned_to')->from('employee');
    $query=$this->db->get();
    return $query->result_array();
  }

  public function harvest(){

      $query = $this->db->query("SELECT name,priority,building,class,description,assigned_to,status,date_posted FROM issue WHERE status = 'Pending'");

      if($query->num_rows()){
          foreach ($query->result() as $row)
         {
            echo '<hr>' . $row->name .' issue assigned to '. $row->assigned_to  .'<br>';
         }
         
        }
      }

  public function employeeDashboard1(){
    $query = $this->db->query(" SELECT`issue_id` FROM `issue` order by issue_id desc limit 1");
      if($query->num_rows()){
          foreach ($query->result() as $row)
         {
            echo $row->issue_id;
         }
         
        }
  }

 

  public function employeeDashboard2(){
     $query = $this->db->query(" SELECT`user_id` FROM `user` order by user_id desc limit 1");
      if($query->num_rows()){
          foreach ($query->result() as $row)
         {
            echo $row->user_id;
         }
         
        }
  }

  public function employeeDashboard3(){
    $query = $this->db->query(" SELECT`employee_id` FROM `employee` order by employee_id desc limit 1");
      if($query->num_rows()){
          foreach ($query->result() as $row)
         {
            echo $row->employee_id;
         }
         
        }
  }

  public function employeeDashboard4(){
    $query = $this->db->query(" SELECT`issue_id` FROM `issue` order by issue_id desc limit 1");
      if($query->num_rows()){
          foreach ($query->result() as $row)
         {
            echo $row->issue_id;
         }
         
        }
  }

  // public function harvest(){

  //     $query = $this->db->query("SELECT name,category_name,stock_remain FROM stock WHERE stock_remain < 10");

  //     if($query->num_rows()){
  //         foreach ($query->result() as $row)
  //        {
  //           echo '<hr>' . $row->name .' '. $row->category_name  .' stock remain only ' . $row->stock_remain .'<br>';
  //        }
         
  //       }
  //     }

}


