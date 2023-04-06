<?php

require __DIR__. "/../source/autoload.php";

use Source\Models\Financial\Client;
use Source\Models\Financial\Employee;
use Source\Models\Financial\Saving;
use Source\Models\Financial\Current;
use Source\Models\Financial\Products;

$Client = new client();
$Employee = new employee();
$Saving = new saving();
$Current = new  current();
$Products = new Products();

var_dump($Client, $Employee, $Saving, $Current, $Products);