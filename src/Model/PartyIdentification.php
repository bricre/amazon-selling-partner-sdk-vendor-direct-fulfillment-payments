<?php

namespace Amz\VendorDirectFulfillmentPayments\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class PartyIdentification extends AbstractModel
{
    /**
     * Assigned Identification for the party.
     *
     * @var string
     */
    public $partyId = null;

    /**
     * Identification of the party by address.
     *
     * @var \Amz\VendorDirectFulfillmentPayments\Model\Address
     */
    public $address = null;

    /**
     * Tax registration details of the entity.
     *
     * @var \Amz\VendorDirectFulfillmentPayments\Model\TaxRegistrationDetail[]
     */
    public $taxRegistrationDetails = null;
}
