<?php declare(strict_types=1);

namespace NwgncyProductConfigurator\Core\Content\ProductConfigurator;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @package core
 * @method void                add(ProductConfiguratorEntity $entity)
 * @method void                set(string $key, ProductConfiguratorEntity $entity)
 * @method ProductConfiguratorEntity[]    getIterator()
 * @method ProductConfiguratorEntity[]    getElements()
 * @method ProductConfiguratorEntity|null get(string $key)
 * @method ProductConfiguratorEntity|null first()
 * @method ProductConfiguratorEntity|null last()
 */
class ProductConfiguratorCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductConfiguratorEntity::class;
    }
}