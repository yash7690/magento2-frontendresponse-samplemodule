<?php

namespace MyVendor\FrontendResponseSampleModule\Controller\Index;

class Forward extends \Magento\Framework\App\Action\Action
{
    protected $resultPageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Controller\Result\ForwardFactory $forwardFactory
        )
    {
        parent::__construct($context);
        $this->forwardFactory = $forwardFactory;
    }

    public function execute()
    {
        $result = $this->forwardFactory->create();
        $result->setModule('exampleresponse')->setController('Index')->forward('html');
        return $result;
    }
}