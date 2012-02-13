<?php

namespace ServerGrove\LiveChatBundle\Form;

use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\AbstractType;

/**
 * Class OperatorType
 *
 * @author Ismael Ambrosi<ismael@servergrove.com>
 */
class OperatorType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('name');
        $builder->add('email', 'repeated', array(
            'label'   => 'e-mail',
            'options' => array('attr' => array('autocomplete' => 'off'))
        ));

        $builder->add('passwd', 'repeated', array(
            'type'     => 'password',
            'label'    => 'Password',
            'required' => true,
            'options'  => array('attr' => array('autocomplete' => 'off'))
        ));

        $builder->add('departments', null, array(
            'multiple' => true,
            'expanded' => false
        ));
        $builder->add('isActive');
    }

    public function getName()
    {
        return 'operator';
    }
}
