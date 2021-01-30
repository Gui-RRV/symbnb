<?php

namespace App\Form;

use App\Entity\User;
use App\Form\ApplicationType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class RegistrationType extends ApplicationType
{


   

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName',TextType::class, $this->getConfiguration("Prénom","votre prénom..."))
            ->add('lastName',TextType::class, $this->getConfiguration("Nom","votre nom de famille..."))
            ->add('email',EmailType::class, $this->getConfiguration("Email","votre email..."))
            ->add('picture', UrlType::class, $this->getConfiguration("Photo de profil","URL de votre avatar..."))
            ->add('hash', PasswordType::class, $this->getConfiguration("Mot de passe","Choissisez un bon mot de passe !"))
            ->add('passwordConfirm', PasswordType::class, $this->getConfiguration("Confirmation de mot de passe","Confirmez votre mot de passe !"))
            ->add('introduction',TextType::class, $this->getConfiguration("Introduction","Présentez-vous en quelques mots !"))
            ->add('description', TextareaType::class, $this->getConfiguration("Description détaillé","Il est temps de donner bonne impression ! (Donnez des détails)"))
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
