<?php declare(strict_types=1);

namespace NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorDimension\Aggregate\ProductConfiguratorDimensionTranslation;

use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;
use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorDimension\ProductConfiguratorDimensionEntity;
use Shopware\Core\System\Language\LanguageEntity;

class ProductConfiguratorDimensionTranslationEntity extends Entity
{
    use EntityIdTrait;

    /**
     * @var string|null
     */
    protected $title;

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
    protected $prodConfDimeId;

    /**
     * @var string
     */
    protected $languageId;

    /**
     * @var ProductConfiguratorDimensionEntity|null
     */
    protected $prodConfDime;

    /**
     * @var LanguageEntity|null
     */
    protected $language;

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): void
    {
        $this->title = $title;
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

    public function getProdConfDimeId(): string
    {
        return $this->prodConfDimeId;
    }

    public function setProdConfDimeId(string $prodConfDimeId): void
    {
        $this->prodConfDimeId = $prodConfDimeId;
    }

    public function getLanguageId(): string
    {
        return $this->languageId;
    }

    public function setLanguageId(string $languageId): void
    {
        $this->languageId = $languageId;
    }

    public function getProdConfDime(): ?ProductConfiguratorDimensionEntity
    {
        return $this->prodConfDime;
    }

    public function setProdConfDime(?ProductConfiguratorDimensionEntity $prodConfDime): void
    {
        $this->prodConfDime = $prodConfDime;
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