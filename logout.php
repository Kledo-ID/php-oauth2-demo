<?php

require 'load.php';

Josantonius\Session\Session::destroy();

header('Location: ./index.php');
