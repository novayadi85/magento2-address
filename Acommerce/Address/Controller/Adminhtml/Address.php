<?php

namespace Acommerce\Address\Controller\Adminhtml;

abstract class Address extends \Magento\Backend\App\Action
{
    /**
     * PageFactory
     *
     * @var Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;

    /**
     * @var Filter
     */
    protected $filter;

    /**
     * Registry
     *
     * @var \Magento\Framework\Registry
     */
    protected $coreRegistry;

    /**
     * SessionFactory
     *
     * @var \Magento\Backend\Model\SessionFactory
     */
    protected $sessionFactory;

    /**
     * Country
     *
     * @var \Magento\Directory\Model\Config\Source\Country
     */
    protected $sourceCountry;

    /**
     * Csv
     *
     * @var \Magento\Framework\File\Csv
     */
    protected $csvProcessor;

    /**
     * Resource
     *
     * @var \Magento\Framework\App\ResourceConnection
     */
    protected $resource;

    /**
     * RawFactory
     *
     * @var \Magento\Framework\Controller\Result\RawFactory
     */
    protected $resultRawFactory;

    /**
     * FileFactory
     *
     * @var \Magento\Framework\App\Response\Http\FileFactory
     */
    protected $fileFactory;

    /**
     * DirectoryList
     *
     * @var \Magento\Framework\App\Filesystem\DirectoryList
     */
    protected $directoryList;

    /**
     * RegionFactory
     *
     * @var \Acommerce\Address\Model\RegionFactory
     */
    protected $regionFactory;

    /**
     * CityFactory
     *
     * @var \Acommerce\Address\Model\CityFactory
     */
    protected $cityFactory;

    /**
     * TownshipFactory
     *
     * @var \Acommerce\Address\Model\TownshipFactory
     */
    protected $townshipFactory;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Ui\Component\MassAction\Filter $filter,
        \Magento\Framework\Registry $coreRegistry,
        \Magento\Backend\Model\SessionFactory $sessionFactory,
        \Magento\Directory\Model\Config\Source\Country $sourceCountry,
        \Magento\Framework\File\Csv $csvProcessor,
        \Magento\Framework\App\ResourceConnection $resource,
        \Magento\Framework\Controller\Result\RawFactory $resultRawFactory,
        \Magento\Framework\App\Response\Http\FileFactory $fileFactory,
        \Magento\Framework\App\Filesystem\DirectoryList $directoryList,
        \Acommerce\Address\Model\RegionFactory $regionFactory,
        \Acommerce\Address\Model\CityFactory $cityFactory,
        \Acommerce\Address\Model\TownshipFactory $townshipFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->filter = $filter;
        $this->coreRegistry = $coreRegistry;
        $this->sessionFactory = $sessionFactory;
        $this->sourceCountry = $sourceCountry;
        $this->csvProcessor = $csvProcessor;
        $this->resource = $resource;
        $this->resultRawFactory = $resultRawFactory;
        $this->fileFactory = $fileFactory;
        $this->directoryList = $directoryList;
        $this->regionFactory = $regionFactory;
        $this->cityFactory = $cityFactory;
        $this->townshipFactory = $townshipFactory;
        parent::__construct($context);
    }

    /**
     * @return $this
     */
    protected function _initAction()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Magento_Customer::customer');
        return $resultPage;
    }
}
