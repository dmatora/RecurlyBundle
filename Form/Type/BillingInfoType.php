<?php

namespace Moovly\RecurlyBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BillingInfoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'firstName',
            'text',
            [
                'label' => 'First Name',
            ]
        );
        $builder->add(
            'lastName',
            'text',
            [
                'label' => 'Last Name',
            ]
        );
        $builder->add(
            'address1',
            'text',
            [
                'label' => 'Address 1',
            ]
        );
        $builder->add(
            'address2',
            'text',
            [
                'label' => 'Address 2',
                'required' => false,
            ]
        );
        $builder->add(
            'city',
            'text',
            [
                'label' => 'City',
            ]
        );
        $builder->add(
            'state',
            'text',
            [
                'label'       => 'State',
                'required' => false,
            ]
        );
        $builder->add(
            'country',
            'country',
            [
                'empty_value' => 'Country&hellip;',
                'label'       => 'Country'
            ]
        );
        $builder->add(
            'zip',
            'text',
            [
                'label' => 'ZIP',
            ]
        );
        $builder->add(
            'vatNumber',
            'text',
            [
                'label' => 'VAT Number (if applicable)',
                'required' => false,
            ]
        );
        $builder->add(
            'number',
            'text',
            [
                'label' => 'Card Number',
            ]
        );
        $builder->add(
            'month',
            'month',
            [
                'empty_value' => 'Month&hellip;',
                'label'       => 'Expiration Date (Month)'
            ]
        );
        $builder->add(
            'year',
            'year',
            [
                'empty_value' => 'Year&hellip;',
                'label'       => 'Expiration Date (Year)'
            ]
        );
        $builder->add(
            'verificationValue',
            'text',
            [
                'label' => 'Security Code (CVV)',
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
                'data_class' => 'Recurly\Model\BillingInfo',
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'billingInfo';
    }
}