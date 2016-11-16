<?php

namespace Asrac\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class TexteType extends AbstractType {

	public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
            ->add('texteDesc', 'textarea');
    }

    public function getName() {
        return 'texte';
    }
}
