<?php


namespace My\JobeetBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class JobAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('type')
            ->add('company')
            ->add('url')
            ->add('position')
            ->add('location')
            ->add('description')
            ->add('email')
            ->add('expires_at')
            ->add('created_at')
            ->add('updated_at')
            ->add('category', 'entity', array('class' => 'My\JobeetBundle\Entity\Category'))

        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('type')
            ->add('company')
            ->add('url')
            ->add('position')
            ->add('location')
            ->add('description')
            ->add('email')
            ->add('expires_at')
            ->add('created_at')
            ->add('updated_at')
            ->add('category', 'entity', array('class' => 'My\JobeetBundle\Entity\Category'))

        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('type')
            ->add('company')
            ->add('url')
            ->add('position')
            ->add('location')
            ->add('description')
            ->add('email')
            ->add('expires_at')
            ->add('created_at')
            ->add('updated_at')
            ->add('category', 'entity', array('class' => 'My\JobeetBundle\Entity\Category'))

        ;
    }
}