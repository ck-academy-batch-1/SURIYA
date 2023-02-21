<?php
// Define the villages for each district in Tamil Nadu
$villages = array(
	'Tiruvallur' => array('Ambattur', 'Gummindipoondi', 'Ponneri', 'Uthukkottai', 'Tiruvallur','Poonamallee','Tiruttani','Pallipattu','Madhavaram','Maduravoyal','Thiruvottiyur','Avadi'),
	'Tiruvannamalai' => array('Tiruvannamalai', 'Polur', 'Chengam', 'Cheyyar', 'Arni', 'Vandavasi', 'Thandrampet','Kalasapakkam','Chetpet','Vembakkam','Kilpennathur','Jamunamarathur')
);

// Get the selected district from the POST data
$district = $_POST['district'];

// If the district exists in the array, return its corresponding list of villages
if (array_key_exists($district, $villages)) {
	echo json_encode($villages[$district]);
} else {
	echo json_encode(array());
}
?>
