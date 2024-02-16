<?php declare(strict_types=1);

namespace NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorForm;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @package core
 * @method void                add(ProductConfiguratorFormEntity $entity)
 * @method void                set(string $key, ProductConfiguratorFormEntity $entity)
 * @method ProductConfiguratorFormEntity[]    getIterator()
 * @method ProductConfiguratorFormEntity[]    getElements()
 * @method ProductConfiguratorFormEntity|null get(string $key)
 * @method ProductConfiguratorFormEntity|null first()
 * @method ProductConfiguratorFormEntity|null last()
 */
class ProductConfiguratorFormCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductConfiguratorFormEntity::class;
    }
}