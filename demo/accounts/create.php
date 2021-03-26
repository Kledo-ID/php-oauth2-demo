<div class="row mb-4">
    <div class="col-3">
        <h5>Example Code</h5>
    </div>

    <div class="col-9 text-right">
        <a href="?request=account-create" class="btn btn-success">Submit Request</a>
    </div>
</div>

<pre><code class="lang-php">
$client = new \GuzzleHttp\Client();

$response = $client->post('<?php echo $_ENV['API_HOST']; ?>/finance/accounts', [
    'headers' => [
        'Accept' => 'application/json',
        'Authorization' => 'Bearer _YOUR_ACCESS_TOKEN_',
    ],
    'form_params' => [
        'name' => 'Example Finance Account',
        'ref_code' => '00005',
        'desc' => 'Create Finance Account via API',
        'finance_account_category_id' => 1
    ],
]);

$result = (string) $response->getBody();
</code></pre>
