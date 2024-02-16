<?php declare(strict_types=1);

namespace NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorTranslation;

use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;
use NwgncyProductConfigurator\Core\Content\ProductConfigurator\ProductConfiguratorEntity;
use Shopware\Core\System\Language\LanguageEntity;

class ProductConfiguratorTranslationEntity extends Entity
{
    use EntityIdTrait;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string|null
     */
    protected $subtitle;

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
    protected $prodConfId;

    /**
     * @var string
     */
    protected $languageId;

    /**
     * @var ProductConfiguratorEntity|null
     */
    protected $prodConf;

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

    public function getSubtitle(): ?string
    {
        return $this->subtitle;
    }

    public function setSubtitle(?string $subtitle): void
    {
        $this->subtitle = $subtitle;
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

    public function getProdConfId(): string
    {
        return $this->prodConfId;
    }

    public function setProdConfId(string $prodConfId): void
    {
        $this->prodConfId = $prodConfId;
    }

    public function getLanguageId(): string
    {
        return $this->languageId;
    }

    public function setLanguageId(string $languageId): void
    {
        $this->languageId = $languageId;
    }

    public function getProdConf(): ?ProductConfiguratorEntity
    {
        return $this->prodConf;
    }

    public function setProdConf(?ProductConfiguratorEntity $prodConf): void
    {
        $this->prodConf = $prodConf;
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