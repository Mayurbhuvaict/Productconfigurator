<?php declare(strict_types=1);

namespace NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorDimension\Aggregate\ProductConfiguratorDimensionTranslation;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @package core
 * @method void                add(ProductConfiguratorDimensionTranslationEntity $entity)
 * @method void                set(string $key, ProductConfiguratorDimensionTranslationEntity $entity)
 * @method ProductConfiguratorDimensionTranslationEntity[]    getIterator()
 * @method ProductConfiguratorDimensionTranslationEntity[]    getElements()
 * @method ProductConfiguratorDimensionTranslationEntity|null get(string $key)
 * @method ProductConfiguratorDimensionTranslationEntity|null first()
 * @method ProductConfiguratorDimensionTranslationEntity|null last()
 */
class ProductConfiguratorDimensionTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductConfiguratorDimensionTranslationEntity::class;
    }
}