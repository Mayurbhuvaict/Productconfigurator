<?php declare(strict_types=1);

namespace NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorAccessories\Aggregate\ProductConfiguratorAccessoriesTranslation;

use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorAccessories\ProductConfiguratorAccessoriesDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\EntityTranslationDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;

class ProductConfiguratorAccessoriesTranslationDefinition extends EntityTranslationDefinition
{
    public const ENTITY_NAME = 'prod_conf_acce_translation';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getCollectionClass(): string
    {
        return ProductConfiguratorAccessoriesTranslationCollection::class;
    }

    public function getEntityClass(): string
    {
        return ProductConfiguratorAccessoriesTranslationEntity::class;
    }

    public function getParentDefinitionClass(): string
    {
        return ProductConfiguratorAccessoriesDefinition::class;
    }

    public function defineFields(): FieldCollection
    {
        return new FieldCollection([
            (new StringField('title', 'title')),
            (new StringField('tooltip', 'tooltip')),
        ]);
    }
}