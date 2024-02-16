<?php declare(strict_types=1);

namespace NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorLock;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @package core
 * @method void                add(ProductConfiguratorLockEntity $entity)
 * @method void                set(string $key, ProductConfiguratorLockEntity $entity)
 * @method ProductConfiguratorLockEntity[]    getIterator()
 * @method ProductConfiguratorLockEntity[]    getElements()
 * @method ProductConfiguratorLockEntity|null get(string $key)
 * @method ProductConfiguratorLockEntity|null first()
 * @method ProductConfiguratorLockEntity|null last()
 */
class ProductConfiguratorLockCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductConfiguratorLockEntity::class;
    }
}