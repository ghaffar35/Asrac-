<?php

namespace Asrac\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', 'text')
            ->add('content', 'textarea')
			->add('image', 'file', array(
                    'data_class' => null
			))
			->add('theme', 'text')
			->add('dateArt','date', array(
    			'widget' => 'choice',
				'data' => new \DateTime()
			));
    }

    public function getName()
    {
        return 'article';
    }
}
