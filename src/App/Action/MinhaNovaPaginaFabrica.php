<?php

namespace App\Action;

use Interop\Container\ContainerInterface;
use Zend\Expressive\Router\RouterInterface;
use Zend\Expressive\Template\TemplateRendererInterface;

class MinhaNovaPaginaFabrica
{
    public function __invoke(ContainerInterface $container)
    {
        //$router   = $container->get(RouterInterface::class);
        $template = ($container->has(TemplateRendererInterface::class))
            ? $container->get(TemplateRendererInterface::class)
            : null;

        //return new MinhaNovaPaginaFabrica($router, $template);
        return new MinhaNovaPaginaAcao($template);
    }
}
