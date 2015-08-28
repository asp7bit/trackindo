<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  private $limit = 10;

  public function __construct(){
    parent::__construct();
    
    // load helper
    $this->load->helper('url');

    // load_model
    $this->load->model('user_model','',TRUE);
  }

  function index($offset = 0){
    // offset
    $uri_segment = 3;
    $offset = $this->uri->segment($uri_segment);

    // load data
    $outlets = $this->user_model->get_paged_list($this->limit, $offset)->result();

    // generate pagination
    $this->load->library('pagination');
    $config['base_url'] = site_url('person/index/');
    $config['total_rows'] = $this->user_model->count_all();
    $config['per_page'] = $this->limit;
    $config['uri_segment'] = $uri_segment;
    $this->pagination->initialize($config);
    $data['pagination'] = $this->pagination->create_links();

    // generate table data
    $this->load->library('table');
    $this->table->set_empty("&nbsp;");
    $this->table->set_heading('No', 'Name', 'Email', 'Address');
    $i = 0 + $offset;
    foreach ($outlets as $outlet){
      $this->table->add_row(++$i, $outlet->name, $outlet->email, $outlet->address);
    }
    $data['table'] = $this->table->generate();

    // load view
    $this->load->view('home', $data);
  }
}
