<?php
class HotelsController  
{
	public static function add(){
		$diagnoArray[0] = 'NO_ERRORS';
		$validate = new \Validate();
		$prfx = 'hotel-';
		foreach($_POST as $index=>$val){
			$ar = explode($prfx,$index);
			if(count($ar)){
				$_EDIT[end($ar)] = $val;
			}
		}
		$validation = $validate->check($_EDIT, array(
			'name' => array(
				'name' => 'Hotel name',
				'string' => true,
				'required' => true
			),
			'email' => array(
				'name' => 'Hotel email',
				'required' => true
			),
			'telephone' => array(
				'name' => 'Hotel Telephone',
				'required' => true
			),
			'distance' => array(
				'name' => 'Hotel Distance',
				'required' => true
			)
		));
		
		if($validation->passed()){
			$participantCategTable = new \Hotels();
			
			$str = new \Str();
			$name = $str->sanAsName($_EDIT['name']);
			// $prefix = strtoupper($_EDIT['prefix']);
			// $url = $_EDIT['url'];
			$email = $_EDIT['email'];
			$telephone = $_EDIT['telephone'];
			$distance = $_EDIT['distance'];
			
			$seconds = \Config::get('time/seconds');

			// upload pictre
				$upload_pathe = "data_user/hotels/".$name."-";
				$upload_pathe = $upload_pathe . basename(strtolower($_FILES["hotel-photo"]["name"]));
				move_uploaded_file($_FILES["hotel-photo"]["tmp_name"], $upload_pathe);
				$photo = $name."-".strtolower($_FILES["hotel-photo"]["name"]);
			// End upload pictre


			if($diagnoArray[0] == 'NO_ERRORS'){
				try{
					$participantCategTable->insert(array(
						'name' => $name,
						'photo' => $photo,
						'email' => $email,
						'telephone' => $telephone,
						'distance' => $distance
					));
					


				}catch(Exeption $e){
					$diagnoArray[0] = "ERRORS_FOUND";
					$diagnoArray[] = $e->getMessage();
				}
			}


		}else{
			$diagnoArray[0] = 'ERRORS_FOUND';
			$error_msg = ul_array($validation->errors());
		}
		if($diagnoArray[0] == 'ERRORS_FOUND'){
			return (object)[
				'ERRORS'=>true,
				'ERRORS_SCRIPT' => $validate->getErrorLocation()
			];
		}else{
			return (object)[
				'ERRORS'=>false,
				'SUCCESS'=>true,
				'ERRORS_SCRIPT' => ""
			];
		}
	}
}
?>