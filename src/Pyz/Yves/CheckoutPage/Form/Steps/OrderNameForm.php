<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Yves\CheckoutPage\Form\Steps;

use Generated\Shared\Transfer\QuoteTransfer;
use Spryker\Yves\Kernel\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

/**
 * @method \Pyz\Yves\CheckoutPage\CheckoutPageFactory getFactory()
 * @method \Pyz\Yves\CheckoutPage\CheckoutPageConfig getConfig()
 */
class OrderNameForm extends AbstractType
{
    protected const FIELD_ORDER_NAME = QuoteTransfer::ORDER_NAME;
    public const LABEL_ORDER_NAME = 'Order Name:';

    public function getBlockPrefix(): string
    {
        return 'orderNameForm';
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $this->addOrderNameField($builder);
    }

    protected function addOrderNameField(FormBuilderInterface $builder)
    {
        $builder->add(static::FIELD_ORDER_NAME, TextType::class, [
            'label' => static::LABEL_ORDER_NAME,
            'required' => true,
            'constraints' => [
                new NotBlank(),
                new Length(['max' => 100]),
                new Regex([
                    'pattern' => '/^[a-z0-9]*$/',
                    'message' => 'Order name can only contain lower case letters a-z and digits 0-9.',
                ])
            ],
        ]);

        return $this;
    }
}
