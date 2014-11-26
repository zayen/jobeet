<?php

namespace My\JobeetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PostType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('FirstName')
            ->add('LasttName')
            ->add('email')
            ->add('cv', 'sonata_media_type', array(
                'provider' => 'sonata.media.provider.file',
                'context' => 'default'
            ))
            ->add('LettreM', 'sonata_media_type', array(
                'provider' => 'sonata.media.provider.file',
                'context' => 'default'
            ));;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'My\JobeetBundle\Entity\Post'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'my_jobeetbundle_post';
    }
}
