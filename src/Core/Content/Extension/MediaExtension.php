<?php declare(strict_types=1);

namespace NwgncyProductConfigurator\Core\Content\Extension;

use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorAccessories\ProductConfiguratorAccessoriesDefinition;
use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorDimension\ProductConfiguratorDimensionDefinition;
use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorForm\ProductConfiguratorFormDefinition;
use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorLock\ProductConfiguratorLockDefinition;
use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorMaterial\ProductConfiguratorMaterialDefinition;
use Shopware\Core\Content\Media\MediaDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\EntityExtension;
use Shopware\Core\Framework\DataAbstractionLayer\Field\OneToOneAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;

class MediaExtension extends EntityExtension
{
    public function extendFields(FieldCollection $collection): void
    {
        //Form Media
        $collection->add(
            new OneToOneAssociationField(
                'imageFormMedia',
                'id',
                'form_media_id',
                ProductConfiguratorFormDefinition::class,
                false
            )
        );

        //Material Media
        $collection->add(
            new OneToOneAssociationField(
                'imageMaterialMedia',
                'id',
                'material_media_id',
                ProductConfiguratorMaterialDefinition::class,
                false
            )
        );

        //Dimension Media
        $collection->add(
            new OneToOneAssociationField(
                'imageDimensionMedia',
                'id',
                'dimension_media_id',
                ProductConfiguratorDimensionDefinition::class,
                false
            )
        );

        //Lock Media
        $collection->add(
            new OneToOneAssociationField(
                'imageLockMedia',
                'id',
                'lock_media_id',
                ProductConfiguratorLockDefinition::class,
                false
            )
        );

        //Accessories Media
        $collection->add(
            new OneToOneAssociationField(
                'imageAccessoriesMedia',
                'id',
                'accessories_media_id',
                ProductConfiguratorAccessoriesDefinition::class,
                false
            )
        );

    }
    public function getDefinitionClass(): string
    {
        return MediaDefinition::class;
    }
}

