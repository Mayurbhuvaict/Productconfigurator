<?php declare(strict_types=1);

namespace NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorCoating;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @package core
 * @method void                add(ProductConfiguratorCoatingEntity $entity)
 * @method void                set(string $key, ProductConfiguratorCoatingEntity $entity)
 * @method ProductConfiguratorCoatingEntity[]    getIterator()
 * @method ProductConfiguratorCoatingEntity[]    getElements()
 * @method ProductConfiguratorCoatingEntity|null get(string $key)
 * @method ProductConfiguratorCoatingEntity|null first()
 * @method ProductConfiguratorCoatingEntity|null last()
 */
class ProductConfiguratorCoatingCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductConfiguratorCoatingEntity::class;
    }
}