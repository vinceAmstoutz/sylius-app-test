<?php

declare(strict_types=1);

namespace App\Menu;

use Knp\Menu\Util\MenuManipulator;
use Sylius\Bundle\AdminBundle\Menu\MainMenuBuilder;
use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;
use Symfony\Component\EventDispatcher\Attribute\AsEventListener;

#[AsEventListener(MainMenuBuilder::EVENT_NAME)]
final class AdminMenuListener
{
    public function __invoke(MenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();

        $suppliersItem = $menu->addChild('suppliers')
            ->setLabel('Suppliers')
            ->setLabelAttribute('icon', 'tabler:box')
        ;

        $suppliersItem
            ->addChild('admin_supplier', [
                'route' => 'app_admin_supplier_index',
            ])
            ->setAttribute('type', 'link')
            ->setLabel('Suppliers')
        ;

        $manipulator = new MenuManipulator();
        $manipulator->moveToPosition($menu->getChild('official_support'), $menu->count());
    }
}
