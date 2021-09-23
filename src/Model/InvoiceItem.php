<?php

namespace Amz\VendorDirectFulfillmentPayments\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class InvoiceItem extends AbstractModel
{
    /**
     * Numbering of the item on the purchase order. The first item will be 1, the
     * second 2, and so on.
     *
     * @var string
     */
    public $itemSequenceNumber = null;

    /**
     * Buyer's standard identification number (ASIN) of an item.
     *
     * @var string
     */
    public $buyerProductIdentifier = null;

    /**
     * The vendor selected product identification of the item.
     *
     * @var string
     */
    public $vendorProductIdentifier = null;

    /**
     * Item quantity invoiced.
     *
     * @var \Amz\VendorDirectFulfillmentPayments\Model\ItemQuantity
     */
    public $invoicedQuantity = null;

    /**
     * Net price (before tax) to vendor with currency details.
     *
     * @var \Amz\VendorDirectFulfillmentPayments\Model\Money
     */
    public $netCost = null;

    /**
     * The purchase order number for this order. Formatting Notes: 8-character
     * alpha-numeric code.
     *
     * @var string
     */
    public $purchaseOrderNumber = null;

    /**
     * The vendor's order number for this order.
     *
     * @var string
     */
    public $vendorOrderNumber = null;

    /**
     * HSN tax code. The HSN number cannot contain alphabets.
     *
     * @var string
     */
    public $hsnCode = null;

    /**
     * Individual tax details per line item.
     *
     * @var \Amz\VendorDirectFulfillmentPayments\Model\TaxDetail[]
     */
    public $taxDetails = null;

    /**
     * Individual charge details per line item.
     *
     * @var \Amz\VendorDirectFulfillmentPayments\Model\ChargeDetails[]
     */
    public $chargeDetails = null;
}
