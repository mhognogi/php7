<?php

spl_autoload_register(function ($class) {
  $parts = str_replace('\\', '/', $class);
  require $parts . '.php';
});

new dir\Test();
new dir\Q1();
