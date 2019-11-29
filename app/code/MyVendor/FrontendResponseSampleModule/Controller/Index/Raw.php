<?php

namespace MyVendor\FrontendResponseSampleModule\Controller\Index;

class Raw extends \Magento\Framework\App\Action\Action
{
    protected $resultPageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Controller\Result\RawFactory $rawFactory
        )
    {
        parent::__construct($context);
        $this->rawFactory = $rawFactory;
    }

    public function execute()
    {
        $result = $this->rawFactory->create();

        $html = "Hello World";
        $result->setContents($html);
        return $result;
    }
}