<?php
/**
 * Created by PhpStorm.
 * User: meldon
 * Date: 23.02.18
 * Time: 12:32
 */

namespace AppBundle\Filter;


use AppBundle\Entity\Item;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ItemFilterType extends AbstractType
{

    /**
     * @inheritDoc
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('id', TextType::class, [
            'label' => 'Merge article id',
            'required' => false
        ]);

        $builder->add('statusParse', ChoiceType::class, [
            'choices' => [
                '-------' => null,
                Item::STATUS_PARSE_OK => Item::STATUS_PARSE_OK,
                Item::STATUS_PARSE_NOT_CATEGORY => Item::STATUS_PARSE_NOT_CATEGORY,
                Item::STATUS_PARSE_NOT_BASE_ELEMENT => Item::STATUS_PARSE_NOT_BASE_ELEMENT
            ],
            'required' => false,
        ]);

        $builder->add('category', ChoiceType::class, [
            'choices' => [
                '-------' => null,
                Item::CATEGORY_PASTE => Item::CATEGORY_PASTE,
                Item::CATEGORY_GIBKIE_KRUGI => Item::CATEGORY_GIBKIE_KRUGI,
                Item::CATEGORY_GOLOVKI => Item::CATEGORY_GOLOVKI,
                Item::CATEGORY_BRUSKI => Item::CATEGORY_BRUSKI,
                Item::CATEGORY_KANAT => Item::CATEGORY_KANAT,
                Item::CATEGORY_KARANDASH => Item::CATEGORY_KARANDASH,
                Item::CATEGORY_KORONKI_AND_SVERLA => Item::CATEGORY_KORONKI_AND_SVERLA,
                Item::CATEGORY_NADFILI => Item::CATEGORY_NADFILI,
                Item::CATEGORY_OTREZNIE_DISKI => Item::CATEGORY_OTREZNIE_DISKI,
                Item::CATEGORY_PALCHIKOVIE_FREZI => Item::CATEGORY_PALCHIKOVIE_FREZI,
                Item::CATEGORY_PROFILNIE_FREZI => Item::CATEGORY_PROFILNIE_FREZI,
                Item::CATEGORY_SEGMENTI => Item::CATEGORY_SEGMENTI,
                Item::CATEGORY_SHLIF_KRUGI => Item::CATEGORY_SHLIF_KRUGI,
                Item::CATEGORY_SHLIF_FREZI => Item::CATEGORY_SHLIF_FREZI,
                Item::CATEGORY_ALMAZ_V_OPRAVE => Item::CATEGORY_ALMAZ_V_OPRAVE,
                Item::CATEGORY_IGLY => Item::CATEGORY_IGLY,
                Item::CATEGORY_KRYGI_DLY_ZATOCHKI => Item::CATEGORY_KRYGI_DLY_ZATOCHKI,
                Item::CATEGORY_ELBOROVIE_KRUGI => Item::CATEGORY_ELBOROVIE_KRUGI,
            ],
            'required' => false,
        ]);

        $builder->setMethod('GET');

    }

    /**
     * @inheritDoc
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Filter\ItemFilter',
        ]);
    }

    public function getBlockPrefix()
    {
        return null;
    }


}