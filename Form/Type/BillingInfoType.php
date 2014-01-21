<?php

namespace Moovly\RecurlyBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class BillingInfoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstName', 'text');
        $builder->add('lastName', 'text');
        $builder->add('address1', 'text');
        $builder->add('address2', 'text');
        $builder->add('city', 'text');
        $builder->add('state', 'text');
        $builder->add('country', 'country', [
            'empty_value' => 'Country...',
        ]);
        $builder->add('zip', 'text');
        $builder->add('phone', 'text');
        $builder->add('vat_number', 'text');
        $builder->add('number', 'text');
        $builder->add('month', 'choice', [
            'empty_value' => 'Month...',
            'choices' => $this->getMonthChoices(),
        ]);
        $builder->add('year', 'choice', [
                'empty_value' => 'Year...',
                'choices' => $this->getYearChoices(),
            ]);
        $builder->add('verificationValue', 'text');
    }

    /**
     * Returns an array with all months
     *
     * @return array
     */
    private function getMonthChoices()
    {
        return [
            '01' => '01 - Jan',
            '02' => '02 - Feb',
            '03' => '03 - Mar',
            '04' => '04 - Apr',
            '05' => '05 - May',
            '06' => '06 - Jun',
            '07' => '07 - Jul',
            '08' => '08 - Aug',
            '09' => '09 - Sep',
            '10' => '10 - Oct',
            '11' => '11 - Nov',
            '12' => '12 - Dec',
        ];
    }

    /**
     * Returns an array with year choices
     *
     * @return array
     */
    private function getYearChoices()
    {
        $year = date('Y');
        $choices = array();
        for ($count = $year; $count <= $year + 10; $count++) {
            $choices[$count] = $count;
        }

        return $choices;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'recurlyBillingInfo';
    }
}