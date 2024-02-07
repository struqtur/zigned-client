<?php

namespace Struqtur\Zigned\Api\Model;

class ThemesPostResponse200Data extends \ArrayObject
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
     * @var ThemesPostResponse200DataLogo
     */
    protected $logo;
    /**
     * The icon of the theme. This is used for the favicon.
     *
     * @var ThemesPostResponse200DataIcon
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
     * @var ThemesPostResponse200DataMetadata
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
     * @return ThemesPostResponse200DataLogo
     */
    public function getLogo() : ThemesPostResponse200DataLogo
    {
        return $this->logo;
    }
    /**
     * The logo of the theme. This is displayed to the user in all communication and touch points.
     *
     * @param ThemesPostResponse200DataLogo $logo
     *
     * @return self
     */
    public function setLogo(ThemesPostResponse200DataLogo $logo) : self
    {
        $this->initialized['logo'] = true;
        $this->logo = $logo;
        return $this;
    }
    /**
     * The icon of the theme. This is used for the favicon.
     *
     * @return ThemesPostResponse200DataIcon
     */
    public function getIcon() : ThemesPostResponse200DataIcon
    {
        return $this->icon;
    }
    /**
     * The icon of the theme. This is used for the favicon.
     *
     * @param ThemesPostResponse200DataIcon $icon
     *
     * @return self
     */
    public function setIcon(ThemesPostResponse200DataIcon $icon) : self
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
     * @return ThemesPostResponse200DataMetadata
     */
    public function getMetadata() : ThemesPostResponse200DataMetadata
    {
        return $this->metadata;
    }
    /**
     * 
     *
     * @param ThemesPostResponse200DataMetadata $metadata
     *
     * @return self
     */
    public function setMetadata(ThemesPostResponse200DataMetadata $metadata) : self
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