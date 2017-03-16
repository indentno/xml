# xml

[![Travis](https://img.shields.io/travis/Sempro/xml.svg?style=flat-square)](https://travis-ci.org/Sempro/xml.svg?branch=master)
[![Packagist](https://img.shields.io/packagist/dt/sempro/xml.svg?style=flat-square)](https://packagist.org/packages/sempro/xml)
[![Packagist](https://img.shields.io/packagist/v/sempro/xml.svg?style=flat-square)](https://packagist.org/packages/sempro/xml)
[![PRs Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg?style=flat-square)](http://makeapullrequest.com)

> Work with XML structures with ease

### Install
```bash
composer require sempro/xml
```

### Usage
```php
$xml = new XML;
$xml->fromString($xmlStructure)->toArray();
```

### Credit
This package is based on [Tamlyn Rhodes article](http://outlandish.com/blog/xml-to-json/)

### License
MIT © [Sempro AS](http://www.sempro.no)