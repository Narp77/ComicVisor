<?php

namespace comicvisorBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class usuarioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nick','text',array("required"=>true))
            ->add('pass','password',array("required"=>true))
            ->add('correo','email',array("required"=>true))
            ->add('fechaNac', 'birthday')
            //->add('tipo')
            //->add('descripcion')
            ->add('enviar','submit')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'comicvisorBundle\Entity\usuario'
        ));
    }
}
