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
        $builder->add('accountCode', 'hidden');
        $builder->add(
            'firstName',
            'text',
            [
                'label' => 'First Name',
                'attr'  => [
                    'placeholder' => 'First Name'
                ]
            ]
        );
        $builder->add(
            'lastName',
            'text',
            [
                'label' => 'Last Name',
                'attr'  => [
                    'placeholder' => 'Last Name'
                ]
            ]
        );
        $builder->add(
            'companyName',
            'text',
            [
                'label' => 'Company',
                'attr'  => [
                    'placeholder' => 'Company'
                ]
            ]
        );
        $builder->add('billingInfo', new BillingInfoType());
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'account';
    }
}