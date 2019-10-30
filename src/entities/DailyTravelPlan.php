<?php


class DailyTravelPlan
{
    private $travel_step_plan ='';
    private $travel_step_hour ='';
    private $departure_point_plan ='';
    private $departure_point_houre ='';
    private $first_stop_plan ='';
    private $first_stop_hour ='';
    private $second_stop_place ='';
    private $second_stop_hour ='';
    private $third_stop_place ='';
    private $third_stop_hour ='';
    private $fourth_stop_place ='';
    private $fourth_stop_hour ='';
    private $night_stop_place ='';
    private $night_stop_hour ='';
    private $travel_plan_id ='';

    private $interruption_responsable_name ='';
    private $interruption_responsable_signature ='';
    private $interruption_date ='';
    private $interruption_cause ='';
    private $site_id ='';

    /**
     * DailyTravelPlan constructor.
     */
    public function __construct()
    {
    }


    /**
     * @return string
     */
    public function getTravelStepPlan()
    {
        return $this->travel_step_plan;
    }

    /**
     * @param string $travel_step_plan
     */
    public function setTravelStepPlan($travel_step_plan)
    {
        $this->travel_step_plan = $travel_step_plan;
    }

    /**
     * @return string
     */
    public function getTravelStepHour()
    {
        return $this->travel_step_hour;
    }

    /**
     * @param string $travel_step_hour
     */
    public function setTravelStepHour($travel_step_hour)
    {
        $this->travel_step_hour = $travel_step_hour;
    }

    /**
     * @return string
     */
    public function getDeparturePointPlan()
    {
        return $this->departure_point_plan;
    }

    /**
     * @param string $departure_point_plan
     */
    public function setDeparturePointPlan($departure_point_plan)
    {
        $this->departure_point_plan = $departure_point_plan;
    }

    /**
     * @return string
     */
    public function getDeparturePointHoure()
    {
        return $this->departure_point_houre;
    }

    /**
     * @param string $departure_point_houre
     */
    public function setDeparturePointHoure($departure_point_houre)
    {
        $this->departure_point_houre = $departure_point_houre;
    }

    /**
     * @return string
     */
    public function getFirstStopPlan()
    {
        return $this->first_stop_plan;
    }

    /**
     * @param string $first_stop_plan
     */
    public function setFirstStopPlan($first_stop_plan)
    {
        $this->first_stop_plan = $first_stop_plan;
    }

    /**
     * @return string
     */
    public function getFirstStopHour()
    {
        return $this->first_stop_hour;
    }

    /**
     * @param string $first_stop_hour
     */
    public function setFirstStopHour($first_stop_hour)
    {
        $this->first_stop_hour = $first_stop_hour;
    }

    /**
     * @return string
     */
    public function getSecondStopPlace()
    {
        return $this->second_stop_place;
    }

    /**
     * @param string $second_stop_place
     */
    public function setSecondStopPlace($second_stop_place)
    {
        $this->second_stop_place = $second_stop_place;
    }

    /**
     * @return string
     */
    public function getSecondStopHour()
    {
        return $this->second_stop_hour;
    }

    /**
     * @param string $second_stop_hour
     */
    public function setSecondStopHour($second_stop_hour)
    {
        $this->second_stop_hour = $second_stop_hour;
    }

    /**
     * @return string
     */
    public function getThirdStopPlace()
    {
        return $this->third_stop_place;
    }

    /**
     * @param string $third_stop_place
     */
    public function setThirdStopPlace($third_stop_place)
    {
        $this->third_stop_place = $third_stop_place;
    }

    /**
     * @return string
     */
    public function getThirdStopHour()
    {
        return $this->third_stop_hour;
    }

    /**
     * @param string $third_stop_hour
     */
    public function setThirdStopHour($third_stop_hour)
    {
        $this->third_stop_hour = $third_stop_hour;
    }

    /**
     * @return string
     */
    public function getFourthStopPlace()
    {
        return $this->fourth_stop_place;
    }

    /**
     * @param string $fourth_stop_place
     */
    public function setFourthStopPlace($fourth_stop_place)
    {
        $this->fourth_stop_place = $fourth_stop_place;
    }

    /**
     * @return string
     */
    public function getFourthStopHour()
    {
        return $this->fourth_stop_hour;
    }

    /**
     * @param string $fourth_stop_hour
     */
    public function setFourthStopHour($fourth_stop_hour)
    {
        $this->fourth_stop_hour = $fourth_stop_hour;
    }

    /**
     * @return string
     */
    public function getNightStopPlace()
    {
        return $this->night_stop_place;
    }

    /**
     * @param string $night_stop_place
     */
    public function setNightStopPlace($night_stop_place)
    {
        $this->night_stop_place = $night_stop_place;
    }

    /**
     * @return string
     */
    public function getNightStopHour()
    {
        return $this->night_stop_hour;
    }

    /**
     * @param string $night_stop_hour
     */
    public function setNightStopHour($night_stop_hour)
    {
        $this->night_stop_hour = $night_stop_hour;
    }

    /**
     * @return string
     */
    public function getTravelPlanId()
    {
        return $this->travel_plan_id;
    }

    /**
     * @param string $travel_plan_id
     */
    public function setTravelPlanId($travel_plan_id)
    {
        $this->travel_plan_id = $travel_plan_id;
    }

    /**
     * @return string
     */
    public function getInterruptionResponsableName()
    {
        return $this->interruption_responsable_name;
    }

    /**
     * @param string $interruption_responsable_name
     */
    public function setInterruptionResponsableName($interruption_responsable_name)
    {
        $this->interruption_responsable_name = $interruption_responsable_name;
    }

    /**
     * @return string
     */
    public function getInterruptionResponsableSignature()
    {
        return $this->interruption_responsable_signature;
    }

    /**
     * @param string $interruption_responsable_signature
     */
    public function setInterruptionResponsableSignature($interruption_responsable_signature)
    {
        $this->interruption_responsable_signature = $interruption_responsable_signature;
    }

    /**
     * @return string
     */
    public function getInterruptionDate()
    {
        return $this->interruption_date;
    }

    /**
     * @param string $interruption_date
     */
    public function setInterruptionDate($interruption_date)
    {
        $this->interruption_date = $interruption_date;
    }

    /**
     * @return string
     */
    public function getInterruptionCause()
    {
        return $this->interruption_cause;
    }

    /**
     * @param string $interruption_cause
     */
    public function setInterruptionCause($interruption_cause)
    {
        $this->interruption_cause = $interruption_cause;
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