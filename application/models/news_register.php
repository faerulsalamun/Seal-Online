<?php
class News_register extends CI_Model {

    public function __construct()
    {   
		$db1 = $this->load->database('register', TRUE);
		$db2 = $this->load->database('login', TRUE); 
		$db3 = $this->load->database('admin', TRUE); 
    }

 
     function insert_data($data,$table)
    {
		$db1 = $this->load->database('register', TRUE);
		$pass = $data['passwd'];
        $query = $db1->query("insert into ".$table." (id,passwd,reg_date,userLevel,char_name,gameserver_burnho,serverenter_time,enter_ip,record_lock,lock_time,web_block,game_block,delete_flag,delete_date,pay_flag,update_date,nick_name,birthday,email,trueId,sex,age,point) 
		values('".$data['id']."',old_password('$pass'),'','99','','','','','','',null,null,'',null,'','','','".$data['birthday']."','".$data['email']."','','".$data['sex']."','".$data['age']."','')"); 
        return $query;
    }
	
	function cek_username($data,$table)
	{		
			$db1 = $this->load->database('register', TRUE);
			$username = $data['id'];
			$pass = $data['passwd'];
			$q = $db1->query("select * from ".$table." where id='$username' ");
			if($q->num_rows() > 0)
			return false;
			else
			return true;	
	}
	
	function rank_user($num, $offset)
	{        
			 $db2 = $this->load->database('login', TRUE);
			 $db2->order_by('level','desc');
		     $db2->limit(15);	 
             $query = $db2->get('pc',$num, $offset);
             return $query;    			
	}
	
	function news()
	{        
			 $db3 = $this->load->database('admin', TRUE);
			 $db3->order_by('NewsId','desc');
			 $db3->limit(2);
             $query = $db3->get('Game_News');
             return $query;   	 
	}
  
} 