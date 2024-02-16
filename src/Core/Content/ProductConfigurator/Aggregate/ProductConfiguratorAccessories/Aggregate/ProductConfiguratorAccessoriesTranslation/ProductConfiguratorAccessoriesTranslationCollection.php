<?php declare(strict_types=1);

namespace NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorAccessories\Aggregate\ProductConfiguratorAccessoriesTranslation;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @package core
 * @method void                add(ProductConfiguratorAccessoriesTranslationEntity $entity)
 * @method void                set(string $key, ProductConfiguratorAccessoriesTranslationEntity $entity)
 * @method ProductConfiguratorAccessoriesTranslationEntity[]    getIterator()
 * @method ProductConfiguratorAccessoriesTranslationEntity[]    getElements()
 * @method ProductConfiguratorAccessoriesTranslationEntity|null get(string $key)
 * @method ProductConfiguratorAccessoriesTranslationEntity|null first()
 * @method ProductConfiguratorAccessoriesTranslationEntity|null last()
 */
class ProductConfiguratorAccessoriesTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductConfiguratorAccessoriesTranslationEntity::class;
    }
}