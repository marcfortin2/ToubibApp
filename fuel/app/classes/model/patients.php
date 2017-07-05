<?php
namespace Model;


class Patients{
	
	public static function get_patients()
	{
		$rows = array();

		$query = \DB::select()->from('patients')->execute();


    	foreach($query as $row){

			/*$row['id'] = $row['id'];
			$row['username'] = $row['username'];
			$row['password'] = $row['password'];
			$row['nam'] = $row['nam'];
			$row['prenom'] = $row['prenom'];
			$row['nom'] = $row['nom'];
			$row['adresse'] = $row['adresse'];
			$row['ville'] = $row['ville'];
			$row['postal'] = $row['postal'];
			$row['pays'] = $row['pays'];
			$row['telephone'] = $row['telephone'];
			$row['cellulaire'] = $row['cellulaire'];
			$row['date_naissance'] = $row['date_naissance'];
			$row['num_clinique'] = $row['num_clinique'];*/

			if(\Auth::get('id') == $row['id'])
			{
				//$rows['id'] = $row['id'];
				//$rows['username'] = $row['username'];
				//$rows['password'] = $row['password'];
				$rows['nam'] = strtoupper($row['nam']);
				$rows['prenom'] = ucfirst($row['prenom']);
				$rows['nom'] = ucfirst($row['nom']);
				$rows['adresse'] = $row['adresse'];
				$rows['ville'] = ucfirst($row['ville']);
				$rows['province'] = strtoupper($row['province']);
				$rows['postal'] = strtoupper($row['postal']);
				$rows['pays'] = ucfirst($row['pays']);
				$rows['telephone'] = "(".substr($row['telephone'],0,3).") ".substr($row['telephone'],3,3)."-".substr($row['telephone'],6);
				$rows['cellulaire'] = "(".substr($row['cellulaire'],0,3).") ".substr($row['cellulaire'],3,3)."-".substr($row['cellulaire'],6);
				$rows['date_naissance'] = $row['date_naissance'];
				$rows['num_clinique'] = $row['num_clinique'];
				$rows['email'] = $row['email'];

				//array_push($rows_all, $rows);
				
				break;
			}
	    }
		return $rows;
	}

	public static function all_patients()
	{
		//$all_rows = array();

		$result = \DB::select('prenom', 'nom')->from('patients')->execute();

		$all_rows = $result->as_array();
		$num_rows = count($all_rows);

		for($i = 0; $i < $num_rows; $i++){

				echo implode(" ", $all_rows[$i])."<br>";
				//print_r($all_rows[$i]);
				//echo "<br>";
		}

		//return $all_rows;
	}

	public static function check_usercode(){

		$usercode = $_POST['usercode'];

		$result = \DB::select('usercode')->from('patients')->execute();

		foreach($result as $row){

			if($usercode == $row['usercode']){

				echo'Usercode already exist';
				
				return null;
			}
		}
		return $usercode;
	}

	public static function insert_usercode() {

		$usercode[] = $_POST['usercode'];
		
		$query = \DB::insert('patients');
		$query->columns(array('usercode'));
		$query->values($usercode)->execute();

		return $usercode;
	}
}