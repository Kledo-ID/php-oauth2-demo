<?php
    require 'load.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Kledo OAuth2 App</title>

        <link rel="stylesheet" href="assets/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.1/styles/default.min.css">
        <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.1/highlight.min.js"></script>

        <script>hljs.highlightAll();</script>
    </head>

    <body>
        <div class="container">
            <div class="row mt-5">
                <div class="col-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            Kledo OAuth2 App - Demo
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <a href="logout.php" class="btn btn-danger">Logout</a>
                                    <a href="refresh.php" class="btn btn-success">Refresh</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-8 mx-auto">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingFinanceAccount">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#financeAccount" aria-expanded="true" aria-controls="financeAccount">
                                        GET - Finance Account
                                    </button>
                                </h5>
                            </div>

                            <div id="financeAccount" class="collapse <?php is_collapsed('account-index'); ?>" aria-labelledby="headingFinanceAccount" data-parent="#accordion">
                                <div class="card-body">
                                    <?php
                                        if (isset($_GET['request']) && $_GET['request'] === 'account-index') {
                                            include 'request/accounts/index.php';
                                        } else {
                                            include 'demo/accounts/index.php';
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingFinanceAccountCreate">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#financeAccountCreate" aria-expanded="true" aria-controls="financeAccountCreate">
                                        POST - Finance Account Create
                                    </button>
                                </h5>
                            </div>

                            <div id="financeAccountCreate" class="collapse <?php is_collapsed('account-create'); ?>" aria-labelledby="headingFinanceAccountCreate" data-parent="#accordion">
                                <div class="card-body">
                                    <?php
                                        if (isset($_GET['request']) && $_GET['request'] === 'account-create') {
                                            include 'request/accounts/create.php';
                                        } else {
                                            include 'demo/accounts/create.php';
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingFinanceAccountShow">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#financeAccountShow" aria-expanded="true" aria-controls="financeAccountShow">
                                        GET - Finance Account Details
                                    </button>
                                </h5>
                            </div>

                            <div id="financeAccountShow" class="collapse <?php is_collapsed('account-show'); ?>" aria-labelledby="headingFinanceAccountShow" data-parent="#accordion">
                                <div class="card-body">
                                    <?php
                                        if (isset($_GET['request']) && $_GET['request'] === 'account-show') {
                                            include 'request/accounts/show.php';
                                        } else {
                                            include 'demo/accounts/show.php';
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="assets/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="assets/js/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="assets/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
