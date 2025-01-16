<?php

namespace App\Form\Admin;

use Sylius\Bundle\AdminBundle\Form\Type\AddressType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\FormBuilderInterface;

final class AddressTypeExtension extends AbstractTypeExtension {

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('mobilePhoneNumber', TelType::class, [
            'required' => false,
        ]);
    }
    public static function getExtendedTypes(): iterable
    {
        return [AddressType::class];
    }
}
