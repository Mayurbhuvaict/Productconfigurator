<?php declare(strict_types=1);

namespace NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorLock;

use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;
use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;
use Shopware\Core\Content\Media\MediaEntity;
use NwgncyProductConfigurator\Core\Content\ProductConfigurator\ProductConfiguratorEntity;

class ProductConfiguratorLockEntity extends Entity
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
    protected $description;

    /**
     * @var string|null
     */
    protected $tooltip;

    /**
     * @var float|null
     */
    protected $minHeight;

    /**
     * @var float|null
     */
    protected $minWidth;

    /**
     * @var float|null
     */
    protected $minDepth;

    /**
     * @var string
     */
    protected $prodConfId;

    /**
     * @var string|null
     */
    protected $lockMediaId;

    /**
     * @var EntityCollection
     */
    protected $translations;

    /**
     * @var MediaEntity|null
     */
    protected $lockMediaImage;

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

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getTooltip(): ?string
    {
        return $this->tooltip;
    }

    public function setTooltip(?string $tooltip): void
    {
        $this->tooltip = $tooltip;
    }

    public function getMinHeight(): ?float
    {
        return $this->minHeight;
    }

    public function setMinHeight(?float $minHeight): void
    {
        $this->minHeight = $minHeight;
    }

    public function getMinWidth(): ?float
    {
        return $this->minWidth;
    }

    public function setMinWidth(?float $minWidth): void
    {
        $this->minWidth = $minWidth;
    }

    public function getMinDepth(): ?float
    {
        return $this->minDepth;
    }

    public function setMinDepth(?float $minDepth): void
    {
        $this->minDepth = $minDepth;
    }

    public function getProdConfId(): string
    {
        return $this->prodConfId;
    }

    public function setProdConfId(string $prodConfId): void
    {
        $this->prodConfId = $prodConfId;
    }

    public function getLockMediaId(): ?string
    {
        return $this->lockMediaId;
    }

    public function setLockMediaId(?string $lockMediaId): void
    {
        $this->lockMediaId = $lockMediaId;
    }

    public function getTranslations(): EntityCollection
    {
        return $this->translations;
    }

    public function setTranslations(EntityCollection $translations): void
    {
        $this->translations = $translations;
    }

    public function getLockMediaImage(): ?MediaEntity
    {
        return $this->lockMediaImage;
    }

    public function setLockMediaImage(?MediaEntity $lockMediaImage): void
    {
        $this->lockMediaImage = $lockMediaImage;
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