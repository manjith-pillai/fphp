<?php
namespace App\Http;
use DB;

Class TestApi

{

public function login()
	{
		$url = 'http://rm.dev.crm.foundlay.com/service/v4_1/rest.php'; 
		$curl = curl_init($url); 
		curl_setopt($curl, CURLOPT_POST, true); 
		curl_setopt($curl, CURLOPT_HEADER, false); 
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
		$parameters = 
			array(
				"user_auth" =>
				array(
					'user_name' => "admin",
					'password' => "10c4981bb793e1698a83aea43030a388",
					'version' => "7.7.9"
					),
				"application_name" => ''
				);
		$json = json_encode($parameters); 
		$postArgs = 'method=login&input_type=json&response_type=json&rest_data=' . $json; 
		//echo "postArgs=$postArgs\n";
		curl_setopt($curl, CURLOPT_POSTFIELDS, $postArgs); 
		$response = curl_exec($curl); 
		$result = json_decode($response); 
		if(!is_object($result)) { die("Connection error\n"); } 
		$sessionid = $result->id;
		$userid=$result->name_value_list->user_id->value;
		return [$userid, $sessionid,$curl];
	}
				
	
	// Create Account
	public function CreateUser($id)
	{
		list($userid,$sessionid,$curl) = $this->login();
		$query = DB::select('select name from agents where id = ?',[$id]);
		$name = $query[0]->name;
		//$number = (string)$query[0]->number;
		$parameters = array(
			'session' => $sessionid,
			'module_name' => 'Users',
			'name_value_list' => array(
				array('name' => 'assigned_user_id', 'value' => $userid), 
				array('name' => 'user_name', 'value' => strtolower($name)),
				array('name' => 'first_name', 'value' => $name), 
				array('name' => 'phone', 'value' => '123456789')
				)
			);
		$json = json_encode($parameters); 
		$postArgs = 'method=set_entry&input_type=json&response_type=json&rest_data=' . $json; 
		//echo "postArgs=$postArgs\n";
		curl_setopt($curl, CURLOPT_POSTFIELDS, $postArgs); 
		$response = curl_exec($curl); 
		$result = json_decode($response); 
		//print_r("Results");
		//print_r($result);
		curl_close($curl);  
	}
	
	public function CreateContact($id)
	{
		list($userid,$sessionid,$curl) = $this->login();
		$query = DB::select('select name from users where id = ?',[$id]);
		$name = $query[0]->name;
		//$number = (string)$query[0]->number;
		$parameters = array(
			'session' => $sessionid,
			'module_name' => 'Contacts',
			'name_value_list' => array(
				array('name' => 'assigned_user_id', 'value' => $userid), 
				array('name' => 'first_name', 'value' => $name), 
				array('name' => 'phone', 'value' => '123456789')
				)
			);
		$json = json_encode($parameters); 
		$postArgs = 'method=set_entry&input_type=json&response_type=json&rest_data=' . $json; 
		//echo "postArgs=$postArgs\n";
		curl_setopt($curl, CURLOPT_POSTFIELDS, $postArgs); 
		$response = curl_exec($curl); 
		$result = json_decode($response); 
		curl_close($curl);  
	}
}