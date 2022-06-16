<?php

namespace Chetu\abhijeet\Block;

class Form extends \Magento\Framework\View\Element\Template
{
    /**
     * Construct
     *
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    )
    {
        parent::__construct($context, $data);
    }

    /**
     * Get form action URL for POST form request
     *
     * @return string
     */
    public function getFormAction()
    {
        return '/abhijeet/index/form';
        // here controller_name is index, action is form
    }
}
