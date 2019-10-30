<?php


class UserMissionPending
{
    private $mission;
    private $company_user;

    /**
     * UserMissionPending constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getMission()
    {
        return $this->mission;
    }

    /**
     * @param mixed $mission
     */
    public function setMission($mission)
    {
        $this->mission = $mission;
    }

    /**
     * @return mixed
     */
    public function getCompanyUser()
    {
        return $this->company_user;
    }

    /**
     * @param mixed $company_user
     */
    public function setCompanyUser($company_user)
    {
        $this->company_user = $company_user;
    }


}