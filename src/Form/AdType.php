<?php

namespace App\Form;

use App\Entity\Ad;
use App\Form\ImageType;
use App\Form\ApplicationType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class AdType extends ApplicationType
{
    

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, $this->getConfiguration('Titre','Que voulez vendre ?') )
            ->add('slug', TextType::class, $this->getConfiguration('Chaine URL','Le slug -> addresse web (peut être laissé vide)',['required' => false]) )
            ->add('price', MoneyType::class,$this->getConfiguration('Prix par nuit','Quel est le prix de votre bien pour une nuit ?'))
            ->add('introduction', TextType::class, $this->getConfiguration('L\'introduction','Donnez une description de votre annonce'))
            ->add('contenu', TextareaType::class, $this->getConfiguration('Le contenu','Donnez nous plus de détails ! Donnez envie !'))
            ->add('coverImage', UrlType::class, $this->getConfiguration('Image','donnez l\'URL de l\'image de votre bien qui doit être stylé ! '))
            ->add('rooms', IntegerType::class, $this->getConfiguration('Nombre de chambre','le nombre de chambre disponibles'))
            ->add('images', CollectionType::class,['entry_type' => ImageType::class,'allow_add' => true, 'allow_delete' => true])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Ad::class,
        ]);
    }
}
