<?php
App::uses('AppModel', 'Model');
/**
 * HashResult Model
 *
 */
class HashResult extends AppModel {

	public $belongsTo = array(
		'HashTest' => array(
			'className' => 'HashTest',
			'foreignKey' => 'hash_test_id'
		)
	);

/**
 * Saving hash result with its description
 * @param array $data contains array('HashResult' => array('fields' => ), 'Description' => array())
 * @return boolean true when save correctly. False otherwise.
 */
	public function saveWithDescription($data) {
		$descriptionModel = ClassRegistry::init('Description');
		$analysis = $data[0]['HashResult']['description'];
		$saveDescriptionSuccessful = $descriptionModel->saveAnalysis($analysis);
		if($saveDescriptionSuccessful) {
			$descriptionId = $descriptionModel->getLastInsertID();
			foreach($data as $key => $result) {
				$data[$key]['HashResult']['description_id'] = $descriptionId;
			}
			$this->create();
			$this->saveMany($data);
		}
		return true; 
	}


/**
 * Saving hash result with its description
 * @param array data contains HashResult 
 * @param String analysis is a string value of the actual analysis
 * @return boolean true when save correctly. False otherwise.
 */
	public function savingWithDescription($data, $analysis) {
		$saveDescriptionSuccessful = $this->Description->saveAnalysis($analysis);
		if($saveDescriptionSuccessful) {
			$descriptionId = $this->Description->getLastInsertID();
			foreach($data as $key => $result) {
				$data[$key]['HashResult']['description_id'] = $descriptionId;
			}
			$this->create();
			$this->saveMany($data);
		}
		return true; 
	}

	public function writeFile($output,$choice) {
		$this->log($output);
		$saveResult = '';

		$ptline1 = explode("\n",$output[0]['HashResult']['plaintext']);
		$this->log(count($ptline1));

		foreach($output as $key => $hashResult) {

			$saveResult .= 'Selected Algorithm:' . "\n";
			$saveResult .= $hashResult['HashResult']['hash_algorithm_name'] . "\n";
			$saveResult .= 'Plaintext: Message Digest' . "\n";

			if(count($ptline1) == 1) {
				$this->log('HEHEE');
				$saveResult .= $hashResult['HashResult']['plaintext'] . ': ' 
				. $hashResult['HashResult']['message_digest'] . "\n" . "\n";
			
			}else{

				$ptline = explode("\n",$hashResult['HashResult']['plaintext']);
				$mdline = explode("\n",$hashResult['HashResult']['message_digest']);
				array_pop($mdline);
				array_pop($ptline);
					foreach ($ptline as $key => $data) {
					$saveResult .= $ptline[$key] . ': ' . $mdline[$key] . "\n";
					}
				$saveResult .= "\n";	
			}
		}

		if($choice == 2) {
			$saveResult .= 'Analysis:' . "\n";
			$saveResult .= $output[0]['HashResult']['description'] . "\n";
			if(($output[0]['HashResult']['collision_count']) > 1) {
				$collision_pt = explode("\n", $output[0]['HashResult']['collision_pt']);
				$collision_md = explode("\n", $output[0]['HashResult']['collision_md']);
				$collision_index = explode(" ", $output[0]['HashResult']['collision_index']);
		
				$saveResult .= 'Plaintext: ' . $output[0]['HashResult']['hash_algorithm_name'] .
				' Message Digest: File Line' . "\n";
				
				foreach($collision_pt as $key => $data) {
					$collision_index[$key] = $collision_index[$key] + 1;
					$saveResult .= $collision_pt[$key] . ": " . $collision_md[$key] .
					": " . $collision_index[$key] . "\n";
				}
			}

			$saveResult .= "\n";
			$saveResult .= 'Comparing between selected algorithmn:' . "\n";

			$count = 0;
			foreach($output as $key => $data) {
				if($count<1) {
				$saveResult .= 'Algorithm                     ';
				}
				$count++;
				$saveResult .= ': ' . $data['HashResult']['hash_algorithm_name'];
			}
			$saveResult .= "\n";

			$count = 0;
			foreach($output as $key => $data) {
				if($count<1) {
				$saveResult .= 'Output Length(bits)           ';
				}
				$count++;
				$saveResult .= ': ' . $data['HashResult']['output_length'];
			}
			$saveResult .= "\n";

			$count = 0;
			foreach($output as $key => $data) {
				if($count<1) {
				$saveResult .= 'Speed(MB/s)                   ';
				}
				$count++;
				$saveResult .= ': ' . $data['HashResult']['speed'];
			}
			$saveResult .= "\n";

			$count = 0;
			foreach($output as $key => $data) {
				if($count<1) {
				$saveResult .= 'Collision Resistence          ';
				}
				$count++;
				$saveResult .= ': ' . $data['HashResult']['collision_resistance'];
			}
			$saveResult .= "\n";

			$count = 0;
			foreach($output as $key => $data) {
				if($count<1) {
				$saveResult .= 'Preimage Resistence           ';
				}
				$count++;
				$saveResult .= ': ' . $data['HashResult']['preimage_resistance'];
			}
			$saveResult .= "\n";

			$count = 0;
			foreach($output as $key => $data) {
				if($count<1) {
				$saveResult .= '2nd Preimage Resistence       ';
				}
				$count++;
				$saveResult .= ': ' . $data['HashResult']['2nd_preimage_resistance'];
			}
			$saveResult .= "\n";

			$count = 0;
			foreach($output as $key => $data) {
				if($count<1) {
				$saveResult .= 'Collision Best Known Attack   ';
				}
				$count++;
				$saveResult .= ': ' . $data['HashResult']['collision_bka'];
			}
			$saveResult .= "\n";

			$count = 0;
			foreach($output as $key => $data) {
				if($count<1) {
				$saveResult .= 'Preimage Best Known Attack    ';
				}
				$count++;
				$saveResult .= ': ' . $data['HashResult']['preimage_bka'];
			}
			$saveResult .= "\n";

			$count = 0;
			foreach($output as $key => $data) {
				if($count<1) {
				$saveResult .= '2nd Preimage Best Known Attack';
				}
				$count++;
				$saveResult .= ': ' . $data['HashResult']['2nd_preimage_bka'];
			}
			$saveResult .= "\n" . "\n";

			$saveResult .= 'Recommended Hash Function:' . "\n";

			$last = end($output);
			$saveResult .= $last['HashResult']['recommendation'];
		}

		$fp = fopen('hashresult.txt','w');
		fwrite($fp,$saveResult);
		fclose($fp);
	}

}