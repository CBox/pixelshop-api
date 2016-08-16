<?php

include_once('Pixelshop.php');

$pixelshop = new Pixelshop("API_KEY");

$products = [];

$products[] = [
	"sync_id"		=> 1,
	"link"			=> "https://example.com",
	"title"			=> "Product Title",
	"description"	=> "Description about the products.",
	"price"			=> 150,
	"sku"			=> "01PRO",
	"thumb"			=> "https://example.com/images/product.png",
	"tags"			=> 'product, tags',
];

$export = $pixelshop->export->products($products);