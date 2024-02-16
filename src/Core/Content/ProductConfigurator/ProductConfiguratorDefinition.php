<?php
declare(strict_types=1);

namespace NwgncyProductConfigurator\Core\Content\ProductConfigurator;

use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorAccessories\ProductConfiguratorAccessoriesDefinition;
use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorCoating\ProductConfiguratorCoatingDefinition;
use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorDimension\ProductConfiguratorDimensionDefinition;
use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorForm\ProductConfiguratorFormDefinition;
use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorLock\ProductConfiguratorLockDefinition;
use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorMaterial\ProductConfiguratorMaterialDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\ApiAware;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorTranslation\ProductConfiguratorTranslationDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
use Shopware\Core\Framework\DataAbstractionLayer\Field\TranslatedField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\TranslationsAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\OneToManyAssociationField;


class ProductConfiguratorDefinition extends EntityDefinition
{
    public const ENTITY_NAME = 'prod_conf';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass(): string
    {
        return ProductConfiguratorEntity::class;
    }

    public function getCollectionClass(): string
    {
        return ProductConfiguratorCollection::class;
    }

    protected function defineFields(): FieldCollection
    {
        return new FieldCollection(
            [
                (new IdField('id', 'id'))->addFlags(new Required(), new PrimaryKey()),
                (new TranslatedField('title'))->addFlags(new ApiAware()),
                (new TranslatedField('subtitle'))->addFlags(new ApiAware()),

                //Association for Forms STEP1
                new OneToManyAssociationField('productConfiguratorForms', ProductConfiguratorFormDefinition::class, 'prod_conf_id'),

                //Association for Materials STEP2
                new OneToManyAssociationField('productConfiguratorMaterials', ProductConfiguratorMaterialDefinition::class, 'prod_conf_id'),

                //Association for Coatings STEP3
                new OneToManyAssociationField('productConfiguratorCoatings', ProductConfiguratorCoatingDefinition::class, 'prod_conf_id'),

                //Association for Dimensions STEP4
                new OneToManyAssociationField('productConfiguratorDimensions', ProductConfiguratorDimensionDefinition::class, 'prod_conf_id'),

                //Association for Locks STEP5
                new OneToManyAssociationField('productConfiguratorLocks', ProductConfiguratorLockDefinition::class, 'prod_conf_id'),

                 //Association for Locks STEP6
                 new OneToManyAssociationField('productConfiguratorAccessoriess', ProductConfiguratorAccessoriesDefinition::class, 'prod_conf_id'),

                //Translation Association field
                (new TranslationsAssociationField(ProductConfiguratorTranslationDefinition::class,'product_configurator_id'))->addFlags(new ApiAware(),new Required()),

            ]
        );
    }

}