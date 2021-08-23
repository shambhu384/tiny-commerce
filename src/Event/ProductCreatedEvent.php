<?php

namespace TinyCommerce\Bundle\Event;

use Symfony\Component\HttpFoundation\Response;
use TinyCommerce\Bundle\Contracts\ProductInterface;

final class ProductCreatedEvent
{
   private $product;

    public function getProduct(): Response
    {
        return $this->product;
    }

    public function setProduct(ProductInterface $product): void
    {
        $this->product = $product;
    }
}