<?php declare(strict_types=1);

namespace NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorLock\Aggregate\ProductConfiguratorLockTranslation;

use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;
use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorLock\ProductConfiguratorLockEntity;
use Shopware\Core\System\Language\LanguageEntity;

class ProductConfiguratorLockTranslationEntity extends Entity
{
    use EntityIdTrait;

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
     * @var \DateTimeInterface
     */
    protected $createdAt;

    /**
     * @var \DateTimeInterface|null
     */
    protected $updatedAt;

    /**
     * @var string
     */
    protected $prodConfLockId;

    /**
     * @var string
     */
    protected $languageId;

    /**
     * @var ProductConfiguratorLockEntity|null
     */
    protected $prodConfLock;

    /**
     * @var LanguageEntity|null
     */
    protected $language;

    public function getTitle(): ?string
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

    public function getCreatedAt(): ?\DateTimeInterface
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

    public function getProdConfLockId(): string
    {
        return $this->prodConfLockId;
    }

    public function setProdConfLockId(string $prodConfLockId): void
    {
        $this->prodConfLockId = $prodConfLockId;
    }

    public function getLanguageId(): string
    {
        return $this->languageId;
    }

    public function setLanguageId(string $languageId): void
    {
        $this->languageId = $languageId;
    }

    public function getProdConfLock(): ?ProductConfiguratorLockEntity
    {
        return $this->prodConfLock;
    }

    public function setProdConfLock(?ProductConfiguratorLockEntity $prodConfLock): void
    {
        $this->prodConfLock = $prodConfLock;
    }

    public function getLanguage(): ?LanguageEntity
    {
        return $this->language;
    }

    public function setLanguage(?LanguageEntity $language): void
    {
        $this->language = $language;
    }
}