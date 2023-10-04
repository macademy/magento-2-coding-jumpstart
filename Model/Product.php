<?php

declare(strict_types=1);

namespace Macademy\Jumpstart\Model;

use Macademy\Jumpstart\Api\CategoryInterface;

class Product
{
    function __construct(
        private CategoryInterface $category,
    ) {}

    function getCategoryName(): string
    {
        return $this->category->getName();
    }
}
