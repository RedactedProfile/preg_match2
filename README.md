preg_match2
===========

Why?
---

I simply would prefer if the built in preg_match functions would just return the values 
instead of the current method of supplying a predefined array.

Installation
---

`composer require redacteddevworks/preg_match2`

Usage
---

```
require 'autoload.php';

$matches = preg_match2('/([\d])/', 'the quick 1 jumped over the lazy 2 dog');
```
