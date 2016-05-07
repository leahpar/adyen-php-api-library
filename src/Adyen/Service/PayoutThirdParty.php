<?php

namespace Adyen\Service;


use Adyen\Service\Resource\PayoutThirdParty\Confirm;
use Adyen\Service\Resource\PayoutThirdParty\Decline;
use Adyen\Service\Resource\PayoutThirdParty\StoreAndSubmit;

class PayoutThirdParty extends \Adyen\Service
{

    protected $_confirm;
    protected $_decline;
    protected $_storeAndSubmit;

    public function __construct(\Adyen\Client $client)
    {
        parent::__construct($client);

        $this->_storeAndSubmit = new StoreAndSubmit($this);
        $this->_confirm = new Confirm($this);
        $this->_decline = new Decline($this);
    }

    public function storeAndSubmit($params)
    {
        $result =  $this->_storeAndSubmit->request($params);
        return $result;
    }

    public function confirm($params)
    {
        $result =  $this->_confirm->request($params);
        return $result;
    }

    public function decline($params)
    {
        $result =  $this->_decline->request($params);
        return $result;
    }

}
