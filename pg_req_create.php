<?php
include 'envl.php';
include 'instamojo.php';
$API_KEY = env('X-Auth-Token');
$AUTH_TOKEN = env('X-Api-Key');
$pay = new Instamojo\Instamojo($API_KEY, $AUTH_TOKEN);
function payment_init($purpose,$amount,$email,$handler){
    try {
         $response = $pay->paymentRequestCreate(array(
             "purpose" => $purpose ,
             "amount" => $amount ,
             "send_email" => true,
             "email" => $email ,
             "redirect_url" => $handler
             ));
            print_r($response);
        }
    catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
}
?>