<?php

namespace edu\wisc\services\caos;

class GetCrossListedClassUniqueIdsRequest
{

    /**
     * @var classUniqueId $classUniqueId
     */
    protected $classUniqueId = null;

    /**
     * @param classUniqueId $classUniqueId
     */
    public function __construct($classUniqueId)
    {
      $this->classUniqueId = $classUniqueId;
    }

    /**
     * @return classUniqueId
     */
    public function getClassUniqueId()
    {
      return $this->classUniqueId;
    }

    /**
     * @param classUniqueId $classUniqueId
     * @return \edu\wisc\services\caos\GetCrossListedClassUniqueIdsRequest
     */
    public function setClassUniqueId($classUniqueId)
    {
      $this->classUniqueId = $classUniqueId;
      return $this;
    }

}
