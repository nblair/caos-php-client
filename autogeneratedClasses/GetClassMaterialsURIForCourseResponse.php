<?php

class GetClassMaterialsURIForCourseResponse
{

    /**
     * @var classMaterialsURI $classMaterialsURI
     */
    protected $classMaterialsURI = null;

    /**
     * @param classMaterialsURI $classMaterialsURI
     */
    public function __construct($classMaterialsURI)
    {
      $this->classMaterialsURI = $classMaterialsURI;
    }

    /**
     * @return classMaterialsURI
     */
    public function getClassMaterialsURI()
    {
      return $this->classMaterialsURI;
    }

    /**
     * @param classMaterialsURI $classMaterialsURI
     * @return GetClassMaterialsURIForCourseResponse
     */
    public function setClassMaterialsURI($classMaterialsURI)
    {
      $this->classMaterialsURI = $classMaterialsURI;
      return $this;
    }

}
