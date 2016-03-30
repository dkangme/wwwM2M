<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class SensorType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $sensor = $options['data'];

        $builder
            //->add('humanvalue')
            //->add('value')
            //->add('lastreport', 'datetime')
            ->add('description', TextType::class, array(
                'attr' => array(
                    'autofocus' => 'autofocus',
                    )))
            //->add('alarmlevel')
            ->add('formula')
            ->add('channelid', IntegerType::class, array(
                'label' => 'Port Number',
                'attr'  => array (
                    'min' => 1,
                    'max' => 8,
                    'placeholder' => 'Port 1 - 8'
                    ),
                'required' => true,
                
                ))
            ->add('savehistoryevery', IntegerType::class, array(
                'label' => 'Save history every (minutes)',
                'attr' => array(
                    'min' => 1,
                    'max' => 120,
                    'placeholder' => '1 - 120 minutes',
                    ),
                'required' => true,
                
                ))
            ->add('sensortypesensortype', EntityType::class, array(
                'class'=>'AppBundle:Sensortype',
                'choice_label' => 'description',
                'label' => 'Sensor Type'
                ))
            
            ->add('weiwei', EntityType::class, array(
                'class'=>'AppBundle:Wei',
                'choice_label'=>'nickname',
                'label' => 'MODWEI',
                'query_builder' => function(\AppBundle\Entity\WeiRepository $er) use ($sensor) {

                    return $er->findWeiCustomer($sensor);
                }
                ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Sensor'
        ));
    }
}
