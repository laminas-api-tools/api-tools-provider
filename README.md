Laminas API Tools Provider
=====================

[![Build Status](https://travis-ci.org/laminas-api-tools/api-tools-provider.svg?branch=master)](https://travis-ci.org/laminas-api-tools/api-tools-provider)

Introduction
------------

This repository consists of interfaces used by Laminas API Tools that can be composed
into standalone modules and libraries so that consumers may choose to opt-in to
Laminas API Tools functionality.

### General Usage

To mark a module as being an Laminas API Tools-enabled module, add the following
interface to your Module:

```php
use Laminas\ApiTools\Provider\ApiToolsProviderInterface;

class MyModule implements ApiToolsProviderInterface
{
}
```

At this point, this particular module should show up in the Laminas API Tools UI interface.

Requirements
------------
  
Please see the [composer.json](composer.json) file.

Installation
------------

Run the following `composer` command:

```console
$ composer require laminas-api-tools/api-tools-provider
```

Alternately, manually add the following to your `composer.json`, in the `require` section:

```javascript
"require": {
    "laminas-api-tools/api-tools-provider": "^1.0"
}
```

And then run `composer update` to ensure the module is installed.
