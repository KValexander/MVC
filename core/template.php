<?php
	// The code of this class is not mine
 	class Template
 	{
 		protected $values = array();
 		public $html;

 		function get_tpl($tpl_name=null){
        	if(empty($tpl_name) || !file_exists($tpl_name)){
        		$this->html = "No text to the user";
        		return false;
        	}
        	else
        	{
         		$this->html = join("",file($tpl_name));
        	}
 		}

 		function set_value($key, $var){
        	$key = "{" . $key . "}";
         	$this->values[$key] = $var;
 		}

 		function tpl_parse(){
        	foreach($this->values as $find => $replace){
          		$this->html = str_replace($find, $replace, $this->html);
        	}
 		}
 	}
?>