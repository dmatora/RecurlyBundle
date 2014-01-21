<?php

namespace Moovly\RecurlyBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class YearType extends AbstractType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $year    = date('Y');
        $choices = array();
        for ($count = $year; $count <= $year + 10; $count++) {
            $choices[$count] = $count;
        }

        $resolver->setDefaults([
            'choices' => $choices,
        ]);
    }

    public function getParent()
    {
        return 'choice';
    }

    public function getName()
    {
        return 'year';
    }
}