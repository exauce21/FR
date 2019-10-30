<?php


class ChecklistTruckDetails
{
    private $checklist_truck_description_content ='';
    private $checklist_truck_status ='';

    /**
     * ChecklistTruckDetails constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getChecklistTruckDescriptionContent()
    {
        return $this->checklist_truck_description_content;
    }

    /**
     * @param string $checklist_truck_description_content
     */
    public function setChecklistTruckDescriptionContent($checklist_truck_description_content)
    {
        $this->checklist_truck_description_content = $checklist_truck_description_content;
    }

    /**
     * @return string
     */
    public function getChecklistTruckStatus()
    {
        return $this->checklist_truck_status;
    }

    /**
     * @param string $checklist_truck_status
     */
    public function setChecklistTruckStatus($checklist_truck_status)
    {
        $this->checklist_truck_status = $checklist_truck_status;
    }



}