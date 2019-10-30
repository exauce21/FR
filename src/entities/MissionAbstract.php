<?php


abstract class MissionAbstract
{
    private $mission_name;
    private $mission_start;
    private $mission_end;
    private $mission_creation_date;
    private $mission_responsable;
    private $mission_duration;
    private $mission_description;
    private $mission_chef;
    private $mission_status;
    private $mission_sub_contractor;
    private $mission_doc_id;

    /**
     * MissionAbstract constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getMissionName()
    {
        return $this->mission_name;
    }

    /**
     * @param mixed $mission_name
     */
    public function setMissionName($mission_name)
    {
        $this->mission_name = $mission_name;
    }

    /**
     * @return mixed
     */
    public function getMissionStart()
    {
        return $this->mission_start;
    }

    /**
     * @param mixed $mission_start
     */
    public function setMissionStart($mission_start)
    {
        $this->mission_start = $mission_start;
    }

    /**
     * @return mixed
     */
    public function getMissionEnd()
    {
        return $this->mission_end;
    }

    /**
     * @param mixed $mission_end
     */
    public function setMissionEnd($mission_end)
    {
        $this->mission_end = $mission_end;
    }

    /**
     * @return mixed
     */
    public function getMissionCreationDate()
    {
        return $this->mission_creation_date;
    }

    /**
     * @param mixed $mission_creation_date
     */
    public function setMissionCreationDate($mission_creation_date)
    {
        $this->mission_creation_date = $mission_creation_date;
    }

    /**
     * @return mixed
     */
    public function getMissionResponsable()
    {
        return $this->mission_responsable;
    }

    /**
     * @param mixed $mission_responsable
     */
    public function setMissionResponsable($mission_responsable)
    {
        $this->mission_responsable = $mission_responsable;
    }

    /**
     * @return mixed
     */
    public function getMissionDuration()
    {
        return $this->mission_duration;
    }

    /**
     * @param mixed $mission_duration
     */
    public function setMissionDuration($mission_duration)
    {
        $this->mission_duration = $mission_duration;
    }

    /**
     * @return mixed
     */
    public function getMissionDescription()
    {
        return $this->mission_description;
    }

    /**
     * @param mixed $mission_description
     */
    public function setMissionDescription($mission_description)
    {
        $this->mission_description = $mission_description;
    }

    /**
     * @return mixed
     */
    public function getMissionChef()
    {
        return $this->mission_chef;
    }

    /**
     * @param mixed $mission_chef
     */
    public function setMissionChef($mission_chef)
    {
        $this->mission_chef = $mission_chef;
    }

    /**
     * @return mixed
     */
    public function getMissionStatus()
    {
        return $this->mission_status;
    }

    /**
     * @param mixed $mission_status
     */
    public function setMissionStatus($mission_status)
    {
        $this->mission_status = $mission_status;
    }

    /**
     * @return mixed
     */
    public function getMissionSubContractor()
    {
        return $this->mission_sub_contractor;
    }

    /**
     * @param mixed $mission_sub_contractor
     */
    public function setMissionSubContractor($mission_sub_contractor)
    {
        $this->mission_sub_contractor = $mission_sub_contractor;
    }

    /**
     * @return mixed
     */
    public function getMissionDocId()
    {
        return $this->mission_doc_id;
    }

    /**
     * @param mixed $mission_doc_id
     */
    public function setMissionDocId($mission_doc_id)
    {
        $this->mission_doc_id = $mission_doc_id;
    }


}