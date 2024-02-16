<?php declare(strict_types=1);

namespace NwgncyProductConfigurator\Core\Content\ProductConfigurator;

use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;
use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorForm\ProductConfiguratorFormCollection;
use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorMaterial\ProductConfiguratorMaterialCollection;
use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorCoating\ProductConfiguratorCoatingCollection;
use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorDimension\ProductConfiguratorDimensionCollection;
use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorLock\ProductConfiguratorLockCollection;
use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorAccessories\ProductConfiguratorAccessoriesCollection;
use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

class ProductConfiguratorEntity extends Entity
{
    use EntityIdTrait;

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string|null
     */
    protected $subtitle;

    /**
     * @var ProductConfiguratorFormCollection|null
     */
    protected $productConfiguratorForms;

    /**
     * @var ProductConfiguratorMaterialCollection|null
     */
    protected $productConfiguratorMaterials;

    /**
     * @var ProductConfiguratorCoatingCollection|null
     */
    protected $productConfiguratorCoatings;

    /**
     * @var ProductConfiguratorDimensionCollection|null
     */
    protected $productConfiguratorDimensions;

    /**
     * @var ProductConfiguratorLockCollection|null
     */
    protected $productConfiguratorLocks;

    /**
     * @var ProductConfiguratorAccessoriesCollection|null
     */
    protected $productConfiguratorAccessoriess;

    /**
     * @var EntityCollection
     */
    protected $translations;

    /**
     * @var \DateTimeInterface
     */
    protected $createdAt;

    /**
     * @var \DateTimeInterface|null
     */
    protected $updatedAt;

    /**
     * @var array|null
     */
    protected $translated;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getSubtitle(): ?string
    {
        return $this->subtitle;
    }

    public function setSubtitle(?string $subtitle): void
    {
        $this->subtitle = $subtitle;
    }

    public function getProductConfiguratorForms(): ?ProductConfiguratorFormCollection
    {
        return $this->productConfiguratorForms;
    }

    public function setProductConfiguratorForms(ProductConfiguratorFormCollection $productConfiguratorForms): void
    {
        $this->productConfiguratorForms = $productConfiguratorForms;
    }

    public function getProductConfiguratorMaterials(): ?ProductConfiguratorMaterialCollection
    {
        return $this->productConfiguratorMaterials;
    }

    public function setProductConfiguratorMaterials(ProductConfiguratorMaterialCollection $productConfiguratorMaterials): void
    {
        $this->productConfiguratorMaterials = $productConfiguratorMaterials;
    }

    public function getProductConfiguratorCoatings(): ?ProductConfiguratorCoatingCollection
    {
        return $this->productConfiguratorCoatings;
    }

    public function setProductConfiguratorCoatings(ProductConfiguratorCoatingCollection $productConfiguratorCoatings): void
    {
        $this->productConfiguratorCoatings = $productConfiguratorCoatings;
    }

    public function getProductConfiguratorDimensions(): ?ProductConfiguratorDimensionCollection
    {
        return $this->productConfiguratorDimensions;
    }

    public function setProductConfiguratorDimensions(ProductConfiguratorDimensionCollection $productConfiguratorDimensions): void
    {
        $this->productConfiguratorDimensions = $productConfiguratorDimensions;
    }

    public function getProductConfiguratorLocks(): ?ProductConfiguratorLockCollection
    {
        return $this->productConfiguratorLocks;
    }

    public function setProductConfiguratorLocks(ProductConfiguratorLockCollection $productConfiguratorLocks): void
    {
        $this->productConfiguratorLocks = $productConfiguratorLocks;
    }

    public function getProductConfiguratorAccessoriess(): ?ProductConfiguratorAccessoriesCollection
    {
        return $this->productConfiguratorAccessoriess;
    }

    public function setProductConfiguratorAccessoriess(ProductConfiguratorAccessoriesCollection $productConfiguratorAccessoriess): void
    {
        $this->productConfiguratorAccessoriess = $productConfiguratorAccessoriess;
    }

    public function getTranslations(): EntityCollection
    {
        return $this->translations;
    }

    public function setTranslations(EntityCollection $translations): void
    {
        $this->translations = $translations;
    }

    public function getCreatedAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    public function getTranslated(): array
    {
        return $this->translated;
    }

    public function setTranslated(?array $translated): void
    {
        $this->translated = $translated;
    }
}