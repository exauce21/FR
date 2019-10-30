<?php


class EvaluationModelRiskAssessment
{
    private $evaluation_model_id ='';
    private $risk_assessment_supplier_id ='';

    /**
     * EvaluationModelRiskAssessment constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getEvaluationModelId()
    {
        return $this->evaluation_model_id;
    }

    /**
     * @param string $evaluation_model_id
     */
    public function setEvaluationModelId($evaluation_model_id)
    {
        $this->evaluation_model_id = $evaluation_model_id;
    }

    /**
     * @return string
     */
    public function getRiskAssessmentSupplierId()
    {
        return $this->risk_assessment_supplier_id;
    }

    /**
     * @param string $risk_assessment_supplier_id
     */
    public function setRiskAssessmentSupplierId($risk_assessment_supplier_id)
    {
        $this->risk_assessment_supplier_id = $risk_assessment_supplier_id;
    }


}