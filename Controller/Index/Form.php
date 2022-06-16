<?php

namespace Chetu\abhijeet\Controller\Index;

use Magento\Framework\Controller\ResultFactory;

class Form extends \Magento\Framework\App\Action\Action

{
    
    public function execute()
    {
        // 1. POST request : Get booking data
        $post = (array) $this->getRequest()->getPost();

        if (!empty($post)) {

			$name     = $post['name'];
			$siblings = $post['siblings'];
			$email    = $post['email'];
			$age      = $post['age'];
			$college  = $post['college'];
			$state    = $post['state'];
			$color    = $post['color'];
			$interest = $post['interest'];
			$skills   = $post['tskill'];
			$gender   = $post['gender'];

            // Display the succes form validation message
            $this->messageManager->addSuccessMessage('Form done !');

            // Redirect to your form page (or anywhere you want...)
            $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
            $resultRedirect->setUrl('/abhijeet/index/form');

            return $resultRedirect;
        }
        // 2. GET request : Render the booking page 
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }

}
