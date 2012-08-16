Bootstrap bundle
================

Introduction
------------

This bundle provides simple [Twitter bootstrap](http://twitter.github.com/bootstrap/) functionality to the symfony2 app:

Features
--------

* Add bootstrap.css 
* Add bootstrap.js
* Add fields.html.twig for form theming (with support twitter bootstrap)

Requirements
------------
* Symfony 2+ with twig.

Installation
------------

Add bundle to your composer.json:

```js
{
    "require": {
        "smirik/bootstrap-bundle": "*"
    }
}
```

How to use
----------

Bundle also provides 2 twig functions for including css and js:

  ```
    {{ bootstrap_css() }}
    {{ bootstrap_js() }}
  ```

Roadmap
-------

* Comments, pulls, reviews, forks are welcome!

License
-------

MIT.

