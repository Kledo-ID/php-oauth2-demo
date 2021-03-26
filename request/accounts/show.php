<?php

use GuzzleHttp\Client;

$client = new Client();

$response = $client->get($_ENV['API_HOST'].'/finance/accounts/1', [
    'headers' => [
        'Accept' => 'application/json',
        'Authorization' => 'Bearer '.get_access_token(),
    ],
]);

$body = json_decode((string) $response->getBody(), true);

?>

<div class="row">
    <div class="col-3 align-middle">
        <h5>Response</h5>
    </div>

    <div class="col-9 text-right">
        <a href="?code=account-index" class="btn btn-success">Show Example Code</a>
    </div>
</div>

<pre>
    <code class="lang-json"><?php echo json_pretty($body); ?></code>
</pre>

