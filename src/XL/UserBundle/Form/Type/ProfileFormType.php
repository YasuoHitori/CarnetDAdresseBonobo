<?php

namespace XL\UserBundle\Form\Type;

use FOS\UserBundle\Form\Type\ProfileFormType as BaseType;
use Symfony\Component\Form\FormBuilderInterface;

class ProfileFormType extends BaseType
{
    public function buildUserForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildUserForm($builder, $options);
        $builder->add('family')->add('age')->add('food')->add('race');
    }

    public function getName()
    {
        return 'xl_user_profile';
    }
}