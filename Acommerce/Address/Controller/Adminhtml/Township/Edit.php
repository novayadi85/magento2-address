<?php

namespace Acommerce\Address\Controller\Adminhtml\Township;

class Edit extends \Acommerce\Address\Controller\Adminhtml\Address
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'Acommerce_Address::township_edit';

    /**
     * Edit Township page
     *
     * @return \Magento\Backend\Model\View\Result\Page|\Magento\Backend\Model\View\Result\Redirect
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function execute()
    {
        // Get ID and create model
        $township_id = (int) $this->getRequest()->getParam('township_id');
        $model = $this->townshipFactory->create();
        $model->setData([]);
        // Initial checking
        if ($township_id && $township_id > 0) {
            $model->load($township_id);
            if (!$model->getTownshipId()) {
                $this->messageManager->addError(__('This township no longer exists.'));
                /** \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
                $resultRedirect = $this->resultRedirectFactory->create();
                return $resultRedirect->setPath('*/*/');
            }
            $default_name = $model->getDefaultName();
        }

        $formData = $this->sessionFactory->create()->getFormData(true);
        if (!empty($formData)) {
            $model->setData($formData);
        }

        $this->coreRegistry->register('acommerce_address_township', $model);
        $this->coreRegistry->register('acommerce_address_city_list', $this->cityFactory->create()->getCollection()->toOptionArray());

        // Build edit form
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->_initAction();
        $resultPage->addBreadcrumb(
            $township_id ? __('Edit Township') : __('New Township'),
            $township_id ? __('Edit Township') : __('New Township')
        );
        $resultPage->getConfig()->getTitle()->prepend(__('Township Manager'));
        $resultPage->getConfig()->getTitle()->prepend($township_id ? 'Edit: '.$default_name.' ('.$township_id.')' : __('New Township'));

        return $resultPage;
    }
}
