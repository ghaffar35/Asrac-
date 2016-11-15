<?php

namespace Asrac\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class SlideType extends AbstractType {

	public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
            ->add('title', 'text')
            ->add('subTitle', 'text')
			->add('image', 'file', array(
                    'data_class' => null
			));
    }

    public function getName() {
        return 'slide';
    }
}
