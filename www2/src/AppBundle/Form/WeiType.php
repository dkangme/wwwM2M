<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class WeiType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nickname')
            //->add('lastreport', 'datetime')
            ->add('imei', TextType::class, array(
                'label'=>'IMEI'
            ))
            ->add('description')
            ->add('operator', TextType::class, array(
                'label'=>'Telephone operator'
            ))
            //->add('activationdate', 'datetime')
            //->add('modificationdate', 'datetime')
            ->add('chipnumber', TextType::class, array(
                'label'=>'SIM Number'
            ))
            ->add('modweiStatus', EntityType::class, array(
                'class'=>'AppBundle:ModweiStatus',
                'choice_label'=>'description',
                'label'=>'Status'
            ))
            ->add('locationlocation', EntityType::class, array(
                'class'=>'AppBundle:Location',
                'choice_label'=>'descrip',
                'label'=>'Location'
            ))
            //->add('customer')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Wei'
        ));
    }
}
