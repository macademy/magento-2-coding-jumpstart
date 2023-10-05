<?php

declare(strict_types=1);

namespace Macademy\Jumpstart\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

class Index implements HttpGetActionInterface
{
    public function __construct(
        private PageFactory $pageFactory,
    ) {}

    public function execute(): Page
    {
        return $this->pageFactory->create();
    }
}
