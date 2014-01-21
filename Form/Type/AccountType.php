<?php

namespace Moovly\RecurlyBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AccountType extends AbstractType
{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstName', 'text');
        $builder->add('lastName', 'text');
        $builder->add('companyName', 'text');
        $builder->add('billingInfo', new BillingInfoType());
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'recurlyAccount';
    }
}