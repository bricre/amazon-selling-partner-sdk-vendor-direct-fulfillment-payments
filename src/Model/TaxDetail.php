<?php

namespace Amz\VendorDirectFulfillmentPayments\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Details of tax amount applied.
 */
class TaxDetail extends AbstractModel
{
    /**
     * Type of the tax applied.
     *
     * @var string
     */
    public $taxType = null;

    /**
     * Tax percentage applied. Percentage must be expressed in decimal.
     *
     * @var \Amz\VendorDirectFulfillmentPayments\Model\Decimal
     */
    public $taxRate = null;

    /**
     * Total tax amount applied on invoice total or an item total.
     *
     * @var \Amz\VendorDirectFulfillmentPayments\Model\Money
     */
    public $taxAmount = null;

    /**
     * This field will contain the invoice amount that is taxable at the rate specified
     * in the tax rate field.
     *
     * @var \Amz\VendorDirectFulfillmentPayments\Model\Money
     */
    public $taxableAmount = null;
}
