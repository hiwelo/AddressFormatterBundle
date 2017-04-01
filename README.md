# AddressFormatterBundle

International mailing address created as a bundle for Symfony 3.

## Installation

Install the bundle using [composer](https://getcomposer.org).

```bash
composer require hiwelo/AddressFormatterBundle
```

## Enable the bundle

Enable the bundle in the Symfony 3 Kernel:

```php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        //...
        new CitizenKey\AddressFormatterBundle\AddressFormattingBundle(),
    );
}
```
