<a href="index.php"><-  Home</a>
<hr/>
<?php
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://dummyjson.com/auth/login',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_SSL_VERIFYPEER => empty($_SERVER['HTTPS']),
        CURLOPT_SSL_VERIFYHOST => 2,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('username' => 'kminchelle','password' => '0lelplR'),
    ));

    $response = curl_exec($curl);

    if (curl_errno($curl)) {
        $error_msg = curl_error($curl);
        print_r($error_msg);
    } else {
        echo "<b>Response : </b> <br/><br/>";

        foreach (json_decode($response) as $key => $value){
            echo "<b>" . $key . " : </b>" . $value . "<br/>";
        }
    }
    curl_close($curl);