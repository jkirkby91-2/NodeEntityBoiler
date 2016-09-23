<?php

namespace Jkirkby91\Boilers\NodeEntityBoiler;

/**
 * Interface EntityContract
 *
 * @package app\Contracts
 * @author James Kirkby <me@jameskirkby.com>
 */
interface EntityContract
{
    /**
     * @return mixed
     */
    public function getId();

    /**
     * @return mixed
     */
    public function getNid();

    /**
     * @param $nid
     * @return mixed
     */
    public function setNid($nid);
}