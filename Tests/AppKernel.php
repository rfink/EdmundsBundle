<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new RF\EdmundsBundle\RFEdmundsBundle(),
        );

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        // We don't need that Environment stuff, just one config
        $loader->load(__DIR__ . '/config.yml');
    }

    public function getCacheDir()
    {   
        return sys_get_temp_dir().'/EdmundsBundle/cache';
    }   
 
    public function getLogDir()
    {   
        return sys_get_temp_dir().'/EdmundsBundle/logs';
    } 
}