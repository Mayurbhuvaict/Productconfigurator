<?php declare(strict_types=1);

namespace NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorMaterial\Aggregate\ProductConfiguratorMaterialTranslation;

use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;
use NwgncyProductConfigurator\Core\Content\ProductConfigurator\Aggregate\ProductConfiguratorMaterial\ProductConfiguratorMaterialEntity;
use Shopware\Core\System\Language\LanguageEntity;

class ProductConfiguratorMaterialTranslationEntity extends Entity
{
    use EntityIdTrait;

    /**
     * @var string|null
     */
    protected $title;

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
    protected $prodConfMatId;

    /**
     * @var string
     */
    protected $languageId;

    /**
     * @var ProductConfiguratorMaterialEntity|null
     */
    protected $prodConfMat;

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

    public function getProdConfMatId(): string
    {
        return $this->prodConfMatId;
    }

    public function setProdConfMatId(string $prodConfMatId): void
    {
        $this->prodConfMatId = $prodConfMatId;
    }

    public function getLanguageId(): string
    {
        return $this->languageId;
    }

    public function setLanguageId(string $languageId): void
    {
        $this->languageId = $languageId;
    }

    public function getProdConfMat(): ?ProductConfiguratorMaterialEntity
    {
        return $this->prodConfMat;
    }

    public function setProdConfMat(?ProductConfiguratorMaterialEntity $prodConfMat): void
    {
        $this->prodConfMat = $prodConfMat;
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