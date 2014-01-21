<?php

namespace Moovly\RecurlyBundle\Form\Type;

use Symfony\Component\Form\AbstractType as BaseAbstractType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;

abstract class AbstractType extends BaseAbstractType
{
    /** @var boolean */
    private $usePlaceholder;

    public function __construct($usePlaceholder = true)
    {
        $this->usePlaceholder = $usePlaceholder;
    }

    /**
     * @param FormView      $view
     * @param FormInterface $form
     * @param array         $options
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
//        if (!$this->usePlaceholder || !in_array($form->getConfig()->getType()->getName(), array('text'))) {
//            return;
//        }

        if (!isset($options['attr']['placeholder'])) {
            if ($options['label'] === null) {
                $view->vars['attr']['placeholder'] = $this->humanize($form->getName());
            } else {
                $view->vars['attr']['placeholder'] = $options['label'];
            }
            $view->vars['label'] = false;
        }

    }

    private function humanize($text)
    {
        return ucfirst(trim(strtolower(preg_replace(array('/([A-Z])/', '/[_\s]+/'), array('_$1', ' '), $text))));
    }
} 