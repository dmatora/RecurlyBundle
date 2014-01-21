<?php

namespace Moovly\RecurlyBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class NewSubscriptionType extends AbstractType
{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'couponCode',
            'text',
            [
                'label' => 'Coupon Code',
                'attr'  => [
                    'label' => 'Coupon Code'
                ]
            ]
        );
        $builder->add('account', new AccountType());
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'newSubscription';
    }
}