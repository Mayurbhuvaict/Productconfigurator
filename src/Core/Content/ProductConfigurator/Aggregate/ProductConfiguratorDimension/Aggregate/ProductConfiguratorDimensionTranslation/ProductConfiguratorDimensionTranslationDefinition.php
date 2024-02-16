<?php declare(strict_types=1);

namespace NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorDimension\Aggregate\ProductConfiguratorDimensionTranslation;

use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorDimension\ProductConfiguratorDimensionDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\EntityTranslationDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;

class ProductConfiguratorDimensionTranslationDefinition extends EntityTranslationDefinition
{
    public const ENTITY_NAME = 'prod_conf_dime_tran';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getCollectionClass(): string
    {
        return ProductConfiguratorDimensionTranslationCollection::class;
    }

    public function getEntityClass(): string
    {
        return ProductConfiguratorDimensionTranslationEntity::class;
    }

    public function getParentDefinitionClass(): string
    {
        return ProductConfiguratorDimensionDefinition::class;
    }

    public function defineFields(): FieldCollection
    {
        return new FieldCollection([
            (new StringField('title', 'title')),
        ]);
    }
}