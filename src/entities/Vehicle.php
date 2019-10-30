<?php


class Vehicle
{
    private $vehicle_plaque ='';
    private $vehicle_type ='';
    private $travel_plan_management_id ='';
    private $site_id ='';

    /**
     * Vehicle constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getVehiclePlaque()
    {
        return $this->vehicle_plaque;
    }

    /**
     * @param string $vehicle_plaque
     */
    public function setVehiclePlaque($vehicle_plaque)
    {
        $this->vehicle_plaque = $vehicle_plaque;
    }

    /**
     * @return string
     */
    public function getVehicleType()
    {
        return $this->vehicle_type;
    }

    /**
     * @param string $vehicle_type
     */
    public function setVehicleType($vehicle_type)
    {
        $this->vehicle_type = $vehicle_type;
    }

    /**
     * @return string
     */
    public function getTravelPlanManagementId()
    {
        return $this->travel_plan_management_id;
    }

    /**
     * @param string $travel_plan_management_id
     */
    public function setTravelPlanManagementId($travel_plan_management_id)
    {
        $this->travel_plan_management_id = $travel_plan_management_id;
    }

    /**
     * @return string
     */
    public function getSiteId()
    {
        return $this->site_id;
    }

    /**
     * @param string $site_id
     */
    public function setSiteId($site_id)
    {
        $this->site_id = $site_id;
    }


}