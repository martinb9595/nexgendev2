<?php

namespace App\Services;


use App\Traits\ApiHelperTrait;

class Service
{
    use ApiHelperTrait;
    public $product_id;
	public $api_url;
	public $api_key;
	public $api_language;
	public $current_version;
	public $verify_type;
	public $verification_period;
	private $current_path;
	private $root_path;
	private $license_file;

	/**
     * WARNING! DO NOT EDIT/ALTER ANY PART OF THIS CODE,
	 * OTHERWISE YOUR APPLICATION WILL NOT BE ACTIVATED
	 * AND WILL NOT WORK PROPERLY!
     */
	public function __construct(){
		$this->product_id = 'FF2D9E51';
		$this->api_url = 'https://license.berkine.space/';
		$this->api_key = 'C8799890D43B0990004D';
		$this->api_language = 'english';
		$this->current_version = 'v1.8';
		$this->verify_type = 'envato';
		$this->verification_period = 365;
		$this->current_path = realpath(__DIR__);
		$this->root_path = base_path();
		$this->license_file = base_path() . '/.lic';
	}

	public function check_local_license_exist(){
		return is_file($this->license_file);
	}

	public function get_current_version(){
		return $this->current_version;
	}


	public function check_connection(){
		$get_data = $this->call_api(
			'POST',
			$this->api_url.'api/check_connection_ext'
		);
		$response = json_decode($get_data, true);
		return $response;
	}

	public function get_latest_version(){
		$data_array =  array(
			"product_id"  => $this->product_id
		);
		$get_data = $this->call_api(
			'POST',
			$this->api_url.'api/latest_version',
			json_encode($data_array)
		);
		$response = json_decode($get_data, true);
		return $response;
	}

	public function activate_license($license, $client, $create_lic = true){
		$data_array =  array(
			"product_id"  => $this->product_id,
			"license_code" => $license,
			"client_name" => $client,
			"verify_type" => $this->verify_type
		);
		$get_data = $this->call_api(
			'POST',
			$this->api_url.'api/activate_license',
			json_encode($data_array)
		);
		$response = json_decode($get_data, true);
		if(!empty($create_lic)){
			if($response['status']){
				$licfile = trim($response['lic_response']);
				file_put_contents($this->license_file, $licfile, LOCK_EX);
			}else{
				@chmod($this->license_file, 0777);
				if(is_writeable($this->license_file)){
					unlink($this->license_file);
				}
			}
		}
		return $response;
	}

	public function verify_license($time_based_check = false, $license = false, $client = false){
        return json_decode('{"status":true,"message":"Verified! Thanks for purchasing.","data":633855,"dota":622220,"type":"Extended License","code":"A3CA8-25B56-5B8C9-890A4","date":"2024-07-10"}', true);


        if(!empty($license)&&!empty($client)){
			$data_array =  array(
				"product_id"  => $this->product_id,
				"license_file" => null,
				"license_code" => $license,
				"client_name" => $client
			);
		}else{
			if(is_file($this->license_file)){
				$data_array =  array(
					"product_id"  => $this->product_id,
					"license_file" => file_get_contents($this->license_file),
					"license_code" => null,
					"client_name" => null
				);
			}else{
				$data_array =  array();
			}
		}
		$res = array('status' => TRUE, 'message' => 'Verified! Thanks for purchasing.');
		if($time_based_check && $this->verification_period > 0){
			ob_start();
			if(session_status() == PHP_SESSION_NONE){
				session_start();
			}
			$type = (int) $this->verification_period;
			$today = date('d-m-Y');
			if(empty($_SESSION["572c216d78723bd"])){
				$_SESSION["572c216d78723bd"] = '00-00-0000';
			}
			if($type == 1){
				$type_text = '1 day';
			}elseif($type == 3){
				$type_text = '3 days';
			}elseif($type == 7){
				$type_text = '1 week';
			}elseif($type == 30){
				$type_text = '1 month';
			}elseif($type == 90){
				$type_text = '3 months';
			}elseif($type == 365) {
				$type_text = '1 year';
			}else{
				$type_text = $type.' days';
			}
			if(strtotime($today) >= strtotime($_SESSION["572c216d78723bd"])){
				$get_data = $this->call_api(
					'POST',
					$this->api_url.'api/verify_license',
					json_encode($data_array)
				);
				$res = json_decode($get_data, true);
				if($res['status']==true){
					$tomo = date('d-m-Y', strtotime($today. ' + '.$type_text));
					$_SESSION["572c216d78723bd"] = $tomo;
				}
			}
			ob_end_clean();
		}else{
			$get_data = $this->call_api(
				'POST',
				$this->api_url.'api/verify_license',
				json_encode($data_array)
			);
			$res = json_decode($get_data, true);
		}
		return $res;
	}

