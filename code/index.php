<?php

require_once ('../vendor/autoload.php');
require_once ('../.env/constants.php');
//GET
$client= new \Google\Client();
$client->setAuthConfig('../.env/googleAuth.json');
$client->addScope( SCOPE );
$service = new Google_Service_Sheets( $client );
$advertisement = $service->spreadsheets_values->get(TABLE_ID,RANGE)->getValues();

//SET
if ($_POST['email'] && $_POST['category'] && $_POST['head'] && $_POST['info'])
{
$data=[$_POST['email'], $_POST['head'] , $_POST['info'],$_POST['category']];
    $valueRange = new \Google_Service_Sheets_ValueRange();
    $valueRange->setValues([$data]);
    $options = ['valueInputOption' => 'USER_ENTERED'];
    $service->spreadsheets_values->append(TABLE_ID, RANGE,$valueRange,$options );
    Header('Location: '.$_SERVER['PHP_SELF']);
}
require_once('hello.php');
?>


