<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Atri{
   private $CI;
   			
		public function __construct()
		  {
			   
			   $this->secret_key = 'Brij-Mohan-Atri';
			   $this->secret_iv = 'www.xlw.in';
			   $this->CI =& get_instance();
       		   $this->CI->load->database();

		  }
	
	public function en($string){
		$output = false;
		$en_method = "AES-256-CBC";
		$secret_key = $this->secret_key;
		$secret_iv = $this->secret_iv;
		
		$key = hash('sha256', $secret_key);
		$iv = substr(hash('sha256', $secret_iv), 0, 16);
		
			$output = openssl_encrypt($string, $en_method, $key, 0, $iv);
			$output = base64_encode($output);
		
		return $output;
		
	}
	public function de($string){
		$output = false;
		$en_method = "AES-256-CBC";
		$secret_key = $this->secret_key;
		$secret_iv = $this->secret_iv;
		
		$key = hash('sha256', $secret_key);
		$iv = substr(hash('sha256', $secret_iv), 0, 16);
		
			$output = openssl_decrypt(base64_decode($string), $en_method, $key, 0, $iv);
		
		return $output;
		
	}
	public function output($data){
	
		header('Content-type: application/json');
		return json_encode($data , JSON_PRETTY_PRINT);
	}
	public function output_json($data){
	
		header('Content-type: application/json');
		return json_encode($data , JSON_PRETTY_PRINT);
	}
	
		
	public	function curl($url){
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
			$data = curl_exec($ch);
			curl_close($ch);
			return $data;
		}
	
	public function cDate($date){
		return $re = date('d-M-Y', strtotime($date));
	}
	public function cTime($date){
		return $re = date('h:i a', strtotime($date));
	}
	public function cTn($date){
	return $re = date('d-M-Y h:i a', strtotime($date));
	}
	
	
}
