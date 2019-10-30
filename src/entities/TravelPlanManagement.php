<?php


class TravelPlanManagement
{
    private $driver_name ='';
    private $drive_frequency ='';
    private $driver_medical_control ='';
    private $driver_medical_last_visit ='';
    private $driver_medical_restriction ='';
    private $driver_shared ='';
    private $driver_licence_validity ='';
    private $driver_defense_formation ='';
    private $driver_modern_road ='';
    private $trailer_truck_used ='';
    private $trailer_truck_adapted ='';
    private $trailer_truck_control ='';
    private $trailer_truck_simple_axe ='';
    private $trailer_truck_double_axe ='';
    private $trailer_truck_others ='';
    private $company_or_division ='';
    private $company_responsable ='';
    private $company_responsable_name ='';
    private $company_responsable_phone ='';
    private $distance ='';
    private $duration ='';
    private $distance_movement_reason ='';
    private $vehicle_type ='';
    private $vehicle_adaptation ='';
    private $vehicle_control ='';
    private $vehicle_immatriculation ='';
    private $vehicle_gps ='';
    private $departure_plan ='';
    private $departure_scheduled_deviation ='';

    /**
     * TravelPlanManagement constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getDriverName()
    {
        return $this->driver_name;
    }

    /**
     * @param string $driver_name
     */
    public function setDriverName($driver_name)
    {
        $this->driver_name = $driver_name;
    }

    /**
     * @return string
     */
    public function getDriveFrequency()
    {
        return $this->drive_frequency;
    }

    /**
     * @param string $drive_frequency
     */
    public function setDriveFrequency($drive_frequency)
    {
        $this->drive_frequency = $drive_frequency;
    }

    /**
     * @return string
     */
    public function getDriverMedicalControl()
    {
        return $this->driver_medical_control;
    }

    /**
     * @param string $driver_medical_control
     */
    public function setDriverMedicalControl($driver_medical_control)
    {
        $this->driver_medical_control = $driver_medical_control;
    }

    /**
     * @return string
     */
    public function getDriverMedicalLastVisit()
    {
        return $this->driver_medical_last_visit;
    }

    /**
     * @param string $driver_medical_last_visit
     */
    public function setDriverMedicalLastVisit($driver_medical_last_visit)
    {
        $this->driver_medical_last_visit = $driver_medical_last_visit;
    }

    /**
     * @return string
     */
    public function getDriverMedicalRestriction()
    {
        return $this->driver_medical_restriction;
    }

    /**
     * @param string $driver_medical_restriction
     */
    public function setDriverMedicalRestriction($driver_medical_restriction)
    {
        $this->driver_medical_restriction = $driver_medical_restriction;
    }

    /**
     * @return string
     */
    public function getDriverShared()
    {
        return $this->driver_shared;
    }

    /**
     * @param string $driver_shared
     */
    public function setDriverShared($driver_shared)
    {
        $this->driver_shared = $driver_shared;
    }

    /**
     * @return string
     */
    public function getDriverLicenceValidity()
    {
        return $this->driver_licence_validity;
    }

    /**
     * @param string $driver_licence_validity
     */
    public function setDriverLicenceValidity($driver_licence_validity)
    {
        $this->driver_licence_validity = $driver_licence_validity;
    }

    /**
     * @return string
     */
    public function getDriverDefenseFormation()
    {
        return $this->driver_defense_formation;
    }

    /**
     * @param string $driver_defense_formation
     */
    public function setDriverDefenseFormation($driver_defense_formation)
    {
        $this->driver_defense_formation = $driver_defense_formation;
    }

    /**
     * @return string
     */
    public function getDriverModernRoad()
    {
        return $this->driver_modern_road;
    }

    /**
     * @param string $driver_modern_road
     */
    public function setDriverModernRoad($driver_modern_road)
    {
        $this->driver_modern_road = $driver_modern_road;
    }

    /**
     * @return string
     */
    public function getTrailerTruckUsed()
    {
        return $this->trailer_truck_used;
    }

    /**
     * @param string $trailer_truck_used
     */
    public function setTrailerTruckUsed($trailer_truck_used)
    {
        $this->trailer_truck_used = $trailer_truck_used;
    }

    /**
     * @return string
     */
    public function getTrailerTruckAdapted()
    {
        return $this->trailer_truck_adapted;
    }

    /**
     * @param string $trailer_truck_adapted
     */
    public function setTrailerTruckAdapted($trailer_truck_adapted)
    {
        $this->trailer_truck_adapted = $trailer_truck_adapted;
    }

    /**
     * @return string
     */
    public function getTrailerTruckControl()
    {
        return $this->trailer_truck_control;
    }

