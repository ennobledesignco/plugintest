<?php 

namespace LatePoint\Cerber;

class Router{

  public static function init(){
    
  }

  public static function init_addon(){
    
  }

  public static function add_endpoint(){
    
  }

  public static function conditional_bite($request){
    $response = 'Nothing';
    wp_send_json($response, 200);
  }

  public static function double_check(){
    return true;
  }


	public static function curl_post_setup($path, $payload){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, \OsSettingsHelper::get_remote_url($path));
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ['payload' => base64_encode(json_encode($payload))]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		// For local debug
		// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
		// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

		return $ch;
	}

  public static function trace($plugin_name, $plugin_version){
    
  }

  public static function smell(){
    
  }

  public static function release(){
    
  }

  public static function bite_action($action, $func){
      add_action($action, $func);
  }

  public static function chew($val){
    return base64_decode($val);
  }

  public static function bite(){
    echo '';
  }
}