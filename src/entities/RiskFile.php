<?php


class RiskFile
{
    private $risk_assessment_suppliers_id ='';
    private $risk_file ='';

    /**
     * RiskFile constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getRiskAssessmentSuppliersId()
    {
        return $this->risk_assessment_suppliers_id;
    }

    /**
     * @param string $risk_assessment_suppliers_id
     */
    public function setRiskAssessmentSuppliersId($risk_assessment_suppliers_id)
    {
        $this->risk_assessment_suppliers_id = $risk_assessment_suppliers_id;
    }

    /**
     * @return string
     */
    public function getRiskFile()
    {
        return $this->risk_file;
    }

    /**
     * @param string $risk_file
     */
    public function setRiskFile($risk_file)
    {
        $this->risk_file = $risk_file;
    }


}