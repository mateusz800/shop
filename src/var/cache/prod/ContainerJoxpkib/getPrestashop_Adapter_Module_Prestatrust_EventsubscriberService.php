<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.module.prestatrust.eventsubscriber' shared service.

$this->services['prestashop.adapter.module.prestatrust.eventsubscriber'] = $instance = new \PrestaShop\PrestaShop\Adapter\Module\PrestaTrust\ModuleEventSubscriber(${($_ = isset($this->services['prestashop.adapter.module.prestatrust.checker']) ? $this->services['prestashop.adapter.module.prestatrust.checker'] : $this->getPrestashop_Adapter_Module_Prestatrust_CheckerService()) && false ?: '_'});

$instance->setEnabled(true);

return $instance;