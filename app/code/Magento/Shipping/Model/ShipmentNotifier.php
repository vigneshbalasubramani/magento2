<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Shipping\Model;

use Psr\Log\LoggerInterface as Logger;
use Magento\Sales\Model\Order\Shipment\Sender\EmailSender;
use Magento\Sales\Model\ResourceModel\Order\Status\History\CollectionFactory;

/**
 * Class ShipmentNotifier
 * @package Magento\Shipping\Model
 */
class ShipmentNotifier extends \Magento\Sales\Model\AbstractNotifier
{
    /**
     * @var CollectionFactory
     */
    protected $historyCollectionFactory;

    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;

    /**
     * @var EmailSender
     */
    protected $sender;

    /**
     * @param CollectionFactory $historyCollectionFactory
     * @param Logger $logger
     * @param EmailSender $sender
     */
    public function __construct(
        CollectionFactory $historyCollectionFactory,
        Logger $logger,
        EmailSender $sender
    ) {
        $this->historyCollectionFactory = $historyCollectionFactory;
        $this->logger = $logger;
        $this->sender = $sender;
    }
}
