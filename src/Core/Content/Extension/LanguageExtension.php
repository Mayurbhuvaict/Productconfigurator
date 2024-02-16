<?php declare(strict_types=1);

namespace NwgncyProductConfigurator\Core\Content\Extension;

use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorAccessories\Aggregate\ProductConfiguratorAccessoriesTranslation\ProductConfiguratorAccessoriesTranslationDefinition;
use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorDimension\Aggregate\ProductConfiguratorDimensionTranslation\ProductConfiguratorDimensionTranslationDefinition;
use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorForm\Aggregate\ProductConfiguratorFormTranslation\ProductConfiguratorFormTranslationDefinition;
use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorMaterial\Aggregate\ProductConfiguratorMaterialTranslation\ProductConfiguratorMaterialTranslationDefinition;
use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorLock\Aggregate\ProductConfiguratorLockTranslation\ProductConfiguratorLockTranslationDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\EntityExtension;
use Shopware\Core\Framework\DataAbstractionLayer\Field\OneToManyAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
use Shopware\Core\System\Language\LanguageDefinition;
use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorTranslation\ProductConfiguratorTranslationDefinition;

class LanguageExtension extends EntityExtension
{
    public function extendFields(FieldCollection $collection): void
    {
        //Product configurator Translation
        $collection->add(
            new OneToManyAssociationField(
                'ProdConfTransId',
                ProductConfiguratorTranslationDefinition::class,
                'title',
            )
        );

        //Product configurator form Translation
        $collection->add(
            new OneToManyAssociationField(
                'ProdConfFormTransId',
                ProductConfiguratorFormTranslationDefinition::class,
                'name',
            )
        );

        //Product configurator material Translation
        $collection->add(
            new OneToManyAssociationField(
                'ProdConfMatTransId',
                ProductConfiguratorMaterialTranslationDefinition::class,
                'title',
            )
        );

        //Product configurator coating Translation
        $collection->add(
            new OneToManyAssociationField(
                'ProdConfDimTransId',
                ProductConfiguratorDimensionTranslationDefinition::class,
                'title',
            )
        );

        //Product configurator lock Translation
        $collection->add(
            new OneToManyAssociationField(
                'ProdConfLockTransId',
                ProductConfiguratorLockTranslationDefinition::class,
                'title',
            )
        );

        //Product configurator accesories Translation
        $collection->add(
            new OneToManyAssociationField(
                'ProdConfAcceTransId',
                ProductConfiguratorAccessoriesTranslationDefinition::class,
                'title',
            )
        );

    }
    public function getDefinitionClass(): string
    {
        return LanguageDefinition::class;
    }
}
