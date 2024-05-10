<?php

namespace Zones\MyPlugin\Plugin;

class BeforePlugin
{
    public function beforeGetTitle(\Magento\Catalog\Block\Product\View $subject, $result)
    {
        // Add custom logic here
        $result = "Special Offer: " . $result;

        return [$result]; // Return modified or original result
    }
}