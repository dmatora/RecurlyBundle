<?php

namespace Moovly\RecurlyBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NewSubscriptionType extends AbstractType
{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        if ($options['add_coupon']) {
            $builder->add(
                'couponCode',
                'text',
                [
                    'required' => false,
                    'label'    => 'Coupon Code',
                ]
            );
        }

        if ($options['add_account']) {
            $builder->add('account', new AccountType());
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'Recurly\Model\NewSubscription',
            'add_account' => true,
            'add_coupon'  => true,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'newSubscription';
    }
}