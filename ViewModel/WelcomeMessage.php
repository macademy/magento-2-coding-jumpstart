<?php

declare(strict_types=1);

namespace Macademy\Jumpstart\ViewModel;

use Magento\Framework\Phrase;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class WelcomeMessage implements ArgumentInterface
{
    public function getWelcomeMessage(): Phrase
    {
        $hour = date('G');

        if ($hour < 12) {
            return __('Good morning!');
        } elseif ($hour < 17) {
            return __('Good afternoon!');
        } else {
            return __('Good night!');
        }
    }
}