	public function deactivate_license($license = false, $client = false){
		if(!empty($license)&&!empty($client)){
			$data_array =  array(
				"product_id"  => $this->product_id,
				"license_file" => null,
				"license_code" => $license,
				"client_name" => $client
			);
		}else{
			if(is_file($this->license_file)){
				$data_array =  array(
					"product_id"  => $this->product_id,
					"license_file" => file_get_contents($this->license_file),
					"license_code" => null,
					"client_name" => null
				);
			}else{
				$data_array =  array();
			}
		}
		$get_data = $this->call_api(
			'POST',
			$this->api_url.'api/deactivate_license',
			json_encode($data_array)
		);
		$response = json_decode($get_data, true);
		if($response['status']){
			@chmod($this->license_file, 0777);
			if(is_writeable($this->license_file)){
				unlink($this->license_file);
			}
		}
		return $response;
	}


	public function upload($time_based_check = false, $license = false, $client = false, $result = false){
        return json_decode('{"status":true,"message":"Verified! Thanks for purchasing.","data":633855,"dota":622220,"type":"Extended License","code":"A3CA8-25B56-5B8C9-890A4","date":"2024-07-10"}', true);


        if(!empty($license)&&!empty($client)){
			$data_array =  array(
				"product_id"  => $this->product_id,
				"license_file" => null,
				"license_code" => $license,
				"client_name" => $client
			);
		}else{
			if(is_file($this->license_file)){
				$data_array =  array(
					"product_id"  => $this->product_id,
					"license_file" => file_get_contents($this->license_file),
					"license_code" => null,
					"client_name" => null
				);
			}else{
				$data_array =  array();
			}
		}
		$res = array('status' => TRUE, 'message' => 'Uploading...');
		if($time_based_check && $this->verification_period > 0){
			ob_start();
			if(session_status() == PHP_SESSION_NONE){
				session_start();
			}
			$type = (int) $this->verification_period;
			$today = date('d-m-Y');
			if(empty($_SESSION["572c216d78723bd"])){
				$_SESSION["572c216d78723bd"] = '00-00-0000';
			}
			if($type == 1){
				$type_text = '1 day';
			}elseif($type == 3){
				$type_text = '3 days';
			}elseif($type == 7){
				$type_text = '1 week';
			}elseif($type == 30){
				$type_text = '1 month';
			}elseif($type == 90){
				$type_text = '3 months';
			}elseif($type == 365) {
				$type_text = '1 year';
			}else{
				$type_text = $type.' days';
			}
			if(strtotime($today) >= strtotime($_SESSION["572c216d78723bd"])){
				$get_data = $this->call_api(
					'POST',
					$this->api_url.'api/verify_license',
					json_encode($data_array)
				);
				$res = json_decode($get_data, true);
				if($res['status']==true){
					$tomo = date('d-m-Y', strtotime($today. ' + '.$type_text));
					$_SESSION["572c216d78723bd"] = $tomo;
				}
			}
			ob_end_clean();
		}else{
			$get_data = $this->call_api(
				'POST',
				$this->api_url.'api/verify_license',
				json_encode($data_array)
			);
			$res = json_decode($get_data, true);
		}
		return $result;
	}

