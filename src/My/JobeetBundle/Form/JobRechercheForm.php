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


class JobRechercheForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('motcle','text',array('label' => 'Mot-clé'));

    }


    public function getName()
      { return 'jobrecherche';}
}