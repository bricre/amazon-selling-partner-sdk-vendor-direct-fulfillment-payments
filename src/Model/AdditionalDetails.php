<?php

namespace Amz\VendorDirectFulfillmentPayments\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A field where selling party can provide additional information for tax related
 * or any other purposes.
 */
class AdditionalDetails extends AbstractModel
{
    /**
     * The type of the additional information provided by the selling party.
     *
     * @var string
     */
    public $type = null;

    /**
     * The detail of the additional information provided by the selling party.
     *
     * @var string
     */
    public $detail = null;

    /**
     * The language code of the additional information detail.
     *
     * @var string
     */
    public $languageCode = null;
}
