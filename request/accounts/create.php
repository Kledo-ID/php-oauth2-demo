<?php

use GuzzleHttp\Client;

$client = new Client();

$response = $client->post($_ENV['API_HOST'].'/finance/accounts', [
    'headers' => [
        'Accept' => 'application/json',
        'Authorization' => 'Bearer '.get_access_token(),
    ],
    'form_params' => [
        'name' => 'Example Finance Account',
        'ref_code' => random_string(5),
        'desc' => 'Create Finance Account via API',
        'finance_account_category_id' => 1
    ],
]);

$body = json_decode((string) $response->getBody(), true);

?>

<div class="row">
    <div class="col-3 align-middle">
        <h5>Response</h5>
    </div>

    <div class="col-9 text-right">
        <a href="?code=account-create" class="btn btn-success">Show Example Code</a>
    </div>
</div>

<pre>
    <code class="lang-json"><?php echo json_pretty($body); ?></code>
</pre>

