<?php
namespace X4B\Utility\Net\DNS;


class DNSAnswer
{
    var $count = 0;
    var $results = array();

    function AddResult($type, $typeid, $class, $ttl, $data, $domain = "", $string = "", $extras = array())
    {
        $this->results[$this->count] = new DNSResult();
        $this->results[$this->count]->type = $type;
        $this->results[$this->count]->typeid = $typeid;
        $this->results[$this->count]->class = $class;
        $this->results[$this->count]->ttl = $ttl;
        $this->results[$this->count]->data = $data;
        $this->results[$this->count]->domain = $domain;
        $this->results[$this->count]->string = $string;
        $this->results[$this->count]->extras = $extras;
        $this->count++;
        return ($this->count - 1);
    }
}