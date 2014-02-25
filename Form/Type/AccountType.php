<?php

namespace Moovly\RecurlyBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AccountType extends AbstractType
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
            'companyName',
            'text',
            [
                'label' => 'Company',
            ]
        );
        $builder->add('billingInfo', new BillingInfoType());
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
                'data_class' => 'Recurly\Model\Account',
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'account';
    }
}