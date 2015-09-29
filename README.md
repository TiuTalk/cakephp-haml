# CakePHP HAML views class

[![Latest Stable Version](https://poser.pugx.org/tiutalk/haml/v/stable)](https://packagist.org/packages/tiutalk/haml) [![Total Downloads](https://poser.pugx.org/tiutalk/haml/downloads)](https://packagist.org/packages/tiutalk/haml) [![Latest Unstable Version](https://poser.pugx.org/tiutalk/haml/v/unstable)](https://packagist.org/packages/tiutalk/haml) [![License](https://poser.pugx.org/tiutalk/haml/license)](https://packagist.org/packages/tiutalk/haml)

[HAML](http://haml.info/) template engine for **CakePHP 2.x**.

Based on the [MtHaml](https://github.com/arnaud-lb/MtHaml), a HAML implementation for PHP.


## Installation

Include the plugin on your composer file:

```json
{
  "require": {
    "tiutalk/haml": "dev-master"
  }
}
```

This package has a **Composer** dependency, don't forget to require `autoload.php` and then enable it on the `APP/Config/bootstrap.php` file:

```php
<?php
require_once APP . 'Vendor' . DS . 'autoload.php';

CakePlugin::load('Haml', array('bootstrap' => true));
```

## Usage

Set the default **ViewClass** on the `APP/Controller/AppController.php` file:

```php
<?php
class AppController extends Controller {

  public $viewClass = 'Haml.Haml';

}
```

And now you can use HAML on all your view files with `.haml` extension.

### Examples

#### APP/View/Layouts/default.ctp

```haml
!!!
%html
  %head
    %title= $title_for_layout
    %meta{ :content => "", :name => "description" }
    %meta{ :content => "", :name => "author" }

    = $this->Html->css('cake.generic')
    = $this->fetch('css')
    = $this->fetch('script')
  %body
    #container
      #header
        %h1 CakePHP

      #content
        = $this->Session->flash()
        = $this->fetch('content')

      #footer
        = $this->Html->link($this->Html->image('cake.power.gif'), 'http://www.cakephp.org/', array('target' => '_blank', 'escape' => false))
```
