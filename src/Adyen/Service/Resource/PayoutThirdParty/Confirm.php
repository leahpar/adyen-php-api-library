<?php

namespace Adyen\Service\Resource\PayoutThirdParty;

class Confirm extends \Adyen\Service\Resource
{
    protected $_requiredFields = array(
        'merchantAccount',
        'originalReference'
    );

    protected $_endpoint;

    public function __construct($service)
    {
        $this->_endpoint = $service->getClient()->getConfig()->get('endpoint') . '/pal/servlet/Payout/' . $service->getClient()->getApiVersion() . '/confirmThirdParty';
        parent::__construct($service, $this->_endpoint, $this->_requiredFields);
    }

}