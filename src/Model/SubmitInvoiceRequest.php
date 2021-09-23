<?php

namespace Amz\VendorDirectFulfillmentPayments\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The request schema for the submitInvoice operation.
 */
class SubmitInvoiceRequest extends AbstractModel
{
    /**
     * @var \Amz\VendorDirectFulfillmentPayments\Model\InvoiceDetail[]
     */
    public $invoices = null;
}
