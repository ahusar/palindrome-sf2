<?php

namespace Acme\DemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class PalindromeType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('word', 'text', array(
            'required' => true,
            'label' => 'Insert your word here'
        ));
        $builder->add('Submit', 'submit');
    }

    public function getName()
    {
        return 'palindrome_form';
    }

}