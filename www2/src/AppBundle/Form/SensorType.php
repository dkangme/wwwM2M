<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use \AppBundle\Entity\SensorRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class SensorType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $sensor_repo = $optons['wei'];
        
        $builder
            ->add('humanvalue')
            ->add('value')
            //->add('lastreport', 'datetime')
            ->add('description')
            ->add('alarmlevel')
            ->add('formula')
            ->add('channelid')
            ->add('savehistoryevery')
            //->add('sensortypesensortype')
            ->add('weiwei', EntityType::class, array(
                'class'=>'AppBundle:Wei',
                'choice_label'=>'nickname',
                'query_builder'=>function (SensorRepository $s) use ($options) {
                    return $s->findByUser($options['sensor']);
                }
            ));
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Sensor',
            'sensor' => '1'
        ));
    }
}
