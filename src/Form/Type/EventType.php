<?php

namespace Asrac\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class EventType extends AbstractType {
	
	public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
            ->add('title', 'text')
            ->add('lieu', 'text')
			->add('desc', 'textarea')
			->add('image', 'file', array(
                    'data_class' => null
			))
			->add('dateEv','date', array(
    			'widget' => 'choice',
				'data' => new \DateTime()
			));
    }

    public function getName() {
        return 'event';
    }
}
