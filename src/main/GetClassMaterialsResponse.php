<?php

namespace edu\wisc\services\caos;

class GetClassMaterialsResponse
{

    /**
     * @var classMaterialsType $classMaterials
     */
    protected $classMaterials = null;

    /**
     * @param classMaterialsType $classMaterials
     */
    public function __construct($classMaterials)
    {
      $this->classMaterials = $classMaterials;
    }

    /**
     * @return classMaterialsType
     */
    public function getClassMaterials()
    {
      return $this->classMaterials;
    }

    /**
     * @param classMaterialsType $classMaterials
     * @return \edu\wisc\services\caos\GetClassMaterialsResponse
     */
    public function setClassMaterials($classMaterials)
    {
      $this->classMaterials = $classMaterials;
      return $this;
    }

}
