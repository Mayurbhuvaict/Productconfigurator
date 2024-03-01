<?php declare(strict_types=1);

namespace NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorForm\Aggregate\ProductConfiguratorFormTranslation;

use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorForm\ProductConfiguratorFormDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\EntityTranslationDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;

class ProductConfiguratorFormTranslationDefinition extends EntityTranslationDefinition
{
    public const ENTITY_NAME = 'prod_conf_form_translation';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getCollectionClass(): string
    {
        return ProductConfiguratorFormTranslationCollection::class;
    }

    public function getEntityClass(): string
    {
        return ProductConfiguratorFormTranslationEntity::class;
    }

    public function getParentDefinitionClass(): string
    {
        return ProductConfiguratorFormDefinition::class;
    }

    public function defineFields(): FieldCollection
    {
        return new FieldCollection([
            (new StringField('name', 'name')),
            (new StringField('description', 'description')),
            (new StringField('tooltip', 'tooltip')),
        ]);
    }
}