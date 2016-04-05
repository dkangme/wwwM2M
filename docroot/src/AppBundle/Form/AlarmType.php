<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class AlarmType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('expression')
            //->add('lastalarm', 'datetime')
            ->add('nextalarminterval', IntegerType::class, array(
                'label' => 'Next alarm interval (minutes)'
                ))
            ->add('alarmlevel', ChoiceType::class, array(
                'choices' => array (
                    'Normal' => 0,
                    'Caution' => 1,
                    'Warning' => 2,
                    'Alert' => 3
                ),
                'label' => 'Alarm Level'
                ))
            ->add('description')
            ->add('sensorsensor', EntityType::class, array(
                'label' => 'Sensor Type',
                'class' => 'AppBundle:Sensor',
                'choice_label' => 'description'
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Alarm'
        ));
    }
}
