<?php declare(strict_types=1);

namespace NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorDimension;

use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorDimension\Aggregate\ProductConfiguratorDimensionTranslation\ProductConfiguratorDimensionTranslationDefinition;
use NwgncyProductConfigurator\Core\Content\ProductConfigurator\ProductConfiguratorDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\FkField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\ApiAware;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Content\Media\MediaDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\ManyToOneAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\OneToOneAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\TranslatedField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\TranslationsAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;

class ProductConfiguratorDimensionDefinition extends EntityDefinition
{
    public const ENTITY_NAME = 'prod_conf_dime';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass(): string
    {
        return ProductConfiguratorDimensionEntity::class;
    }

    public function getCollectionClass(): string
    {
        return ProductConfiguratorDimensionCollection::class;
    }

    public function defineFields(): FieldCollection
    {
        return new FieldCollection([
            (new IdField('id','id'))->addFlags(new Required(), new ApiAware(), new PrimaryKey()),
            (new TranslatedField('title'))->addFlags(new ApiAware()),

            (new FkField('dimension_media_id', 'dimensionMediaId',MediaDefinition::class))->addFlags(new ApiAware()),

            (new FkField('prod_conf_id', 'prodConfId', ProductConfiguratorDefinition::class))->addFlags(new Required()),

            //Translation Association field
            (new TranslationsAssociationField(ProductConfiguratorDimensionTranslationDefinition::class,'product_conf_dime_id'))->addFlags(new ApiAware(),new Required()),

            new OneToOneAssociationField('dimensionMediaImage','dimension_media_id','id',MediaDefinition::class,false),

            new ManyToOneAssociationField('prodConf', 'prod_conf_id', ProductConfiguratorDefinition::class, 'id'),
        ]);
    }
}