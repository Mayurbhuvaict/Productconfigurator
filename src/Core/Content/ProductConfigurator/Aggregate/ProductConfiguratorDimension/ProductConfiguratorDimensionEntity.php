<?php declare(strict_types=1);

namespace NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorDimension;

use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;
use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorDimension\Aggregate\ProductConfiguratorDimensionTranslation\ProductConfiguratorDimensionTranslationCollection;
use Shopware\Core\Content\Media\MediaEntity;
use NwgncyProductConfigurator\Core\Content\ProductConfigurator\ProductConfiguratorEntity;

class ProductConfiguratorDimensionEntity extends Entity
{
    use EntityIdTrait;

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string|null
     */
    protected $title;

    /**
     * @var string|null
     */
    protected $dimensionMediaId;

    /**
     * @var string
     */
    protected $prodConfId;

    /**
     * @var ProductConfiguratorDimensionTranslationCollection
     */
    protected $translations;

    /**
     * @var MediaEntity|null
     */
    protected $dimensionMediaImage;

    /**
     * @var ProductConfiguratorEntity|null
     */
    protected $prodConf;

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

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    public function getDimensionMediaId(): ?string
    {
        return $this->dimensionMediaId;
    }

    public function setDimensionMediaId(?string $dimensionMediaId): void
    {
        $this->dimensionMediaId = $dimensionMediaId;
    }

    public function getProdConfId(): string
    {
        return $this->prodConfId;
    }

    public function setProdConfId(string $prodConfId): void
    {
        $this->prodConfId = $prodConfId;
    }

    public function getTranslations(): ProductConfiguratorDimensionTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(ProductConfiguratorDimensionTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }

    public function getDimensionMediaImage(): ?MediaEntity
    {
        return $this->dimensionMediaImage;
    }

    public function setDimensionMediaImage(?MediaEntity $dimensionMediaImage): void
    {
        $this->dimensionMediaImage = $dimensionMediaImage;
    }

    public function getProdConf(): ?ProductConfiguratorEntity
    {
        return $this->prodConf;
    }

    public function setProdConf(?ProductConfiguratorEntity $prodConf): void
    {
        $this->prodConf = $prodConf;
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