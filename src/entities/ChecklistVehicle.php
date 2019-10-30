<?php


class ChecklistVehicle
{
    private $checklist_vehicle_client ='';
    private $checklist_vehicle_driver ='';
    private $checklist_vehicle_plaque ='';
    private $checklist_vehicle_company ='';
    private $checklist_vehicle_driver_phone ='';
    private $checklist_vehicle_type_of_vehicle ='';
    private $checklist_vehicle_mission_location ='';
    private $checklist_vehicle_auditor_name ='';
    private $checklist_vehicle_date ='';
    private $checklist_vehicle_hours ='';
    private $checklist_vehicle_signature ='';
    private $checklist_vehicle_status ='';
    private $evaluation_id ='';

    /**
     * ChecklistVehicle constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getChecklistVehicleClient()
    {
        return $this->checklist_vehicle_client;
    }

    /**
     * @param string $checklist_vehicle_client
     */
    public function setChecklistVehicleClient($checklist_vehicle_client)
    {
        $this->checklist_vehicle_client = $checklist_vehicle_client;
    }

    /**
     * @return string
     */
    public function getChecklistVehicleDriver()
    {
        return $this->checklist_vehicle_driver;
    }

    /**
     * @param string $checklist_vehicle_driver
     */
    public function setChecklistVehicleDriver($checklist_vehicle_driver)
    {
        $this->checklist_vehicle_driver = $checklist_vehicle_driver;
    }

    /**
     * @return string
     */
    public function getChecklistVehiclePlaque()
    {
        return $this->checklist_vehicle_plaque;
    }

    /**
     * @param string $checklist_vehicle_plaque
     */
    public function setChecklistVehiclePlaque($checklist_vehicle_plaque)
    {
        $this->checklist_vehicle_plaque = $checklist_vehicle_plaque;
    }

    /**
     * @return string
     */
    public function getChecklistVehicleCompany()
    {
        return $this->checklist_vehicle_company;
    }

    /**
     * @param string $checklist_vehicle_company
     */
    public function setChecklistVehicleCompany($checklist_vehicle_company)
    {
        $this->checklist_vehicle_company = $checklist_vehicle_company;
    }

    /**
     * @return string
     */
    public function getChecklistVehicleDriverPhone()
    {
        return $this->checklist_vehicle_driver_phone;
    }

    /**
     * @param string $checklist_vehicle_driver_phone
     */
    public function setChecklistVehicleDriverPhone($checklist_vehicle_driver_phone)
    {
        $this->checklist_vehicle_driver_phone = $checklist_vehicle_driver_phone;
    }

    /**
     * @return string
     */
    public function getChecklistVehicleTypeOfVehicle()
    {
        return $this->checklist_vehicle_type_of_vehicle;
    }

    /**
     * @param string $checklist_vehicle_type_of_vehicle
     */
    public function setChecklistVehicleTypeOfVehicle($checklist_vehicle_type_of_vehicle)
    {
        $this->checklist_vehicle_type_of_vehicle = $checklist_vehicle_type_of_vehicle;
    }

    /**
     * @return string
     */
    public function getChecklistVehicleMissionLocation()
    {
        return $this->checklist_vehicle_mission_location;
    }

    /**
     * @param string $checklist_vehicle_mission_location
     */
    public function setChecklistVehicleMissionLocation($checklist_vehicle_mission_location)
    {
        $this->checklist_vehicle_mission_location = $checklist_vehicle_mission_location;
    }

    /**
     * @return string
     */
    public function getChecklistVehicleAuditorName()
    {
        return $this->checklist_vehicle_auditor_name;
    }

    /**
     * @param string $checklist_vehicle_auditor_name
     */
    public function setChecklistVehicleAuditorName($checklist_vehicle_auditor_name)
    {
        $this->checklist_vehicle_auditor_name = $checklist_vehicle_auditor_name;
    }

    /**
     * @return string
     */
    public function getChecklistVehicleDate()
    {
        return $this->checklist_vehicle_date;
    }

    /**
     * @param string $checklist_vehicle_date
     */
    public function setChecklistVehicleDate($checklist_vehicle_date)
    {
        $this->checklist_vehicle_date = $checklist_vehicle_date;
    }

    /**
     * @return string
     */
    public function getChecklistVehicleHours()
    {
        return $this->checklist_vehicle_hours;
    }

    /**
     * @param string $checklist_vehicle_hours
     */
    public function setChecklistVehicleHours($checklist_vehicle_hours)
    {
        $this->checklist_vehicle_hours = $checklist_vehicle_hours;
    }

    /**
     * @return string
     */
    public function getChecklistVehicleSignature()
    {
        return $this->checklist_vehicle_signature;
    }

    /**
     * @param string $checklist_vehicle_signature
     */
    public function setChecklistVehicleSignature($checklist_vehicle_signature)
    {
        $this->checklist_vehicle_signature = $checklist_vehicle_signature;
    }

    /**
     * @return string
     */
    public function getChecklistVehicleStatus()
    {
        return $this->checklist_vehicle_status;
    }

    /**
     * @param string $checklist_vehicle_status
     */
    public function setChecklistVehicleStatus($checklist_vehicle_status)
    {
        $this->checklist_vehicle_status = $checklist_vehicle_status;
    }

    /**
     * @return string
     */
    public function getEvaluationId()
    {
        return $this->evaluation_id;
    }

    /**
     * @param string $evaluation_id
     */
    public function setEvaluationId($evaluation_id)
    {
        $this->evaluation_id = $evaluation_id;
    }




}