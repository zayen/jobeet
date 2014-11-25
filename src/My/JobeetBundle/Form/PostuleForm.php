<?php
/**
 * Created by PhpStorm.
 * User: sebsi
 * Date: 23/11/14
 * Time: 23:04
 */
namespace My\JobeetBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class PostuleForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email','email',array('label' => 'Votre-email'));
        $builder->add('cv', 'entity', array(
            'class' => 'MyJobeetBundle:Document',
            'property' => 'cv',
        ))  ->add('name')
            ->add('file');
        $builder->add('lettreMotivation','textarea',array('label' => 'LettreMotivation'));


    }


    public function getName()
      { return 'postule';}
}