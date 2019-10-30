<?php


class MissionHasParticipant
{
    private $mission ='';
    private $mission_participant ='';

    /**
     * MissionHasParticipant constructor.
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
    public function getMissionParticipant()
    {
        return $this->mission_participant;
    }

    /**
     * @param string $mission_participant
     */
    public function setMissionParticipant($mission_participant)
    {
        $this->mission_participant = $mission_participant;
    }


}