<?php

namespace MyVendor\FrontendResponseSampleModule\Controller\Index;

class Redirect extends \Magento\Framework\App\Action\Action
{
    protected $resultPageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Controller\Result\RedirectFactory $redirectFactory
        )
    {
        parent::__construct($context);
        $this->redirectFactory = $redirectFactory;
    }

    public function execute()
    {
        $result = $this->redirectFactory->create();
        $result->setPath('joust-duffle-bag.html');
        //$result->setPath('about-us');
        return $result;
    }
}