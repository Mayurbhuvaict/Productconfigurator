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
     * @var string|null
     */
    protected $titleMaterial;

    /**
     * @var string|null
     */
    protected $subtitleMaterial;

    /**
     * @var string|null
     */
    protected $titleCoating;

    /**
     * @var string|null
     */
    protected $subtitleCoating;

    /**
     * @var string|null
     */
    protected $titleDimensions;

    /**
     * @var string|null
     */
    protected $subtitleDimensions;

    /**
     * @var string|null
     */
    protected $titleClosure;

    /**
     * @var string|null
     */
    protected $subtitleClosure;

    /**
     * @var string|null
     */
    protected $titleAccessories;

    /**
     * @var string|null
     */
    protected $subtitleAccessories;

    /**
     * @var string|null
     */
    protected $titleNotes;

    /**
     * @var string|null
     */
    protected $subtitleNotes;

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

    public function getTitleMaterial(): ?string
    {
        return $this->titleMaterial;
    }

    public function setTitleMaterial(?string $titleMaterial): void
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

    public function getTitleCoating(): ?string
    {
        return $this->titleCoating;
    }

    public function setTitleCoating(?string $titleCoating): void
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

    public function getTitleDimensions(): ?string
    {
        return $this->titleDimensions;
    }

    public function setTitleDimensions(?string $titleDimensions): void
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

    public function getTitleClosure(): ?string
    {
        return $this->titleClosure;
    }

    public function setTitleClosure(?string $titleClosure): void
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

    public function getTitleAccessories(): ?string
    {
        return $this->titleAccessories;
    }

    public function setTitleAccessories(?string $titleAccessories): void
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

    public function getTitleNotes(): ?string
    {
        return $this->titleNotes;
    }

    public function setTitleNotes(?string $titleNotes): void
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