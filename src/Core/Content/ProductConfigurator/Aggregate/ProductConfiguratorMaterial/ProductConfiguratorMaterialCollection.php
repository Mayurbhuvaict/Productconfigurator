<?php declare(strict_types=1);

namespace NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorMaterial;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @package core
 * @method void                add(ProductConfiguratorMaterialEntity $entity)
 * @method void                set(string $key, ProductConfiguratorMaterialEntity $entity)
 * @method ProductConfiguratorMaterialEntity[]    getIterator()
 * @method ProductConfiguratorMaterialEntity[]    getElements()
 * @method ProductConfiguratorMaterialEntity|null get(string $key)
 * @method ProductConfiguratorMaterialEntity|null first()
 * @method ProductConfiguratorMaterialEntity|null last()
 */
class ProductConfiguratorMaterialCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductConfiguratorMaterialEntity::class;
    }
}