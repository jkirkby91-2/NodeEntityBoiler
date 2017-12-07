<?php declare(strict_types=1);

	/**
	 * @author: James Kirkby <jkirkby@protonmail.ch>
	 * File: NodeType.php
	 * Date: 26/11/2017
	 * Time: 07:17
	 */
	namespace Jkirkby91\Boilers\NodeEntityBoiler;

	/**
	 * Class NodeType
	 *
	 * @package Jkirkby91\Boilers\NodeEntityBoiler
	 * @author  James Kirkby <jkirkby@protonmail.ch>
	 * @TODO fully implement this contract
	 */
	interface NodeType
	{

		/**
		 * setNodeType()
		 * @param string $nodeType
		 *
		 * @return mixed
		 */
		public function setNodeType(string $nodeType);

		/**
		 * getNodeType()
		 * @return \Jkirkby91\Boilers\NodeEntityBoiler\NodeType
		 */
		public function getNodeType() : NodeType;
	}