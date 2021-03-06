<?php

namespace App\Form;

use App\Entity\University;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UniversityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('image')
            ->add('street')
            ->add('city')
            ->add('postalCode')
            ->add('referentMail')
            ->add('description')
            ->add('country', null, ['choice_label' => 'name'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => University::class,
        ]);
    }
}
