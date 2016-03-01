<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

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
            ->add('lastreport', 'datetime')
            ->add('imei')
            ->add('description')
            ->add('operator')
            ->add('activationdate', 'datetime')
            ->add('modificationdate', 'datetime')
            ->add('chipnumber')
            ->add('modweiStatus')
            ->add('locationlocation')
            ->add('customer')
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
