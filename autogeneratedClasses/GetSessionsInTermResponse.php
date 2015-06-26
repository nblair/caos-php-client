<?php

class GetSessionsInTermResponse
{

    /**
     * @var session $session
     */
    protected $session = null;

    /**
     * @param session $session
     */
    public function __construct($session)
    {
      $this->session = $session;
    }

    /**
     * @return session
     */
    public function getSession()
    {
      return $this->session;
    }

    /**
     * @param session $session
     * @return GetSessionsInTermResponse
     */
    public function setSession($session)
    {
      $this->session = $session;
      return $this;
    }

}
