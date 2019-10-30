<?php


class RiskHappen
{
    private $risk_name ='';
    private $risk_comment ='';
    private $risk_recommendation ='';
    private $risk_job_report  ='';

    /**
     * RiskHappen constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getRiskName()
    {
        return $this->risk_name;
    }

    /**
     * @param string $risk_name
     */
    public function setRiskName($risk_name)
    {
        $this->risk_name = $risk_name;
    }

    /**
     * @return string
     */
    public function getRiskComment()
    {
        return $this->risk_comment;
    }

    /**
     * @param string $risk_comment
     */
    public function setRiskComment($risk_comment)
    {
        $this->risk_comment = $risk_comment;
    }

    /**
     * @return string
     */
    public function getRiskRecommendation()
    {
        return $this->risk_recommendation;
    }

    /**
     * @param string $risk_recommendation
     */
    public function setRiskRecommendation($risk_recommendation)
    {
        $this->risk_recommendation = $risk_recommendation;
    }

    /**
     * @return string
     */
    public function getRiskJobReport()
    {
        return $this->risk_job_report;
    }

    /**
     * @param string $risk_job_report
     */
    public function setRiskJobReport($risk_job_report)
    {
        $this->risk_job_report = $risk_job_report;
    }


}