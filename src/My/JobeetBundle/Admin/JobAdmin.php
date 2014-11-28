<?php

namespace My\JobeetBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class JobAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
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

        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper

            ->add('type')
            ->add('category')
            ->add('company')
            ->add('url')
            ->add('position')
            ->add('location')
            ->add('description')
            ->add('email')
            ->add('expires_at')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper

            ->add('type')
            ->add('category')
            ->add('company')
            ->add('url')
            ->add('position')
            ->add('location')
            ->add('description')
            ->add('email')
            ->add('expires_at')



        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper

            ->add('type')
            ->add('category')
            ->add('company')
            ->add('url')
            ->add('position')
            ->add('location')
            ->add('description')
            ->add('email')
            ->add('expires_at')


        ;
    }
}
