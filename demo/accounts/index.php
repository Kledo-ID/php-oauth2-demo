<div class="row mb-4">
    <div class="col-3">
        <h5>Example Code</h5>
    </div>

    <div class="col-9 text-right">
        <a href="?request=account-index" class="btn btn-success">Submit Request</a>
    </div>
</div>

<pre><code class="lang-php">
$client = new \GuzzleHttp\Client();

$response = $client->get('<?php echo $_ENV['API_HOST']; ?>/finance/accounts', [
    'headers' => [
        'Accept' => 'application/json',
        'Authorization' => 'Bearer _YOUR_ACCESS_TOKEN_',
    ],
    'query' => [
        'sort_by' => 'name',
        'order_by' => 'asc',
        'per_page' => 5,
    ],
]);

$result = (string) $response->getBody();
</code></pre>
