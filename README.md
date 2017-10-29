# Tbk SDK TOY

## Usage


### Register

Register to `config/app.php`

```php
'providers' => [
  Dearmadman\Tbk\TbkServiceProvider::class,
]

... 

'aliases' => [
  'Tbk' => Dearmadman\Tbk\Facades\Tbk::class,
]
```

### Publish

```
php artisan vendor:publish
```

### Confirgure

Write `app_key` and `app_secret` to `config/tbk.php` config file.

### Get Response

example from test controller:

```
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tbk;

class TestController extends Controller
{
  public function test() {
    $response = Tbk::driver('dg')->get([
      'adzone_id' => 81522959,
      'page_size' => 10,
    ]);
    return json_decode($response->getBody()->getContents(), true);
  }
}
```
