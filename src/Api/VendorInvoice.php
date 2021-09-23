<?php

namespace Amz\VendorDirectFulfillmentPayments\Api;

use Amz\VendorDirectFulfillmentPayments\Model\SubmitInvoiceRequest as SubmitInvoiceRequest;
use Amz\VendorDirectFulfillmentPayments\Model\SubmitInvoiceResponse as SubmitInvoiceResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class VendorInvoice extends AbstractAPI
{
    /**
     * Submits one or more invoices for a vendor's direct fulfillment orders.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param SubmitInvoiceRequest $Model Submits one or more invoices for a vendor's
     *                                    direct fulfillment orders.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @return SubmitInvoiceResponse
     */
    public function submitInvoice(SubmitInvoiceRequest $Model): SubmitInvoiceResponse
    {
        return $this->client->request('submitInvoice', 'POST', 'vendor/directFulfillment/payments/v1/invoices',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }
}
