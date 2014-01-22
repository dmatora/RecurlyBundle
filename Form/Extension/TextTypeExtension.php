<?php

namespace Moovly\RecurlyBundle\Form\Extension;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;

class TextTypeExtension extends AbstractTypeExtension
{
    /** @var bool */
    private $usePlaceholder = true;

    /**
     * @param boolean $usePlaceholder
     */
    function __construct($usePlaceholder)
    {
        $this->usePlaceholder = $usePlaceholder;
    }

    /**
    * Returns the name of the type being extended.
    *
    * @return string The name of the type being extended
    */
    public function getExtendedType()
    {
        return 'text';
    }

    /**
     * @param FormView      $view
     * @param FormInterface $form
     * @param array         $options
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        if (!$this->usePlaceholder || !in_array($form->getConfig()->getType()->getName(), array('text'))) {
            return;
        }

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