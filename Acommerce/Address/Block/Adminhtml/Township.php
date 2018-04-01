<?php

namespace Acommerce\Address\Block\Adminhtml;

/**
 * Adminhtml Township content block
 */
class Township extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_blockGroup = 'Acommerce_Address';
        $this->_controller = 'adminhtml_township';
        $this->_headerText = __('Township Manager');
        $this->_addButtonLabel = __('Add New Township');
        parent::_construct();
    }
}
