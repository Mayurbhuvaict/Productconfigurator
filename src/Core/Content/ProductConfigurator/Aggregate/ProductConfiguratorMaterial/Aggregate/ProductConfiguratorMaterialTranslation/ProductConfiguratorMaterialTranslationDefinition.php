<?php declare(strict_types=1);

namespace NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorMaterial\Aggregate\ProductConfiguratorMaterialTranslation;

use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorMaterial\ProductConfiguratorMaterialDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\EntityTranslationDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;

class ProductConfiguratorMaterialTranslationDefinition extends EntityTranslationDefinition
{
    public const ENTITY_NAME = 'prod_conf_mat_translation';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getCollectionClass(): string
    {
        return ProductConfiguratorMaterialTranslationCollection::class;
    }

    public function getEntityClass(): string
    {
        return ProductConfiguratorMaterialTranslationEntity::class;
    }

    public function getParentDefinitionClass(): string
    {
        return ProductConfiguratorMaterialDefinition::class;
    }

    public function defineFields(): FieldCollection
    {
        return new FieldCollection([
            (new StringField('title', 'title')),
            (new StringField('tooltip', 'tooltip')),
        ]);
    }
}