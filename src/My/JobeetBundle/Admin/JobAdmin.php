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
            ->add('type', 'text', array('label' => 'Post Type'))
            ->add('company', 'text', array('label' => 'Post Text'))
            ->add('url', 'text', array('label' => 'Post url'))
            ->add('position', 'text', array('label' => 'Post Position'))
            ->add('location', 'text', array('label' => 'Post Location'))
            ->add('description', 'text', array('label' => 'Post description'))
            ->add('email', 'text', array('label' => 'Post email'))
            ->add('expires_at', 'date', array('label' => 'Post expires_at'))
            ->add('created_at', 'date', array('label' => 'Post created_at'))
            ->add('updated_at', 'date', array('label' => 'Post updated_at'))
            ->add('category', 'entity', array('class' => 'My\JobeetBundle\Entity\Category'))

        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('type', 'text', array('label' => 'Post Type'))
            ->add('company', 'text', array('label' => 'Post Text'))
            ->add('url', 'text', array('label' => 'Post url'))
            ->add('position', 'text', array('label' => 'Post Position'))
            ->add('location', 'text', array('label' => 'Post Location'))
            ->add('description', 'text', array('label' => 'Post description'))
            ->add('email', 'text', array('label' => 'Post email'))
            ->add('expires_at', 'date', array('label' => 'Post expires_at'))
            ->add('created_at', 'date', array('label' => 'Post created_at'))
            ->add('updated_at', 'date', array('label' => 'Post updated_at'))
            ->add('category', 'entity', array('class' => 'My\JobeetBundle\Entity\Category'))
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('type', 'text', array('label' => 'Post Type'))
            ->add('company', 'text', array('label' => 'Post Text'))
            ->add('url', 'text', array('label' => 'Post url'))
            ->add('position', 'text', array('label' => 'Post Position'))
            ->add('location', 'text', array('label' => 'Post Location'))
            ->add('description', 'text', array('label' => 'Post description'))
            ->add('email', 'text', array('label' => 'Post email'))
            ->add('expires_at', 'date', array('label' => 'Post expires_at'))
            ->add('created_at', 'date', array('label' => 'Post created_at'))
            ->add('updated_at', 'date', array('label' => 'Post updated_at'))
            ->add('category', 'entity', array('class' => 'My\JobeetBundle\Entity\Category'))
        ;
    }
}