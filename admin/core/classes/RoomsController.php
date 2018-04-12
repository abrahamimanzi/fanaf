<?php
class RoomsController  
{
	public static function add(){
		$diagnoArray[0] = 'NO_ERRORS';
		$validate = new \Validate();
		$prfx = 'room-';
		foreach($_POST as $index=>$val){
			$ar = explode($prfx,$index);
			if(count($ar)){
				$_EDIT[end($ar)] = $val;
			}
		}
		$validation = $validate->check($_EDIT, array(
			'name' => array(
				'name' => 'Room name',
				'string' => true,
				'required' => true
			),
			'price' => array(
				'name' => 'Room price',
				'required' => true
			),
			'available' => array(
				'name' => 'Room available',
				'required' => true
			),
			'status' => array(
				'name' => 'Room Status',
				'required' => true
			)
		));
		
		if($validation->passed()){
			$participantCategTable = new \Rooms();
			
			$str = new \Str();
			$name = $str->sanAsName($_EDIT['name']);
			// $prefix = strtoupper($_EDIT['prefix']);
			// $url = $_EDIT['url'];
			$hotelID = $_EDIT['hotelID'];
			$price = $_EDIT['price'];
			$available = $_EDIT['available'];
			$status = $_EDIT['status'];
			
			$seconds = \Config::get('time/seconds');

			if($diagnoArray[0] == 'NO_ERRORS'){
				try{
					$participantCategTable->insert(array(
						'name' => $name,
						'hotel_ID' => $hotelID,
						'price' => $price,
						'available' => $available,
						'status' => $status
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