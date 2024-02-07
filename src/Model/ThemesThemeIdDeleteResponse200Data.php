<?php

namespace Struqtur\Zigned\Model;

class ThemesThemeIdDeleteResponse200Data extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The unique identifier of the theme
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $resourceType;
    /**
     * The logo of the theme. This is displayed to the user in all communication and touch points.
     *
     * @var ThemesThemeIdDeleteResponse200DataLogo
     */
    protected $logo;
    /**
     * The icon of the theme. This is used for the favicon.
     *
     * @var ThemesThemeIdDeleteResponse200DataIcon
     */
    protected $icon;
    /**
     * The primary color used to create the color palette in the signing room.
     *
     * @var string
     */
    protected $primaryColor = '#000000';
    /**
     * 
     *
     * @var ThemesThemeIdDeleteResponse200DataMetadata
     */
    protected $metadata;
    /**
     * UTC datetime ISO string
     *
     * @var string
     */
    protected $createdAt;
    /**
     * UTC datetime ISO string
     *
     * @var string
     */
    protected $updatedAt;
    /**
     * The unique identifier of the theme
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The unique identifier of the theme
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getResourceType() : string
    {
        return $this->resourceType;
    }
    /**
     * 
     *
     * @param string $resourceType
     *
     * @return self
     */
    public function setResourceType(string $resourceType) : self
    {
        $this->initialized['resourceType'] = true;
        $this->resourceType = $resourceType;
        return $this;
    }
    /**
     * The logo of the theme. This is displayed to the user in all communication and touch points.
     *
     * @return ThemesThemeIdDeleteResponse200DataLogo
     */
    public function getLogo() : ThemesThemeIdDeleteResponse200DataLogo
    {
        return $this->logo;
    }
    /**
     * The logo of the theme. This is displayed to the user in all communication and touch points.
     *
     * @param ThemesThemeIdDeleteResponse200DataLogo $logo
     *
     * @return self
     */
    public function setLogo(ThemesThemeIdDeleteResponse200DataLogo $logo) : self
    {
        $this->initialized['logo'] = true;
        $this->logo = $logo;
        return $this;
    }
    /**
     * The icon of the theme. This is used for the favicon.
     *
     * @return ThemesThemeIdDeleteResponse200DataIcon
     */
    public function getIcon() : ThemesThemeIdDeleteResponse200DataIcon
    {
        return $this->icon;
    }
    /**
     * The icon of the theme. This is used for the favicon.
     *
     * @param ThemesThemeIdDeleteResponse200DataIcon $icon
     *
     * @return self
     */
    public function setIcon(ThemesThemeIdDeleteResponse200DataIcon $icon) : self
    {
        $this->initialized['icon'] = true;
        $this->icon = $icon;
        return $this;
    }
    /**
     * The primary color used to create the color palette in the signing room.
     *
     * @return string
     */
    public function getPrimaryColor() : string
    {
        return $this->primaryColor;
    }
    /**
     * The primary color used to create the color palette in the signing room.
     *
     * @param string $primaryColor
     *
     * @return self
     */
    public function setPrimaryColor(string $primaryColor) : self
    {
        $this->initialized['primaryColor'] = true;
        $this->primaryColor = $primaryColor;
        return $this;
    }
    /**
     * 
     *
     * @return ThemesThemeIdDeleteResponse200DataMetadata
     */
    public function getMetadata() : ThemesThemeIdDeleteResponse200DataMetadata
    {
        return $this->metadata;
    }
    /**
     * 
     *
     * @param ThemesThemeIdDeleteResponse200DataMetadata $metadata
     *
     * @return self
     */
    public function setMetadata(ThemesThemeIdDeleteResponse200DataMetadata $metadata) : self
    {
        $this->initialized['metadata'] = true;
        $this->metadata = $metadata;
        return $this;
    }
    /**
     * UTC datetime ISO string
     *
     * @return string
     */
    public function getCreatedAt() : string
    {
        return $this->createdAt;
    }
    /**
     * UTC datetime ISO string
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * UTC datetime ISO string
     *
     * @return string
     */
    public function getUpdatedAt() : string
    {
        return $this->updatedAt;
    }
    /**
     * UTC datetime ISO string
     *
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(string $updatedAt) : self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
}