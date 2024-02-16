<?php declare(strict_types=1);

namespace NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorAccessories;

use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorAccessories\Aggregate\ProductConfiguratorAccessoriesTranslation\ProductConfiguratorAccessoriesTranslationDefinition;
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

class ProductConfiguratorAccessoriesDefinition extends EntityDefinition
{
    public const ENTITY_NAME = 'prod_conf_acce';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass(): string
    {
        return ProductConfiguratorAccessoriesEntity::class;
    }

    public function getCollectionClass(): string
    {
        return ProductConfiguratorAccessoriesCollection::class;
    }

    public function defineFields(): FieldCollection
    {
        return new FieldCollection([
            (new IdField('id','id'))->addFlags(new Required(), new ApiAware(), new PrimaryKey()),
            (new TranslatedField('title'))->addFlags(new ApiAware()),
            (new TranslatedField('tooltip'))->addFlags(new ApiAware()),

            (new FkField('prod_conf_id', 'prodConfId', ProductConfiguratorDefinition::class))->addFlags(new Required()),

            (new FkField('accessories_media_id', 'accessoriesMediaId',MediaDefinition::class))->addFlags(new ApiAware()),

            //Translation Association field
            (new TranslationsAssociationField(ProductConfiguratorAccessoriesTranslationDefinition::class,'prod_conf_acce_id'))->addFlags(new ApiAware(),new Required()),


            new OneToOneAssociationField(
                'accessoriesMediaImage',
                'accessories_media_id',
                'id',
                MediaDefinition::class,
                false
            ),

            new ManyToOneAssociationField('prodConf', 'prod_conf_id', ProductConfiguratorDefinition::class, 'id'),
        ]);
    }
}