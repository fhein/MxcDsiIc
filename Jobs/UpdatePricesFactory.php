<?php

namespace MxcDropshipInnocigs\Jobs;

use MxcCommons\Interop\Container\ContainerInterface;
use MxcCommons\ServiceManager\Factory\FactoryInterface;
use MxcDropship\Dropship\DropshipManager;
use MxcDropship\MxcDropship;
use MxcDropshipInnocigs\Api\ApiClient;

class UpdatePricesFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $apiClient = $container->get(ApiClient::class);
        $dropshipManager = MxcDropship::getServices()->get(DropshipManager::class);

        return new UpdatePrices($apiClient, $dropshipManager);
    }
}