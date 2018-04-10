<?php

namespace Spryker\Zed\Availability\Business\Model\Hydrator;

use Generated\Shared\Transfer\OfferTransfer;

interface OfferQuoteItemStockHydratorInterface
{
    /**
     * @param \Generated\Shared\Transfer\OfferTransfer $offerTransfer
     *
     * @return \Generated\Shared\Transfer\OfferTransfer
     */
    public function hydrate(OfferTransfer $offerTransfer): OfferTransfer;
}