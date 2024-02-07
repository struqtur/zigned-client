<?php

namespace Struqtur\Zigned\Api\Model;

class FilesFileIdGetResponse400 extends \ArrayObject
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
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var FilesFileIdGetResponse400Error
     */
    protected $error;
    /**
     * 
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return FilesFileIdGetResponse400Error
     */
    public function getError() : FilesFileIdGetResponse400Error
    {
        return $this->error;
    }
    /**
     * 
     *
     * @param FilesFileIdGetResponse400Error $error
     *
     * @return self
     */
    public function setError(FilesFileIdGetResponse400Error $error) : self
    {
        $this->initialized['error'] = true;
        $this->error = $error;
        return $this;
    }
}