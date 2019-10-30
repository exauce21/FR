<?php


class MissionToValidate
{
    private $mission ='';
    private $company_user ='';

    /**
     * MissionToValidate constructor.
     */
    public function __construct()
    {
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
    public function getCompanyUser()
    {
        return $this->company_user;
    }

    /**
     * @param string $company_user
     */
    public function setCompanyUser($company_user)
    {
        $this->company_user = $company_user;
    }


}