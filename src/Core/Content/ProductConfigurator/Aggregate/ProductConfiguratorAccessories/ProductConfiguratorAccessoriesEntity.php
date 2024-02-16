<?php declare(strict_types=1);

namespace NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorAccessories;

use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;
use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorAccessories\Aggregate\ProductConfiguratorAccessoriesTranslation\ProductConfiguratorAccessoriesTranslationCollection;
use Shopware\Core\Content\Media\MediaEntity;
use NwgncyProductConfigurator\Core\Content\ProductConfigurator\ProductConfiguratorEntity;

class ProductConfiguratorAccessoriesEntity extends Entity
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
    protected $tooltip;

    /**
     * @var string
     */
    protected $prodConfId;

    /**
     * @var string|null
     */
    protected $accessoriesMediaId;

    /**
     * @var ProductConfiguratorAccessoriesTranslationCollection
     */
    protected $translations;

    /**
     * @var MediaEntity|null
     */
    protected $accessoriesMediaImage;

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

    public function getTooltip(): ?string
    {
        return $this->tooltip;
    }

    public function setTooltip(?string $tooltip): void
    {
        $this->tooltip = $tooltip;
    }

    public function getProdConfId(): string
    {
        return $this->prodConfId;
    }

    public function setProdConfId(string $prodConfId): void
    {
        $this->prodConfId = $prodConfId;
    }

    public function getAccessoriesMediaId(): ?string
    {
        return $this->accessoriesMediaId;
    }

    public function setAccessoriesMediaId(?string $accessoriesMediaId): void
    {
        $this->accessoriesMediaId = $accessoriesMediaId;
    }

    public function getTranslations(): ProductConfiguratorAccessoriesTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(ProductConfiguratorAccessoriesTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }

    public function getAccessoriesMediaImage(): ?MediaEntity
    {
        return $this->accessoriesMediaImage;
    }

    public function setAccessoriesMediaImage(?MediaEntity $accessoriesMediaImage): void
    {
        $this->accessoriesMediaImage = $accessoriesMediaImage;
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

    public function getTranslated(): ?array
    {
        return $this->translated;
    }

    public function setTranslated(?array $translated): void
    {
        $this->translated = $translated;
    }
}