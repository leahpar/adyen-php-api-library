<?php

namespace Adyen\Service\Resource\Payment;

class Confirm extends \Adyen\Service\Resource
{
    protected $_requiredFields = array(
        'merchantAccount',
        'originalReference'
    );

    protected $_endpoint;

    public function __construct($service)
    {
        $this->_endpoint = $service->getClient()->getConfig()->get('endpoint') . '/pal/servlet/Payment/' . $service->getClient()->getApiVersion() . '/confirm';
        parent::__construct($service, $this->_endpoint, $this->_requiredFields);
    }

}