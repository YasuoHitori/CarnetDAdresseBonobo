<?php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserUpdateType extends AbstractType

{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email', EmailType::class, array('required' => false))
            ->add('Name', null,  array('required' => false))
            ->add('Age', null,  array('required' => false))
            ->add('Family', null,  array('required' => false))
            ->add('Race', null,  array('required' => false))
            ->add('Food', null,  array('required' => false))
            ->add('Update', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UserBundle\Entity\User'
        ));
    }

    public function getBlockPrefix()
    {
        return 'userbundle_user';
    }
}
