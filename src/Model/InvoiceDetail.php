<?php

namespace Amz\VendorDirectFulfillmentPayments\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class InvoiceDetail extends AbstractModel
{
    /**
     * The unique invoice number.
     *
     * @var string
     */
    public $invoiceNumber = null;

    /**
     * Invoice date.
     *
     * @var string
     */
    public $invoiceDate = null;

    /**
     * An additional unique reference number used for regulatory or other purposes.
     *
     * @var string
     */
    public $referenceNumber = null;

    /**
     * Name, address and tax details of the party receiving the payment of this
     * invoice.
     *
     * @var \Amz\VendorDirectFulfillmentPayments\Model\PartyIdentification
     */
    public $remitToParty = null;

    /**
     * Warehouse code of the vendor as in the order.
     *
     * @var \Amz\VendorDirectFulfillmentPayments\Model\PartyIdentification
     */
    public $shipFromParty = null;

    /**
     * Name, address and tax details of the party to whom this invoice is issued.
     *
     * @var \Amz\VendorDirectFulfillmentPayments\Model\PartyIdentification
     */
    public $billToParty = null;

    /**
     * Ship-to country code.
     *
     * @var string
     */
    public $shipToCountryCode = null;

    /**
     * The payment terms for the invoice.
     *
     * @var string
     */
    public $paymentTermsCode = null;

    /**
     * Total amount details of the invoice.
     *
     * @var \Amz\VendorDirectFulfillmentPayments\Model\Money
     */
    public $invoiceTotal = null;

    /**
     * Individual tax details per line item.
     *
     * @var \Amz\VendorDirectFulfillmentPayments\Model\TaxDetail[]
     */
    public $taxTotals = null;

    /**
     * Additional details provided by the selling party, for tax related or other
     * purposes.
     *
     * @var \Amz\VendorDirectFulfillmentPayments\Model\AdditionalDetails[]
     */
    public $additionalDetails = null;

    /**
     * Total charge amount details for all line items.
     *
     * @var \Amz\VendorDirectFulfillmentPayments\Model\ChargeDetails[]
     */
    public $chargeDetails = null;

    /**
     * Provides the details of the items in this invoice.
     *
     * @var \Amz\VendorDirectFulfillmentPayments\Model\InvoiceItem[]
     */
    public $items = null;
}
