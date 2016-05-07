<?php

namespace Adyen\Service;

use Adyen\Service\Resource\Payment\Confirm;
use Adyen\Service\Resource\Payment\Decline;
use Adyen\Service\Resource\Payment\Submit;

class Payout extends \Adyen\Service
{

    protected $_submit;
    protected $_confirm;
    protected $_decline;

    public function __construct(\Adyen\Client $client)
    {
        parent::__construct($client);

        $this->_request = new Submit($this);
        $this->_confirm = new Confirm($this);
        $this->_decline = new Decline($this);
    }

    public function submit($params)
    {
        $result =  $this->_submit->request($params);
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
