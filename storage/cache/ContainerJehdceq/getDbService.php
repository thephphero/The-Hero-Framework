<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'db' shared service.

return $this->services['db'] = \Bundles\FrameworkBundle\Database\PDOFactory::createPDO(${($_ = isset($this->services['config']) ? $this->services['config'] : $this->services['config'] = new \Bundles\FrameworkBundle\Config\Config($this)) && false ?: '_'});
