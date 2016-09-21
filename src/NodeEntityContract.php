<?php

namespace Jkirkby91\Boilers\NodeEntityBoiler;

/**
 * Interface NodeEntityContract
 * @package Jkirkby91\EntityNode\Contracts
 */
interface NodeEntityContract extends EntityContract
{

    /**
     * @return mixed
     */
    public function getNid();

    /**
     * @param $nid
     * @return mixed
     */
    public function setNid($nid);

    /**
     * @return mixed
     */
    public function getNodeType();

    /**
     * @param $nodeType
     * @return mixed
     */
    public function setNodeType($nodeType);
}