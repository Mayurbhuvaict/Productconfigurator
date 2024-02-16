<?php declare(strict_types=1);

namespace NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorLock\Aggregate\ProductConfiguratorLockTranslation;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @package core
 * @method void                add(ProductConfiguratorLockTranslationEntity $entity)
 * @method void                set(string $key, ProductConfiguratorLockTranslationEntity $entity)
 * @method ProductConfiguratorLockTranslationEntity[]    getIterator()
 * @method ProductConfiguratorLockTranslationEntity[]    getElements()
 * @method ProductConfiguratorLockTranslationEntity|null get(string $key)
 * @method ProductConfiguratorLockTranslationEntity|null first()
 * @method ProductConfiguratorLockTranslationEntity|null last()
 */
class ProductConfiguratorLockTranslationCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return ProductConfiguratorLockTranslationEntity::class;
    }
}