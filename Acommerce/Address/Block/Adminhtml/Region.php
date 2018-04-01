<?php

namespace Acommerce\Address\Block\Adminhtml;

/**
 * Adminhtml Region content block
 */
class Region extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_blockGroup = 'Acommerce_Address';
        $this->_controller = 'adminhtml_region';
        $this->_headerText = __('Regions Manager');
        $this->_addButtonLabel = __('Add New Region');
        parent::_construct();
    }
}
