<?php

namespace MyVendor\FrontendResponseSampleModule\Controller\Index;

class Json extends \Magento\Framework\App\Action\Action
{
    protected $resultPageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory
        )
    {
        parent::__construct($context);
        $this->resultJsonFactory = $resultJsonFactory;
    }

    public function execute()
    {
        $data = ['firstname' => 'Sample Firstname', 'lastname' => 'Sample Lastname'];
        $result = $this->resultJsonFactory->create();
        $result->setData($data);
        return $result;
    }
}