<?php

require_once(__DIR__ . '/vendor/autoload.php');

require_once "./app/controllers/index_controller.php";
require_once "./app/controllers/product_controller.php";

app()->get('/', function () {
  $index = new IndexController();
  $index->index();
});

app()->get('/products/new', function () {
  $index = new ProductController();
  $index->get_form();
});

app()->run();
