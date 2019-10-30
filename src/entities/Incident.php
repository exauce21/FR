<?php


class Incident
{
    private $incident_type ='';
    private $incident_event_type ='';
    private $responsible_of_report ='';
    private $incident_creation_date ='';
    private $domain_of_consequence ='';
    private $incident_risk_state ='';
    private $incident_cause ='';
    private $incident_description ='';
    private $incident_location ='';
    private $incident_human_lost ='';
    private $incident_potential_risk ='';
    private $incident_solution ='';
    private $incident_save_rule ='';
    private $incident_recommendation ='';
    private $site ='';

    /**
     * Incident constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getIncidentType()
    {
        return $this->incident_type;
    }

    /**
     * @param string $incident_type
     */
    public function setIncidentType($incident_type)
    {
        $this->incident_type = $incident_type;
    }

    /**
     * @return string
     */
    public function getIncidentEventType()
    {
        return $this->incident_event_type;
    }

    /**
     * @param string $incident_event_type
     */
    public function setIncidentEventType($incident_event_type)
    {
        $this->incident_event_type = $incident_event_type;
    }

    /**
     * @return string
     */
    public function getResponsibleOfReport()
    {
        return $this->responsible_of_report;
    }

    /**
     * @param string $responsible_of_report
     */
    public function setResponsibleOfReport($responsible_of_report)
    {
        $this->responsible_of_report = $responsible_of_report;
    }

    /**
     * @return string
     */
    public function getIncidentCreationDate()
    {
        return $this->incident_creation_date;
    }

    /**
     * @param string $incident_creation_date
     */
    public function setIncidentCreationDate($incident_creation_date)
    {
        $this->incident_creation_date = $incident_creation_date;
    }

    /**
     * @return string
     */
    public function getDomainOfConsequence()
    {
        return $this->domain_of_consequence;
    }

    /**
     * @param string $domain_of_consequence
     */
    public function setDomainOfConsequence($domain_of_consequence)
    {
        $this->domain_of_consequence = $domain_of_consequence;
    }

    /**
     * @return string
     */
    public function getIncidentRiskState()
    {
        return $this->incident_risk_state;
    }

    /**
     * @param string $incident_risk_state
     */
    public function setIncidentRiskState($incident_risk_state)
    {
        $this->incident_risk_state = $incident_risk_state;
    }

    /**
     * @return string
     */
    public function getIncidentCause()
    {
        return $this->incident_cause;
    }

    /**
     * @param string $incident_cause
     */
    public function setIncidentCause($incident_cause)
    {
        $this->incident_cause = $incident_cause;
    }

    /**
     * @return string
     */
    public function getIncidentDescription()
    {
        return $this->incident_description;
    }

    /**
     * @param string $incident_description
     */
    public function setIncidentDescription($incident_description)
    {
        $this->incident_description = $incident_description;
    }

    /**
     * @return string
     */
    public function getIncidentLocation()
    {
        return $this->incident_location;
    }

    /**
     * @param string $incident_location
     */
    public function setIncidentLocation($incident_location)
    {
        $this->incident_location = $incident_location;
    }

    /**
     * @return string
     */
    public function getIncidentHumanLost()
    {
        return $this->incident_human_lost;
    }

    /**
     * @param string $incident_human_lost
     */
    public function setIncidentHumanLost($incident_human_lost)
    {
        $this->incident_human_lost = $incident_human_lost;
    }

    /**
     * @return string
     */
    public function getIncidentPotentialRisk()
    {
        return $this->incident_potential_risk;
    }

    /**
     * @param string $incident_potential_risk
     */
    public function setIncidentPotentialRisk($incident_potential_risk)
    {
        $this->incident_potential_risk = $incident_potential_risk;
    }

    /**
     * @return string
     */
    public function getIncidentSolution()
    {
        return $this->incident_solution;
    }

    /**
     * @param string $incident_solution
     */
    public function setIncidentSolution($incident_solution)
    {
        $this->incident_solution = $incident_solution;
    }

    /**
     * @return string
     */
    public function getIncidentSaveRule()
    {
        return $this->incident_save_rule;
    }

    /**
     * @param string $incident_save_rule
     */
    public function setIncidentSaveRule($incident_save_rule)
    {
        $this->incident_save_rule = $incident_save_rule;
    }

    /**
     * @return string
     */
    public function getIncidentRecommendation()
    {
        return $this->incident_recommendation;
    }

    /**
     * @param string $incident_recommendation
     */
    public function setIncidentRecommendation($incident_recommendation)
    {
        $this->incident_recommendation = $incident_recommendation;
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


}