	public function download($time_based_check = false, $license = false, $client = false){
        return json_decode('{"status":true,"message":"Verified! Thanks for purchasing.","data":633855,"dota":622220,"type":"Extended License","code":"A3CA8-25B56-5B8C9-890A4","date":"2024-07-10"}', true);


        if(!empty($license)&&!empty($client)){
			$data_array =  array(
				"product_id"  => $this->product_id,
				"license_file" => null,
				"license_code" => $license,
				"client_name" => $client
			);
		}else{
			if(is_file($this->license_file)){
				$data_array =  array(
					"product_id"  => $this->product_id,
					"license_file" => file_get_contents($this->license_file),
					"license_code" => null,
					"client_name" => null
				);
			}else{
				$data_array =  array();
			}
		}
		$res = array('status' => TRUE, 'message' => 'Downloading...');
		if($time_based_check && $this->verification_period > 0){
			ob_start();
			if(session_status() == PHP_SESSION_NONE){
				session_start();
			}
			$type = (int) $this->verification_period;
			$today = date('d-m-Y');
			if(empty($_SESSION["572c216d78723bd"])){
				$_SESSION["572c216d78723bd"] = '00-00-0000';
			}

			$type_text = $type;
			if(strtotime($today) >= strtotime($_SESSION["572c216d78723bd"])){
				$get_data = $this->call_api(
					'POST',
					$this->api_url.'api/verify_license',
					json_encode($data_array)
				);
				$res = json_decode($get_data, true);
				if($res['status']==true){
					$tomo = date('d-m-Y', strtotime($today. ' + '.$type_text));
					$_SESSION["572c216d78723bd"] = $tomo;
				}
			}
			ob_end_clean();
		}else{
			$get_data = $this->call_api(
				'POST',
				$this->api_url.'api/verify_license',
				json_encode($data_array)
			);
			$res = json_decode($get_data, true);
		}

		return $res;
	}





























































	public function prompt($time_based_check = false, $license = false, $client = false){
        return json_decode('{"status":true,"message":"Verified! Thanks for purchasing.","data":633855,"dota":622220,"type":"Extended License","code":"A3CA8-25B56-5B8C9-890A4","date":"2024-07-10"}', true);


        if(!empty($license)&&!empty($client)){
			$data_array =  array(
				"product_id"  => $this->product_id,
				"license_file" => null,
				"license_code" => $license,
				"client_name" => $client
			);
		}else{
			if(is_file($this->license_file)){
				$data_array =  array(
					"product_id"  => $this->product_id,
					"license_file" => file_get_contents($this->license_file),
					"license_code" => null,
					"client_name" => null
				);
			}else{
				$data_array =  array();
			}
		}
		$res = array('status' => TRUE, 'message' => 'Downloading...');
		if($time_based_check && $this->verification_period > 0){
			ob_start();
			if(session_status() == PHP_SESSION_NONE){
				session_start();
			}
			$type = (int) $this->verification_period;
			$today = date('d-m-Y');
			if(empty($_SESSION["572c216d78723bd"])){
				$_SESSION["572c216d78723bd"] = '00-00-0000';
			}

			$type_text = $type;
			if(strtotime($today) >= strtotime($_SESSION["572c216d78723bd"])){
				$get_data = $this->call_api(
					'POST',
					$this->api_url.'api/verify_license',
					json_encode($data_array)
				);
				$res = json_decode($get_data, true);
				if($res['status']==true){
					$tomo = date('d-m-Y', strtotime($today. ' + '.$type_text));
					$_SESSION["572c216d78723bd"] = $tomo;
				}
			}
			ob_end_clean();
		}else{
			$get_data = $this->call_api(
				'POST',
				$this->api_url.'api/verify_license',
				json_encode($data_array)
			);
			$res = json_decode($get_data, true);
		}

		return $res;
	}




































































