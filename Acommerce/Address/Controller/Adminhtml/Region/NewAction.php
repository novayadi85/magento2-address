<?php

namespace Acommerce\Address\Controller\Adminhtml\Region;

class NewAction extends \Acommerce\Address\Controller\Adminhtml\Address
{
    /**
     * Create new Region
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $this->_forward('edit');
    }
}
