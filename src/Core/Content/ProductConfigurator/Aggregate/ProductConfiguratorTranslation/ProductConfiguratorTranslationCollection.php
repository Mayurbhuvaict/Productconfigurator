<?php declare(strict_types=1);

namespace NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorTranslation;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @package core
 * @method void                add(ProductConfiguratorTranslationEntity $entity)
 * @method void                set(string $key, ProductConfiguratorTranslationEntity $entity)
 * @method ProductConfiguratorTranslationEntity[]    getIterator()
 * @method ProductConfiguratorTranslationEntity[]    getElements()
 * @method ProductConfiguratorTranslationEntity|null get(string $key)
 * @method ProductConfiguratorTranslationEntity|null first()
 * @method ProductConfiguratorTranslationEntity|null last()
 */
class ProductConfiguratorTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductConfiguratorTranslationEntity::class;
    }
}