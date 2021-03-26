<div class="row mb-4">
    <div class="col-3">
        <h5>Example Code</h5>
    </div>

    <div class="col-9 text-right">
        <a href="?request=account-delete" class="btn btn-success">Submit Request</a>
    </div>
</div>

<pre><code class="lang-php">
$client = new \GuzzleHttp\Client();

$response = $client->delete('<?php echo $_ENV['API_HOST']; ?>/finance/accounts/massDelete', [
    'headers' => [
        'Accept' => 'application/json',
        'Authorization' => 'Bearer _YOUR_ACCESS_TOKEN_',
    ],
    'form_params' => [
        'id' => [
            '1',
            '2',
            '3',
        ],
    ],
]);

$result = (string) $response->getBody();
</code></pre>
