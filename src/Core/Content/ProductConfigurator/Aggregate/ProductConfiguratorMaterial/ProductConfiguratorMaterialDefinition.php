<?php
declare(strict_types=1);

namespace NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorMaterial;

use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorMaterial\Aggregate\ProductConfiguratorMaterialTranslation\ProductConfiguratorMaterialTranslationDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\ApiAware;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\FkField;
use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use NwgncyProductConfigurator\Core\Content\ProductConfigurator\ProductConfiguratorDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
use Shopware\Core\Content\Media\MediaDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\TranslatedField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\TranslationsAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\OneToOneAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\ManyToOneAssociationField;


class ProductConfiguratorMaterialDefinition extends EntityDefinition
{
    public const ENTITY_NAME = 'prod_conf_mat';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass(): string
    {
        return ProductConfiguratorMaterialEntity::class;
    }

    public function getCollectionClass(): string
    {
        return ProductConfiguratorMaterialCollection::class;
    }

    protected function defineFields(): FieldCollection
    {
        return new FieldCollection(
            [
                (new IdField('id', 'id'))->addFlags(new Required(), new PrimaryKey()),
                (new TranslatedField('title'))->addFlags(new ApiAware()),
                (new TranslatedField('tooltip'))->addFlags(new ApiAware()),

                (new FkField('prod_conf_id', 'prodConfId', ProductConfiguratorDefinition::class))->addFlags(new Required()),

                (new FkField('material_media_id', 'materialMediaId',MediaDefinition::class))->addFlags(new ApiAware()),

                //Translation Association field
                (new TranslationsAssociationField(ProductConfiguratorMaterialTranslationDefinition::class,'prod_conf_mat_id'))->addFlags(new ApiAware(),new Required()),

                new OneToOneAssociationField('materialMediaImage','material_media_id','id',MediaDefinition::class,false),

                new ManyToOneAssociationField('prodConf', 'prod_conf_id', ProductConfiguratorDefinition::class, 'id'),
            ]
        );
    }

}