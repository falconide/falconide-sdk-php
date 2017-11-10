<?php
/*
 * FalconideAPIV10Lib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace FalconideAPIV10Lib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class Attributes implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps NAME
     * @var array|null $nAME public property
     */
    public $nAME;

    /**
     * @todo Write general description for this property
     * @maps REGID
     * @var array|null $rEGID public property
     */
    public $rEGID;

    /**
     * Constructor to set initial or default values of member properties
     * @param array $nAME  Initialization value for $this->nAME
     * @param array $rEGID Initialization value for $this->rEGID
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->nAME  = func_get_arg(0);
            $this->rEGID = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['NAME']  = $this->nAME;
        $json['REGID'] = $this->rEGID;

        return $json;
    }
}