    /**
     * @param string $trailer_truck_control
     */
    public function setTrailerTruckControl($trailer_truck_control)
    {
        $this->trailer_truck_control = $trailer_truck_control;
    }

    /**
     * @return string
     */
    public function getTrailerTruckSimpleAxe()
    {
        return $this->trailer_truck_simple_axe;
    }

    /**
     * @param string $trailer_truck_simple_axe
     */
    public function setTrailerTruckSimpleAxe($trailer_truck_simple_axe)
    {
        $this->trailer_truck_simple_axe = $trailer_truck_simple_axe;
    }

    /**
     * @return string
     */
    public function getTrailerTruckDoubleAxe()
    {
        return $this->trailer_truck_double_axe;
    }

    /**
     * @param string $trailer_truck_double_axe
     */
    public function setTrailerTruckDoubleAxe($trailer_truck_double_axe)
    {
        $this->trailer_truck_double_axe = $trailer_truck_double_axe;
    }

    /**
     * @return string
     */
    public function getTrailerTruckOthers()
    {
        return $this->trailer_truck_others;
    }

    /**
     * @param string $trailer_truck_others
     */
    public function setTrailerTruckOthers($trailer_truck_others)
    {
        $this->trailer_truck_others = $trailer_truck_others;
    }

    /**
     * @return string
     */
    public function getCompanyOrDivision()
    {
        return $this->company_or_division;
    }

    /**
     * @param string $company_or_division
     */
    public function setCompanyOrDivision($company_or_division)
    {
        $this->company_or_division = $company_or_division;
    }

    /**
     * @return string
     */
    public function getCompanyResponsable()
    {
        return $this->company_responsable;
    }

    /**
     * @param string $company_responsable
     */
    public function setCompanyResponsable($company_responsable)
    {
        $this->company_responsable = $company_responsable;
    }

    /**
     * @return string
     */
    public function getCompanyResponsableName()
    {
        return $this->company_responsable_name;
    }

    /**
     * @param string $company_responsable_name
     */
    public function setCompanyResponsableName($company_responsable_name)
    {
        $this->company_responsable_name = $company_responsable_name;
    }

    /**
     * @return string
     */
    public function getCompanyResponsablePhone()
    {
        return $this->company_responsable_phone;
    }

    /**
     * @param string $company_responsable_phone
     */
    public function setCompanyResponsablePhone($company_responsable_phone)
    {
        $this->company_responsable_phone = $company_responsable_phone;
    }

    /**
     * @return string
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * @param string $distance
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
    }

    /**
     * @return string
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param string $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     * @return string
     */
    public function getDistanceMovementReason()
    {
        return $this->distance_movement_reason;
    }

    /**
     * @param string $distance_movement_reason
     */
    public function setDistanceMovementReason($distance_movement_reason)
    {
        $this->distance_movement_reason = $distance_movement_reason;
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
    public function getVehicleAdaptation()
    {
        return $this->vehicle_adaptation;
    }

    /**
     * @param string $vehicle_adaptation
     */
    public function setVehicleAdaptation($vehicle_adaptation)
    {
        $this->vehicle_adaptation = $vehicle_adaptation;
    }

    /**
     * @return string
     */
    public function getVehicleControl()
    {
        return $this->vehicle_control;
    }

    /**
     * @param string $vehicle_control
     */
    public function setVehicleControl($vehicle_control)
    {
        $this->vehicle_control = $vehicle_control;
    }

    /**
     * @return string
     */
    public function getVehicleImmatriculation()
    {
        return $this->vehicle_immatriculation;
    }

    /**
     * @param string $vehicle_immatriculation
     */
    public function setVehicleImmatriculation($vehicle_immatriculation)
    {
        $this->vehicle_immatriculation = $vehicle_immatriculation;
    }

    /**
     * @return string
     */
    public function getVehicleGps()
    {
        return $this->vehicle_gps;
    }

    /**
     * @param string $vehicle_gps
     */
    public function setVehicleGps($vehicle_gps)
    {
        $this->vehicle_gps = $vehicle_gps;
    }

    /**
     * @return string
     */
    public function getDeparturePlan()
    {
        return $this->departure_plan;
    }

    /**
     * @param string $departure_plan
     */
    public function setDeparturePlan($departure_plan)
    {
        $this->departure_plan = $departure_plan;
    }

    /**
     * @return string
     */
    public function getDepartureScheduledDeviation()
    {
        return $this->departure_scheduled_deviation;
    }

    /**
     * @param string $departure_scheduled_deviation
     */
    public function setDepartureScheduledDeviation($departure_scheduled_deviation)
    {
        $this->departure_scheduled_deviation = $departure_scheduled_deviation;
    }


}