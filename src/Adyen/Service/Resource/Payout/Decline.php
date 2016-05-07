<?php

namespace Adyen\Service\Resource\Payment;

class Decline extends \Adyen\Service\Resource
{
    protected $_requiredFields = array(
        'merchantAccount',
        'originalReference'
    );

    protected $_endpoint;

    public function __construct($service)
    {
        $this->_endpoint = $service->getClient()->getConfig()->get('endpoint') . '/pal/servlet/Payment/' . $service->getClient()->getApiVersion() . '/decline';
        parent::__construct($service, $this->_endpoint, $this->_requiredFields);
    }

}