<?php

namespace Moovly\RecurlyBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MonthType extends AbstractType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $year    = date('Y');
        $choices = array();
        for ($count = $year; $count <= $year + 10; $count++) {
            $choices[$count] = $count;
        }

        $resolver->setDefaults([
            'choices' => [
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
            ],
        ]);
    }

    public function getParent()
    {
        return 'choice';
    }

    public function getName()
    {
        return 'month';
    }
}