<?php

namespace Acommerce\Address\Controller\Adminhtml\Importaddress;

class Index extends \Acommerce\Address\Controller\Adminhtml\Address
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'Acommerce_Address::import_address';

    public function execute()
    {
        $resultPage = $this->_initAction();
        $resultPage->addBreadcrumb('Import Address','Import Address');
        $resultPage->getConfig()->getTitle()->prepend(__('Customers'));
        $resultPage->getConfig()->getTitle()->prepend('Import Address');
        return $resultPage;
    }
}