<?php

namespace Acommerce\Address\Plugin\Magento\Customer\Block\Address;

class Edit
{
    public function beforeSetTemplate(
        \Magento\Customer\Block\Address\Edit $subject,
        $template
    ) {
        return ['Acommerce_Address::address/edit.phtml'];
    }
}