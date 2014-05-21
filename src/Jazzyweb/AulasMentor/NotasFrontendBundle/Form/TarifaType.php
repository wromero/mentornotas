<?php

namespace Jazzyweb\AulasMentor\NotasFrontendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TarifaType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('periodo')
            ->add('precio')
            ->add('validoDesde')
            ->add('validoHasta')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jazzyweb\AulasMentor\NotasFrontendBundle\Entity\Tarifa'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'jazzyweb_aulasmentor_notasfrontendbundle_tarifa';
    }
}
