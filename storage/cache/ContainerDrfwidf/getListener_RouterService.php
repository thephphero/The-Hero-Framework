<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'listener.router' shared service.

return $this->services['listener.router'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(${($_ = isset($this->services['matcher']) ? $this->services['matcher'] : $this->load('getMatcherService.php')) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, ${($_ = isset($this->services['context']) ? $this->services['context'] : $this->services['context'] = new \Symfony\Component\Routing\RequestContext()) && false ?: '_'}, ${($_ = isset($this->services['log']) ? $this->services['log'] : $this->services['log'] = new \Bundles\FrameworkBundle\Log\Log(($this->targetDirs[1].'/logs/log_project_127.0.0.1:8082.log'))) && false ?: '_'});