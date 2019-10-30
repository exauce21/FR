<?php


class ChecklistTruck
{
    private $checklist_vehicle ='';
    private $checklist_truck_details = '';

    /**
     * ChecklistTruck constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getChecklistVehicle()
    {
        return $this->checklist_vehicle;
    }

    /**
     * @param string $checklist_vehicle
     */
    public function setChecklistVehicle($checklist_vehicle)
    {
        $this->checklist_vehicle = $checklist_vehicle;
    }

    /**
     * @return string
     */
    public function getChecklistTruckDetails()
    {
        return $this->checklist_truck_details;
    }

    /**
     * @param string $checklist_truck_details
     */
    public function setChecklistTruckDetails($checklist_truck_details)
    {
        $this->checklist_truck_details = $checklist_truck_details;
    }




}