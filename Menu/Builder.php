<?php

namespace Xsolve\BootstrapCrudBundle\Menu;

use FOS\UserBundle\FOSUserBundle;
use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
use FOS\UserBundle\Model\User;

class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root')->setChildrenAttributes(array('class'=>'nav nav-list bs-docs-sidenav sidebar-nav visible-desktop'));

        $menu->addChild('Home', array('route' => '_welcome'));
        $menu->addChild('Getting started?', array('route' => '_welcome'));

        return $menu;
    }

    public function topMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root')->setChildrenAttributes(array('class'=>'nav'));

        $menu->addChild('Home', array('route' => '_welcome'));
        $menu->addChild('Getting started?', array('route' => '_welcome'));

        return $menu;
    }

}