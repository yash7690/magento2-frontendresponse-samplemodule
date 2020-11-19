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
        //$result->setModule('exampleresponse')->setController('Index')->forward('html');
        $result->setModule('catalog')->setController('product')->setParams(['id' => 1])->forward('view');

        //$result->setModule('cms')->setController('page')->setParams(['id' => 4])->forward('view');
        return $result;
    }
}