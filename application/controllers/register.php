<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

public function __construct()
    {
        parent::__construct();
		$this->load->model('news_register');
        $this->load->helper(array('form', 'url','inflector'));
        $this->load->library('form_validation');
        $this->load->library('pagination');
    }

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');        
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[passconf]|md5');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required');
		$this->form_validation->set_rules('age', 'Age', 'trim|required|is_natural|xss_clean');
		$this->form_validation->set_rules('gender','Gender','required');
        $this->form_validation->set_rules('pin', 'Pin', 'trim|required|min_length[6]|max_length[12]|xss_clean');
        if ($this->input->post('submit'))
        {
            if ($this->form_validation->run() == FALSE)
        {
			$this->load->view('header');
			$this->load->view('register');
			$this->load->view('sidebar');
			$this->load->view('footer');  
        }else{
				$a = $this->input->post('username');
				$letter = $a['0'];
				if (preg_match("/[aA-dD0-9]/", $letter)) 
				{
				$table = "idtable1";
				}
				else if(preg_match("/[eE-iI]/", $letter)) 
				{
				$table = "idtable2";
				}
				else if(preg_match("/[eJ-nN]/", $letter)) 
				{
				$table = "idtable3";
				}
				else if(preg_match("/[oO-rR]/", $letter)) 
				{
				$table = "idtable4";
				}
				else if(preg_match("/[sS-zZ]/", $letter)) 
				{
				$table = "idtable5";
				}
				else
				{
				$table = "idtable5";
				}
             $data = array(  
                    'id' => $this->input->post('username'),
					'passwd' => $this->input->post('password'),
                    'reg_date' => "",
					'userLevel' => "99",
					'char_name' => "",
					'gameserver_burnho' => "",	
					'serverenter_time' => "",	
					'enter_ip' 	=> "",
					'record_lock' 	=> "",
					'lock_time' 	=> "",
					'web_block' 	=> "",
					'game_block' 	=> "",
					'delete_flag' => "",	
					'delete_date' => "",	
					'pay_flag' 	=> "",
					'update_date' 	=> "",
					'nick_name' 	=> "",
					'birthday' 	=> $this->input->post('birthday'),
					'email'=> $this->input->post('email'),
					'trueId' 	=> "",
					'sex' 	=> $this->input->post('gender'),
					'age' 	=> $this->input->post('age'),
					'point'=> "",
                    );

            $this->news_register->insert_data($data,$table);
            redirect('register');
        }
        }else{
            $this->load->view('header');
			$this->load->view('register');
			$this->load->view('sidebar');
			$this->load->view('footer');  
        }
         
	}
	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */