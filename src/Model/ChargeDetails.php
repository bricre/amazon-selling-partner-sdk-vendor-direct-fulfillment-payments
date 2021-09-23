<?php

namespace Amz\VendorDirectFulfillmentPayments\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Monetary and tax details of the charge.
 */
class ChargeDetails extends AbstractModel
{
    /**
     * Type of charge applied.
     *
     * @var string
     */
    public $type = null;

    /**
     * @var \Amz\VendorDirectFulfillmentPayments\Model\Money
     */
    public $chargeAmount = null;

    /**
     * Individual tax details per line item.
     *
     * @var \Amz\VendorDirectFulfillmentPayments\Model\TaxDetail[]
     */
    public $taxDetails = null;
}
