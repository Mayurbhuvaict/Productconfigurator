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
     * @var string
     */
    protected $titleMaterial;

    /**
     * @var string|null
     */
    protected $subtitleMaterial;

    /**
     * @var string
     */
    protected $titleCoating;

    /**
     * @var string|null
     */
    protected $subtitleCoating;

    /**
     * @var string
     */
    protected $titleDimensions;

    /**
     * @var string|null
     */
    protected $subtitleDimensions;

    /**
     * @var string
     */
    protected $titleClosure;

    /**
     * @var string|null
     */
    protected $subtitleClosure;

    /**
     * @var string
     */
    protected $titleAccessories;

    /**
     * @var string|null
     */
    protected $subtitleAccessories;

    /**
     * @var string
     */
    protected $titleNotes;

    /**
     * @var string|null
     */
    protected $subtitleNotes;

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

    public function getTitleMaterial(): string
    {
        return $this->titleMaterial;
    }

    public function setTitleMaterial(string $titleMaterial): void
    {
        $this->titleMaterial = $titleMaterial;
    }

    public function getSubtitleMaterial(): ?string
    {
        return $this->subtitleMaterial;
    }

    public function setSubtitleMaterial(?string $subtitleMaterial): void
    {
        $this->subtitleMaterial = $subtitleMaterial;
    }

    public function getTitleCoating(): string
    {
        return $this->titleCoating;
    }

    public function setTitleCoating(string $titleCoating): void
    {
        $this->titleCoating = $titleCoating;
    }

    public function getSubtitleCoating(): ?string
    {
        return $this->subtitleCoating;
    }

    public function setSubtitleCoating(?string $subtitleCoating): void
    {
        $this->subtitleCoating = $subtitleCoating;
    }

    public function getTitleDimensions(): string
    {
        return $this->titleDimensions;
    }

    public function setTitleDimensions(string $titleDimensions): void
    {
        $this->titleDimensions = $titleDimensions;
    }

    public function getSubtitleDimensions(): ?string
    {
        return $this->subtitleDimensions;
    }

    public function setSubtitleDimensions(?string $subtitleDimensions): void
    {
        $this->subtitleDimensions = $subtitleDimensions;
    }

    public function getTitleClosure(): string
    {
        return $this->titleClosure;
    }

    public function setTitleClosure(string $titleClosure): void
    {
        $this->titleClosure = $titleClosure;
    }

    public function getSubtitleClosure(): ?string
    {
        return $this->subtitleClosure;
    }

    public function setSubtitleClosure(?string $subtitleClosure): void
    {
        $this->subtitleClosure = $subtitleClosure;
    }

    public function getTitleAccessories(): string
    {
        return $this->titleAccessories;
    }

    public function setTitleAccessories(string $titleAccessories): void
    {
        $this->titleAccessories = $titleAccessories;
    }

    public function getSubtitleAccessories(): ?string
    {
        return $this->subtitleAccessories;
    }

    public function setSubtitleAccessories(?string $subtitleAccessories): void
    {
        $this->subtitleAccessories = $subtitleAccessories;
    }

    public function getTitleNotes(): string
    {
        return $this->titleNotes;
    }

    public function setTitleNotes(string $titleNotes): void
    {
        $this->titleNotes = $titleNotes;
    }

    public function getSubtitleNotes(): ?string
    {
        return $this->subtitleNotes;
    }

    public function setSubtitleNotes(?string $subtitleNotes): void
    {
        $this->subtitleNotes = $subtitleNotes;
    }

    public function getProductConfiguratorForms(): ?ProductConfiguratorFormCollection
    {
        return $this->productConfiguratorForms;
    }

    public function setProductConfiguratorForms(?ProductConfiguratorFormCollection $productConfiguratorForms): void
    {
        $this->productConfiguratorForms = $productConfiguratorForms;
    }

    public function getProductConfiguratorMaterials(): ?ProductConfiguratorMaterialCollection
    {
        return $this->productConfiguratorMaterials;
    }

    public function setProductConfiguratorMaterials(?ProductConfiguratorMaterialCollection $productConfiguratorMaterials): void
    {
        $this->productConfiguratorMaterials = $productConfiguratorMaterials;
    }

    public function getProductConfiguratorCoatings(): ?ProductConfiguratorCoatingCollection
    {
        return $this->productConfiguratorCoatings;
    }

    public function setProductConfiguratorCoatings(?ProductConfiguratorCoatingCollection $productConfiguratorCoatings): void
    {
        $this->productConfiguratorCoatings = $productConfiguratorCoatings;
    }

    public function getProductConfiguratorDimensions(): ?ProductConfiguratorDimensionCollection
    {
        return $this->productConfiguratorDimensions;
    }

    public function setProductConfiguratorDimensions(?ProductConfiguratorDimensionCollection $productConfiguratorDimensions): void
    {
        $this->productConfiguratorDimensions = $productConfiguratorDimensions;
    }

    public function getProductConfiguratorLocks(): ?ProductConfiguratorLockCollection
    {
        return $this->productConfiguratorLocks;
    }

    public function setProductConfiguratorLocks(?ProductConfiguratorLockCollection $productConfiguratorLocks): void
    {
        $this->productConfiguratorLocks = $productConfiguratorLocks;
    }

    public function getProductConfiguratorAccessoriess(): ?ProductConfiguratorAccessoriesCollection
    {
        return $this->productConfiguratorAccessoriess;
    }

    public function setProductConfiguratorAccessoriess(?ProductConfiguratorAccessoriesCollection $productConfiguratorAccessoriess): void
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