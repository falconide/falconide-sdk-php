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
class EmailDetails implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $fromname public property
     */
    public $fromname;

    /**
     * @todo Write general description for this property
     * @var string|null $subject public property
     */
    public $subject;

    /**
     * @todo Write general description for this property
     * @var string|null $from public property
     */
    public $from;

    /**
     * @todo Write general description for this property
     * @var string|null $replytoid public property
     */
    public $replytoid;

    /**
     * @todo Write general description for this property
     * @var string|null $tags public property
     */
    public $tags;

    /**
     * @todo Write general description for this property
     * @var string|null $content public property
     */
    public $content;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $fromname  Initialization value for $this->fromname
     * @param string $subject   Initialization value for $this->subject
     * @param string $from      Initialization value for $this->from
     * @param string $replytoid Initialization value for $this->replytoid
     * @param string $tags      Initialization value for $this->tags
     * @param string $content   Initialization value for $this->content
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->fromname  = func_get_arg(0);
            $this->subject   = func_get_arg(1);
            $this->from      = func_get_arg(2);
            $this->replytoid = func_get_arg(3);
            $this->tags      = func_get_arg(4);
            $this->content   = func_get_arg(5);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['fromname']  = $this->fromname;
        $json['subject']   = $this->subject;
        $json['from']      = $this->from;
        $json['replytoid'] = $this->replytoid;
        $json['tags']      = $this->tags;
        $json['content']   = $this->content;

        return $json;
    }
}