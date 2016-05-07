<?php

namespace Adyen\Service\Resource\Payment;

class Submit extends \Adyen\Service\Resource
{
    protected $_requiredFields = array(
        'merchantAccount',
        'amount.value',
        'amount.currency',
        'reference',
        'shopperEmail',
        'shopperReference',
        'selectedRecurringDetailReference'
    );

    protected $_endpoint;

    public function __construct($service)
    {
        $this->_endpoint = $service->getClient()->getConfig()->get('endpoint') . '/pal/servlet/Payout/' . $service->getClient()->getApiVersion() . '/submit';
        parent::__construct($service, $this->_endpoint, $this->_requiredFields);
    }

}