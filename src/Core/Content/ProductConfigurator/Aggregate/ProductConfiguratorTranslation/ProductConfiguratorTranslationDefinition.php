<?php declare(strict_types=1);

namespace NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorTranslation;

use Shopware\Core\Framework\DataAbstractionLayer\EntityTranslationDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\ApiAware;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\TranslatedField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
use NwgncyProductConfigurator\Core\Content\ProductConfigurator\ProductConfiguratorDefinition;

class ProductConfiguratorTranslationDefinition extends EntityTranslationDefinition
{
    public const ENTITY_NAME = 'prod_conf_translation';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass(): string
    {
        return ProductConfiguratorTranslationEntity::class;
    }

    public function since(): ?string
    {
        return '6.0.0.0';
    }

    protected function getParentDefinitionClass(): string
    {
        return ProductConfiguratorDefinition::class;
    }

    protected function defineFields(): FieldCollection
    {
        return new FieldCollection(
            [
                (new StringField('title', 'title'))->addFlags(new Required()),
                (new StringField('subtitle', 'subtitle')),

                (new StringField('title_material', 'titleMaterial')),
                (new StringField('subtitle_material', 'subtitleMaterial')),

                (new StringField('title_coating', 'titleCoating')),
                (new StringField('subtitle_coating', 'subtitleCoating')),

                (new StringField('title_dimensions', 'titleDimensions')),
                (new StringField('subtitle_dimensions', 'subtitleDimensions')),

                (new StringField('title_closure', 'titleClosure')),
                (new StringField('subtitle_closure', 'subtitleClosure')),


                (new StringField('title_accessories', 'titleAccessories')),
                (new StringField('subtitle_accessories', 'subtitleAccessories')),

                (new StringField('title_notes', 'titleNotes')),
                (new StringField('subtitle_notes', 'subtitleNotes')),

            ]
        );
    }
}
