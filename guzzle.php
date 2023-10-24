<a href="index.php"><-  Home</a>
<hr/>
<?php
    $client = new Client();
    $headers = [
        'Content-Type' => 'json'
    ];
    $options = [
        'multipart' => [
            [
                'name' => 'username',
                'contents' => 'kminchelle'
            ],
            [
                'name' => 'password',
                'contents' => '0lelplR'
            ]
        ]];
    $request = new Request('POST', 'https://dummyjson.com/auth/login', $headers);
    $res = $client->sendAsync($request, $options)->wait();
    $response = $res->getBody();

    echo "<b>Response : </b> <br/><br/>";

    foreach (json_decode($response) as $key => $value){
        echo "<b>" . $key . " : </b>" . $value . "<br/>";
    }