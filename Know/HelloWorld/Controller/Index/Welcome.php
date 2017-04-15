<?php
namespace Know\HelloWorld\Controller\Index;

use \Magento\Framework\App\Action\Context as Context;
class Welcome extends \Magento\Framework\App\Action\Action {
    public function __construct(Context $context) {
        return parent::__construct($context);
    }

    public function execute()  {
        echo 'Welcome! Magento2 is awesome.';
    }
}
?>