<?php 

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "xdi-portal";

// $mysqli = new mysqli($servername,$username,$password,$dbname);

$loadfile="Gl_Records.csv";

$i=0;
$path= $loadfile;
$linesCount = file($path, FILE_SKIP_EMPTY_LINES);

$rh = fopen($path, 'rb');        
if($rh===false) {
	return true;
}

while (($data=fgetcsv($rh,10000,',')) !== false) {
	if($data[0] != ""){
		// $checkMatchedPartners = $mysqli->query('SELECT * FROM  xdi_engagement_matched_partners WHERE emp_excel_name = "'.trim($data[0]).'" AND emp_status = 0');
		// if($checkMatchedPartners->num_rows > 0) {
			// foreach($checkMatchedPartners as $matchedVal){
				// $mysqli->query("UPDATE xdi_engagement_matched_partners SET emp_status = 1 WHERE emp_id ='".$matchedVal['emp_id']."' ");
			// }
		// }
		// else{
			// echo $data[0].'<br/>';
		// }
		echo $data[0].'<br/>';
		$i++;
		if(count($linesCount) == $i){
			echo "Upload completed.";
		}
	}
}
fclose($rh);

// $a = 'How are you?';

// if (strpos($a, 'are') !== false) {
    // echo 'true';
// }

?>