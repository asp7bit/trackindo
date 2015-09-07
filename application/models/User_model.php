<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

    // table name
    private $tbl_outlet= 'outlets';
 
    public function __construct()
    {
        parent::__construct();
    }
    
    // get number of outlets in database
    function count_all(){
        return $this->db->count_all($this->tbl_outlet);
    }

    // get outlets with paging
    function get_paged_list($limit = 10, $offset = 0){
        $this->db->order_by('id','asc');
        return $this->db->get($this->tbl_outlet, $limit, $offset);
    }
    
}

?>
