# CakePHP HAML views

[HAML](http://haml.info/) template engine for **CakePHP 2.x**.

Based on the [MtHaml](https://github.com/arnaud-lb/MtHaml), a HAML implementation for PHP.

## Installation

Use this plugin as a submodule:

```
git submodule add git@github.com:TiuTalk/cakephp-haml.git Plugin/Haml
git submodule update --init --recursive
```

Or as a normal repository:

```git clone git@github.com:TiuTalk/cakephp-haml.git Plugin/Haml --recursive```

And enable it on the `APP/Config/bootstrap.php` file:

```php
<?php
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
