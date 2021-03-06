<?php

namespace MxcDropshipInnocigs\Order;

use MxcCommons\Interop\Container\ContainerInterface;
use MxcCommons\ServiceManager\Factory\FactoryInterface;
use MxcDropshipInnocigs\Api\ApiClient;

class OrderProcessorFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $dropshipOrder = $container->get(DropshipOrder::class);
        $apiClient = $container->get(ApiClient::class);
        $dropshipStatus = $container->get(DropshipStatus::class);
        return new OrderProcessor($dropshipOrder, $apiClient, $dropshipStatus);
    }
}