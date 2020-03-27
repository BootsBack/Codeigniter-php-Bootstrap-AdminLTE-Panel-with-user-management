<?php 

class Auto_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function update_db(){
		$tables = ['company','groups','stores','users','user_group'];
		foreach($tables as $t){
			$this->db->truncate($t);
			$this->data_insert($t);
		}
	}
	public function import_database() {
		$temp_line = '';
		$lines = file('./db-123abcd.sql'); 
		foreach ($lines as $line)
		{
			if (substr($line, 0, 2) == '--' || $line == '' || substr($line, 0, 1) == '#')
				continue;
			$temp_line .= $line;
			if (substr(trim($line), -1, 1) == ';')
			{
				$this->db->query($temp_line);
				$temp_line = '';
			}
		}
	}

}