<?php

declare(strict_types=1);

namespace Macademy\Jumpstart\Model;

use Macademy\Jumpstart\Api\CategoryInterface;

class Category implements CategoryInterface
{
    public function getName(): string
    {
        return 'Category Name';
    }
}
