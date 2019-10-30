<?php


class Equipments
{
    private $equipment_name ='';
    private $equipment_number ='';
    private $site_id ='';

    /**
     * Equipments constructor.
     */
    public function __construct()
    {
    }


    /**
     * @return string
     */
    public function getEquipmentName()
    {
        return $this->equipment_name;
    }

    /**
     * @param string $equipment_name
     */
    public function setEquipmentName($equipment_name)
    {
        $this->equipment_name = $equipment_name;
    }

    /**
     * @return string
     */
    public function getEquipmentNumber()
    {
        return $this->equipment_number;
    }

    /**
     * @param string $equipment_number
     */
    public function setEquipmentNumber($equipment_number)
    {
        $this->equipment_number = $equipment_number;
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