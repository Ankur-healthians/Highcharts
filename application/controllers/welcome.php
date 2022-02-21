<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $this->load->model('usermodel');
        $chart_data = $this->usermodel->chartshow();
        $temp = [];
    
        foreach($chart_data as $key => $val) {
          array_push($temp, [0=>$val['age'],1=> (int)$val['people_count']]);
        }
    
        echo "<pre>";
        // print_r($chartcntroller);
        // die;
        $data['chart_data'] = $temp;
		$this->load->view('welcome_message',$data);
	}
    public function charts(){
     
      }
}
    
    
  
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */