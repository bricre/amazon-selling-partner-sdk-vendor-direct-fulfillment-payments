<?php

namespace Amz\VendorDirectFulfillmentPayments\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the submitInvoice operation.
 */
class SubmitInvoiceResponse extends AbstractModel
{
    /**
     * The response payload for the submitInvoice operation.
     *
     * @var \Amz\VendorDirectFulfillmentPayments\Model\TransactionReference
     */
    public $payload = null;

    /**
     * @var \Amz\VendorDirectFulfillmentPayments\Model\ErrorList
     */
    public $errors = null;
}
