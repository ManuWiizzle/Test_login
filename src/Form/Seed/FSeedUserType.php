<?php

namespace App\Form\Seed;

use App\Entity\Seed\FSeedUser;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FSeedUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idProfil')
            ->add('login')
            ->add('nom')
            ->add('prenom')
            ->add('mdp')
            ->add('estAdmin')
            ->add('telephone')
            ->add('estSuper')
            ->add('email')
            ->add('estActive')
            ->add('mdpServeur')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => FSeedUser::class,
        ]);
    }
}