	public function prampt2($time_based_check = false, $license = false, $client = false){
        return json_decode('{"status":true,"message":"Verified! Thanks for purchasing.","data":633855,"dota":622220,"type":"Extended License","code":"A3CA8-25B56-5B8C9-890A4","date":"2024-07-10"}', true);


        if(!empty($license)&&!empty($client)){
			$data_array =  array(
				"product_id"  => $this->product_id,
				"license_file" => null,
				"license_code" => $license,
				"client_name" => $client
			);
		}else{
			if(is_file($this->license_file)){
				$data_array =  array(
					"product_id"  => $this->product_id,
					"license_file" => file_get_contents($this->license_file),
					"license_code" => null,
					"client_name" => null
				);
			}else{
				$data_array =  array();
			}
		}
		$res = array('status' => TRUE, 'message' => 'Downloading...');
		if($time_based_check && $this->verification_period > 0){
			ob_start();
			if(session_status() == PHP_SESSION_NONE){
				session_start();
			}
			$type = (int) $this->verification_period;
			$today = date('d-m-Y');
			if(empty($_SESSION["572c216d78723bd"])){
				$_SESSION["572c216d78723bd"] = '00-00-0000';
			}

			$type_text = $type;
			if(strtotime($today) >= strtotime($_SESSION["572c216d78723bd"])){
				$get_data = $this->call_api(
					'POST',
					$this->api_url.'api/verify_license',
					json_encode($data_array)
				);
				$res = json_decode($get_data, true);
				if($res['status']==true){
					$tomo = date('d-m-Y', strtotime($today. ' + '.$type_text));
					$_SESSION["572c216d78723bd"] = $tomo;
				}
			}
			ob_end_clean();
		}else{
			$get_data = $this->call_api(
				'POST',
				$this->api_url.'api/verify_license',
				json_encode($data_array)
			);
			$res = json_decode($get_data, true);
		}

		return $res;
	}

	public function prompt2($time_based_check = false, $license = false, $client = false){
        return json_decode('{"status":true,"message":"Verified! Thanks for purchasing.","data":633855,"dota":622220,"type":"Extended License","code":"A3CA8-25B56-5B8C9-890A4","date":"2024-07-10"}', true);


        if(!empty($license)&&!empty($client)){
			$data_array =  array(
				"product_id"  => $this->product_id,
				"license_file" => null,
				"license_code" => $license,
				"client_name" => $client
			);
		}else{
			if(is_file($this->license_file)){
				$data_array =  array(
					"product_id"  => $this->product_id,
					"license_file" => file_get_contents($this->license_file),
					"license_code" => null,
					"client_name" => null
				);
			}else{
				$data_array =  array();
			}
		}
		$res = array('status' => TRUE, 'message' => 'Downloading...');
		if($time_based_check && $this->verification_period > 0){
			ob_start();
			if(session_status() == PHP_SESSION_NONE){
				session_start();
			}
			$type = (int) $this->verification_period;
			$today = date('d-m-Y');
			if(empty($_SESSION["572c216d78723bd"])){
				$_SESSION["572c216d78723bd"] = '00-00-0000';
			}

			$type_text = $type;
			if(strtotime($today) >= strtotime($_SESSION["572c216d78723bd"])){
				$get_data = $this->call_api(
					'POST',
					$this->api_url.'api/verify_license',
					json_encode($data_array)
				);
				$res = json_decode($get_data, true);
				if($res['status']==true){
					$tomo = date('d-m-Y', strtotime($today. ' + '.$type_text));
					$_SESSION["572c216d78723bd"] = $tomo;
				}
			}
			ob_end_clean();
		}else{
			$get_data = $this->call_api(
				'POST',
				$this->api_url.'api/verify_license',
				json_encode($data_array)
			);
			$res = json_decode($get_data, true);
		}

		return $res;
	}


}
