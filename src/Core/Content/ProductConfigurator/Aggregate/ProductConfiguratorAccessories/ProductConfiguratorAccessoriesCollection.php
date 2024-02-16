<?php declare(strict_types=1);

namespace NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorAccessories;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @package core
 * @method void                add(ProductConfiguratorAccessoriesEntity $entity)
 * @method void                set(string $key, ProductConfiguratorAccessoriesEntity $entity)
 * @method ProductConfiguratorAccessoriesEntity[]    getIterator()
 * @method ProductConfiguratorAccessoriesEntity[]    getElements()
 * @method ProductConfiguratorAccessoriesEntity|null get(string $key)
 * @method ProductConfiguratorAccessoriesEntity|null first()
 * @method ProductConfiguratorAccessoriesEntity|null last()
 */
class ProductConfiguratorAccessoriesCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductConfiguratorAccessoriesEntity::class;
    }
}