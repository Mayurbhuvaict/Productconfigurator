<?php declare(strict_types=1);

namespace NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorDimension;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @package core
 * @method void                add(ProductConfiguratorDimensionEntity $entity)
 * @method void                set(string $key, ProductConfiguratorDimensionEntity $entity)
 * @method ProductConfiguratorDimensionEntity[]    getIterator()
 * @method ProductConfiguratorDimensionEntity[]    getElements()
 * @method ProductConfiguratorDimensionEntity|null get(string $key)
 * @method ProductConfiguratorDimensionEntity|null first()
 * @method ProductConfiguratorDimensionEntity|null last()
 */
class ProductConfiguratorDimensionCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductConfiguratorDimensionEntity::class;
    }
}