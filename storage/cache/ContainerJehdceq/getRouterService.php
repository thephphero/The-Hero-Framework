<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'router' shared service.

return $this->services['router'] = new \Symfony\Component\Routing\Router(${($_ = isset($this->services['routing.route_loader']) ? $this->services['routing.route_loader'] : $this->load('getRouting_RouteLoaderService.php')) && false ?: '_'}, NULL, array(), ${($_ = isset($this->services['context']) ? $this->services['context'] : $this->services['context'] = new \Symfony\Component\Routing\RequestContext()) && false ?: '_'}, ${($_ = isset($this->services['log']) ? $this->services['log'] : $this->services['log'] = new \Bundles\FrameworkBundle\Log\Log(($this->targetDirs[1].'/logs/log_project_127.0.0.1:8080.log'))) && false ?: '_'});
