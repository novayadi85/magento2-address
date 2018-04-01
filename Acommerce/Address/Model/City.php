<?php

namespace Acommerce\Address\Model;

class City extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Acommerce\Address\Model\ResourceModel\City');
    }
}
