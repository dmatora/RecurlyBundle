<?php

namespace Moovly\RecurlyBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

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
            ]
        );
        $builder->add('account', new AccountType());
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
                'data_class' => 'Recurly\Model\NewSubscription',
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'newSubscription';
    }
}