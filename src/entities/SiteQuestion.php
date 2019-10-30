<?php


class SiteQuestion
{
    private $site ='';
    private $user ='';
    private $site_task_at_height ='';
    private $site_task_use_electricity ='';
    private $site_task_security_constraint ='';
    private $site_distance ='';
    private $site_use_git ='';
    # Different type of transport
    private $site_use_transport ='';
    private $site_user_car ='';
    private $site_use_bike ='';
    private $site_use_plane ='';
    private $site_use_boat ='';
    private $site_number_of_car ='';
    private $site_number_of_bike ='';
    private $site_number_of_plane ='';
    private $site_number_of_boat ='';

    /**
     * SiteQuestion constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * @param string $site
     */
    public function setSite($site)
    {
        $this->site = $site;
    }

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param string $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function getSiteTaskAtHeight()
    {
        return $this->site_task_at_height;
    }

    /**
     * @param string $site_task_at_height
     */
    public function setSiteTaskAtHeight($site_task_at_height)
    {
        $this->site_task_at_height = $site_task_at_height;
    }

    /**
     * @return string
     */
    public function getSiteTaskUseElectricity()
    {
        return $this->site_task_use_electricity;
    }

    /**
     * @param string $site_task_use_electricity
     */
    public function setSiteTaskUseElectricity($site_task_use_electricity)
    {
        $this->site_task_use_electricity = $site_task_use_electricity;
    }

    /**
     * @return string
     */
    public function getSiteTaskSecurityConstraint()
    {
        return $this->site_task_security_constraint;
    }

    /**
     * @param string $site_task_security_constraint
     */
    public function setSiteTaskSecurityConstraint($site_task_security_constraint)
    {
        $this->site_task_security_constraint = $site_task_security_constraint;
    }

    /**
     * @return string
     */
    public function getSiteDistance()
    {
        return $this->site_distance;
    }

    /**
     * @param string $site_distance
     */
    public function setSiteDistance($site_distance)
    {
        $this->site_distance = $site_distance;
    }

    /**
     * @return string
     */
    public function getSiteUseGit()
    {
        return $this->site_use_git;
    }

    /**
     * @param string $site_use_git
     */
    public function setSiteUseGit($site_use_git)
    {
        $this->site_use_git = $site_use_git;
    }

    /**
     * @return string
     */
    public function getSiteUseTransport()
    {
        return $this->site_use_transport;
    }

    /**
     * @param string $site_use_transport
     */
    public function setSiteUseTransport($site_use_transport)
    {
        $this->site_use_transport = $site_use_transport;
    }

    /**
     * @return string
     */
    public function getSiteUserCar()
    {
        return $this->site_user_car;
    }

    /**
     * @param string $site_user_car
     */
    public function setSiteUserCar($site_user_car)
    {
        $this->site_user_car = $site_user_car;
    }

    /**
     * @return string
     */
    public function getSiteUseBike()
    {
        return $this->site_use_bike;
    }

    /**
     * @param string $site_use_bike
     */
    public function setSiteUseBike($site_use_bike)
    {
        $this->site_use_bike = $site_use_bike;
    }

    /**
     * @return string
     */
    public function getSiteUsePlane()
    {
        return $this->site_use_plane;
    }

    /**
     * @param string $site_use_plane
     */
    public function setSiteUsePlane($site_use_plane)
    {
        $this->site_use_plane = $site_use_plane;
    }

    /**
     * @return string
     */
    public function getSiteUseBoat()
    {
        return $this->site_use_boat;
    }

    /**
     * @param string $site_use_boat
     */
    public function setSiteUseBoat($site_use_boat)
    {
        $this->site_use_boat = $site_use_boat;
    }

    /**
     * @return string
     */
    public function getSiteNumberOfCar()
    {
        return $this->site_number_of_car;
    }

    /**
     * @param string $site_number_of_car
     */
    public function setSiteNumberOfCar($site_number_of_car)
    {
        $this->site_number_of_car = $site_number_of_car;
    }

    /**
     * @return string
     */
    public function getSiteNumberOfBike()
    {
        return $this->site_number_of_bike;
    }

    /**
     * @param string $site_number_of_bike
     */
    public function setSiteNumberOfBike($site_number_of_bike)
    {
        $this->site_number_of_bike = $site_number_of_bike;
    }

    /**
     * @return string
     */
    public function getSiteNumberOfPlane()
    {
        return $this->site_number_of_plane;
    }

    /**
     * @param string $site_number_of_plane
     */
    public function setSiteNumberOfPlane($site_number_of_plane)
    {
        $this->site_number_of_plane = $site_number_of_plane;
    }

    /**
     * @return string
     */
    public function getSiteNumberOfBoat()
    {
        return $this->site_number_of_boat;
    }

    /**
     * @param string $site_number_of_boat
     */
    public function setSiteNumberOfBoat($site_number_of_boat)
    {
        $this->site_number_of_boat = $site_number_of_boat;
    }


}