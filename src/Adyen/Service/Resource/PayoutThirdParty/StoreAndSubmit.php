<?php

namespace Adyen\Service\Resource\PayoutThirdParty;

class StoreAndSubmit extends \Adyen\Service\Resource
{
    protected $_requiredFields = array(
        'merchantAccount',
        'amount.value',
        'amount.currency',
        'reference',
        'shopperEmail',
        'shopperReference',
        'recurring.contract',
        'bank.iban',
        'bank.bankName',
        'bank.countryCode',
        'bank.ownerName',
    );

    protected $_endpoint;

    public function __construct($service)
    {
        $this->_endpoint = $service->getClient()->getConfig()->get('endpoint') . '/pal/servlet/Payout/' . $service->getClient()->getApiVersion() . '/storeDetailAndSubmitThirdParty';
        parent::__construct($service, $this->_endpoint, $this->_requiredFields);
    }

}