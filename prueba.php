<?php

$url = 'https://api.sendgrid.com/';
$user = 'dylasx';
$pass = 'dylas123';

$json_string = array(

  'to' => array(
    'dylasx1@gmail.com', 'alexiscalderon123@hotmail.com'
  ),
  'category' => 'test_category'
);


$params = array(
    'api_user'  => $user,
    'api_key'   => $pass,
    'x-smtpapi' => json_encode($json_string),
    'to'        => 'example3@sendgrid.com',
    'subject'   => 'Prueba Mailer PQRS',
    'html'      => 'Esto es una prueba de mailer para PQRS',
    'text'      => 'Esto es una prueba de mailer PQRS',
    'from'      => 'municipio@ingeniaserPQRS.com',
  );


$request =  $url.'api/mail.send.json';

// Generate curl request
$session = curl_init($request);
// Tell curl to use HTTP POST
curl_setopt ($session, CURLOPT_POST, true);
// Tell curl that this is the body of the POST
curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
// Tell curl not to return headers, but do return the response
curl_setopt($session, CURLOPT_HEADER, false);
// Tell PHP not to use SSLv3 (instead opting for TLS)
curl_setopt($session, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

// obtain response
$response = curl_exec($session);
curl_close($session);

// print everything out
print_r($response);

?>
