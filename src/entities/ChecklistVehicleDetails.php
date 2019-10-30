<?php


class ChecklistVehicleDetails
{
    private $description_title ='';
    private $description_content ='';
    private $description_status ='';

    /**
     * ChecklistVehicleDetails constructor.
     */
    public function __construct()
    {
    }


    /**
     * @return string
     */
    public function getDescriptionTitle()
    {
        return $this->description_title;
    }

    /**
     * @param string $description_title
     */
    public function setDescriptionTitle($description_title)
    {
        $this->description_title = $description_title;
    }

    /**
     * @return string
     */
    public function getDescriptionContent()
    {
        return $this->description_content;
    }

    /**
     * @param string $description_content
     */
    public function setDescriptionContent($description_content)
    {
        $this->description_content = $description_content;
    }

    /**
     * @return string
     */
    public function getDescriptionStatus()
    {
        return $this->description_status;
    }

    /**
     * @param string $description_status
     */
    public function setDescriptionStatus($description_status)
    {
        $this->description_status = $description_status;
    }


}