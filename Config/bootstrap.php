<?php
use MtHaml\Autoloader;

App::build(array('Vendor' => array(CakePlugin::path('Haml') . 'Vendor' . DS)));
App::import('Vendor', 'MtHaml', array(
  'file' => 'MtHaml' . DS . 'lib' . DS . 'MtHaml' . DS . 'Autoloader.php'
));

Autoloader::register();