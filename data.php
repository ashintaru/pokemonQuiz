<?php
$pokemon = '';
// require_once( 'vendor/lmerotta/phpokeapi/src/Client.php' );
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $pokemon = test_input(strtolower($_POST['name']));

}

$sampleArray = array(
    0 => "Geeks", 
    1 => "for", 
    2 => "Geeks", 
);

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(!empty($pokemon)){
  
    $curl = curl_init();
    $apiUrl = curl_init("https://courses.cs.washington.edu/courses/cse154/webservices/pokedex/pokedex.php?pokemon=$pokemon"); 
    curl_setopt($apiUrl,CURLOPT_RETURNTRANSFER,TRUE);
    // curl_setopt($curl, CURLOPT_HEADER, false);
    $apiResponsed = curl_exec($apiUrl);
    curl_close($apiUrl);

    $data = json_decode($apiResponsed);

    // print_r($data);
    
    if(empty($data->name) == true){
        $logo = "image/warning.png";
        $image = "image/warning.png";
        $atkLogo = "image/warning.png";
        $type = "";
        $atk = '';
        $atkType= "";        
        $description = $apiResponsed;
    }else{
      $description = $data->info->description;
      $imageURL= "https://courses.cs.washington.edu/courses/cse154/webservices/pokedex/sprites/";
      $extension = ".png";
      $type = $data->info->type;
      $image = $imageURL.$pokemon.$extension;
      $atk = $data->moves[0]->name;
      $atkType= $data->moves[0]->type;
      $atkLogo = "https://courses.cs.washington.edu/courses/cse154/webservices/pokedex/icons/".$atkType.".jpg" ;
      $logo =  "https://courses.cs.washington.edu/courses/cse154/webservices/pokedex/icons/".$type.".jpg";
    }    
}
?>