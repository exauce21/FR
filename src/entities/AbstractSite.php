<?php


abstract class AbstractSite {

    private $site_name ='';
    private $site_start ='';
    private $site_end ='';
    private $site_creation_date ='';
    private $site_responsable ='';
    private $site_location ='';
    private $site_description ='';
    private $site_chef ='';
    private $mission ='';
    private $site_doc_id ='';

    /**
     * AbstractSite constructor.
     */
    public function __construct()
    {
    }


    /**
     * @return string
     */
    public function getSiteName()
    {
        return $this->site_name;
    }

    /**
     * @param string $site_name
     */
    public function setSiteName($site_name)
    {
        $this->site_name = $site_name;
    }

    /**
     * @return string
     */
    public function getSiteStart()
    {
        return $this->site_start;
    }

    /**
     * @param string $site_start
     */
    public function setSiteStart($site_start)
    {
        $this->site_start = $site_start;
    }

    /**
     * @return string
     */
    public function getSiteEnd()
    {
        return $this->site_end;
    }

    /**
     * @param string $site_end
     */
    public function setSiteEnd($site_end)
    {
        $this->site_end = $site_end;
    }

    /**
     * @return string
     */
    public function getSiteCreationDate()
    {
        return $this->site_creation_date;
    }

    /**
     * @param string $site_creation_date
     */
    public function setSiteCreationDate($site_creation_date)
    {
        $this->site_creation_date = $site_creation_date;
    }

    /**
     * @return string
     */
    public function getSiteResponsable()
    {
        return $this->site_responsable;
    }

    /**
     * @param string $site_responsable
     */
    public function setSiteResponsable($site_responsable)
    {
        $this->site_responsable = $site_responsable;
    }

    /**
     * @return string
     */
    public function getSiteLocation()
    {
        return $this->site_location;
    }

    /**
     * @param string $site_location
     */
    public function setSiteLocation($site_location)
    {
        $this->site_location = $site_location;
    }

    /**
     * @return string
     */
    public function getSiteDescription()
    {
        return $this->site_description;
    }

    /**
     * @param string $site_description
     */
    public function setSiteDescription($site_description)
    {
        $this->site_description = $site_description;
    }

    /**
     * @return string
     */
    public function getSiteChef()
    {
        return $this->site_chef;
    }

    /**
     * @param string $site_chef
     */
    public function setSiteChef($site_chef)
    {
        $this->site_chef = $site_chef;
    }

    /**
     * @return string
     */
    public function getMission()
    {
        return $this->mission;
    }

    /**
     * @param string $mission
     */
    public function setMission($mission)
    {
        $this->mission = $mission;
    }

    /**
     * @return string
     */
    public function getSiteDocId()
    {
        return $this->site_doc_id;
    }

    /**
     * @param string $site_doc_id
     */
    public function setSiteDocId($site_doc_id)
    {
        $this->site_doc_id = $site_doc_id;
    }


}