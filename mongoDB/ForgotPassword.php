<?php
    // Textlocal account details
    $username = urlencode('youremail@address.com');
    $hash = urlencode('Your API hash'); // Get this when logged in at https://control.txtlocal.co.uk/docs/
    // Message details
    $numbers = urlencode(447123456789.",".447987654321);
    $sender = urlencode('Textlocal');
    $message = rawurlencode('This is your message');
     
    // Prepare data for POST request
    $data = 'username=' . $username . '&hash=' . $hash
    . '&numbers=' . $numbers . "&sender=" . $sender . "&message=" . $message;
    // Send the GET request with cURL
    $ch = curl_init('https://api.txtlocal.com/send/?' . $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    // Process your response here
    echo $response;
?>

