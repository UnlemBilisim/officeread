<h1> Kurulum </h1>
Composer ile kurmak için:

```composer
    composer require "unlembilisim/officeread"
```

config/app.php

```php
    ....
    UnlemBilisim\OfficeRead\OrgeReaderServiceProvider::class,
```

<hr />
<h1>Kullanımı </h1>

```php
use UnlemBilisim\OfficeRead\Conversion;
.....

$conv = new Conversion(public_path('file.doc'));
$text = $conv->convertToText();
echo $text;
        
```


