<?php


class RiskReference
{
    # TODO informez mahamdi ajout unique
    private $risk_assessment_number ='';
    private $risk_assessment_category ='';
    private $risk_assessment_name ='';
    private $risk_assessment_probability ='';
    private $risk_assessment_severity ='';
    private $risk_assessment_risk_initial ='';
    private $risk_assessment_solution ='';
    private $risk_assessment_delivery ='';
    private $risk_assessment_type ='';
    private $risk_assessment_validate ='';
    private $risk_assessment_comments ='';

    /**
     * RiskReference constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getRiskAssessmentNumber()
    {
        return $this->risk_assessment_number;
    }

    /**
     * @param string $risk_assessment_number
     */
    public function setRiskAssessmentNumber($risk_assessment_number)
    {
        $this->risk_assessment_number = $risk_assessment_number;
    }

    /**
     * @return string
     */
    public function getRiskAssessmentCategory()
    {
        return $this->risk_assessment_category;
    }

    /**
     * @param string $risk_assessment_category
     */
    public function setRiskAssessmentCategory($risk_assessment_category)
    {
        $this->risk_assessment_category = $risk_assessment_category;
    }

    /**
     * @return string
     */
    public function getRiskAssessmentName()
    {
        return $this->risk_assessment_name;
    }

    /**
     * @param string $risk_assessment_name
     */
    public function setRiskAssessmentName($risk_assessment_name)
    {
        $this->risk_assessment_name = $risk_assessment_name;
    }

    /**
     * @return string
     */
    public function getRiskAssessmentProbability()
    {
        return $this->risk_assessment_probability;
    }

    /**
     * @param string $risk_assessment_probability
     */
    public function setRiskAssessmentProbability($risk_assessment_probability)
    {
        $this->risk_assessment_probability = $risk_assessment_probability;
    }

    /**
     * @return string
     */
    public function getRiskAssessmentSeverity()
    {
        return $this->risk_assessment_severity;
    }

    /**
     * @param string $risk_assessment_severity
     */
    public function setRiskAssessmentSeverity($risk_assessment_severity)
    {
        $this->risk_assessment_severity = $risk_assessment_severity;
    }

    /**
     * @return string
     */
    public function getRiskAssessmentRiskInitial()
    {
        return $this->risk_assessment_risk_initial;
    }

    /**
     * @param string $risk_assessment_risk_initial
     */
    public function setRiskAssessmentRiskInitial($risk_assessment_risk_initial)
    {
        $this->risk_assessment_risk_initial = $risk_assessment_risk_initial;
    }

    /**
     * @return string
     */
    public function getRiskAssessmentSolution()
    {
        return $this->risk_assessment_solution;
    }

    /**
     * @param string $risk_assessment_solution
     */
    public function setRiskAssessmentSolution($risk_assessment_solution)
    {
        $this->risk_assessment_solution = $risk_assessment_solution;
    }

    /**
     * @return string
     */
    public function getRiskAssessmentDelivery()
    {
        return $this->risk_assessment_delivery;
    }

    /**
     * @param string $risk_assessment_delivery
     */
    public function setRiskAssessmentDelivery($risk_assessment_delivery)
    {
        $this->risk_assessment_delivery = $risk_assessment_delivery;
    }

    /**
     * @return string
     */
    public function getRiskAssessmentType()
    {
        return $this->risk_assessment_type;
    }

    /**
     * @param string $risk_assessment_type
     */
    public function setRiskAssessmentType($risk_assessment_type)
    {
        $this->risk_assessment_type = $risk_assessment_type;
    }

    /**
     * @return string
     */
    public function getRiskAssessmentValidate()
    {
        return $this->risk_assessment_validate;
    }

    /**
     * @param string $risk_assessment_validate
     */
    public function setRiskAssessmentValidate($risk_assessment_validate)
    {
        $this->risk_assessment_validate = $risk_assessment_validate;
    }

    /**
     * @return string
     */
    public function getRiskAssessmentComments()
    {
        return $this->risk_assessment_comments;
    }

    /**
     * @param string $risk_assessment_comments
     */
    public function setRiskAssessmentComments($risk_assessment_comments)
    {
        $this->risk_assessment_comments = $risk_assessment_comments;
    }


}