<?php

namespace TinyCommerce\Bundle\TinyCommerceBundle;

use EasyCorp\Bundle\EasyAdminBundle\DependencyInjection\CreateControllerRegistriesPass;
use Symfony\Component\DependencyInjection\Compiler\PassConfig;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class TinyCommerceBundle extends Bundle
{
    public const VERSION = '1.0-DEV';
    /** @deprecated use EA::CONTEXT_REQUEST_ATTRIBUTE */
    public const CONTEXT_ATTRIBUTE_NAME = EA::CONTEXT_REQUEST_ATTRIBUTE;

    public function build(ContainerBuilder $container)
    {
        //$container->addCompilerPass(new CreateControllerRegistriesPass(), PassConfig::TYPE_BEFORE_OPTIMIZATION);
    }
}