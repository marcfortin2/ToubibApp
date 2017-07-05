<?php
use \Model\Patients;
namespace Model;

class Cliniques{

	public static function get_cliniques(){

		$rows = array();

		$query = \DB::select()->from('cliniques')->execute();

		foreach($query as $c_row){

			$patients = Patients::get_patients();

			if($patients['num_clinique'] == $c_row['id']){

				$rows['nom'] = ucfirst($c_row['nom']);
				$rows['adresse'] = $c_row['adresse'];
				$rows['ville'] = ucfirst($c_row['ville']);
				$rows['province'] = strtoupper($c_row['province']);
				$rows['pays'] = ucfirst($c_row['pays']);
				$rows['postal'] = strtoupper($c_row['postal']);
				$rows['telephone'] = "(".substr($c_row['telephone'],0,3).") ".substr($c_row['telephone'],3,3)."-".substr($c_row['telephone'],6);
				$rows['fax'] = "(".substr($c_row['fax'],0,3).") ".substr($c_row['fax'],3,3)."-".substr($c_row['fax'],6);

				break;

			}
		}
		return $rows;
	}

	public static function get_allCliniques(){

		$rows = array();

		$result = \DB::select()->from('cliniques')->execute();

		$all_rows = $result->as_array();
		$num_rows = count($all_rows);

		for($i = 0; $i < $num_rows; $i++){

			echo implode(" ", $all_rows[$i])."<br>";
		}
		
	}

	public static function get_cliniquePatients(){

		$rows = array();

		$result = \DB::select('nom')->from('cliniques')->join('patients', 'LEFT')->on('clinques.id', '=', 'patients.num_clinique');

		//$patients = Patients::get_patients();

		foreach($result as $row){

			while($patients['num_clinique'] == $row['id']){

				$rows['nom'] = $patients['nom'];
				$rows['prenom'] = $patients['prenom'];
				$rows['cnom'] = $row['nom'];

			}
			break;
		}
		return $rows;
	}
}