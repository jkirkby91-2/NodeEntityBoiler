<?php declare(strict_types=1);

	/**
	 * @author: James Kirkby <jkirkby@protonmail.ch>
	 * File: NodeType.php
	 * Date: 26/11/2017
	 * Time: 07:17
	 */
	namespace Jkirkby91\Boilers\NodeEntityBoiler {

		/**
		 * Interface EntityContract
		 *
		 * @package app\Contracts
		 * @author James Kirkby <jkirkby91@gmail.com>
		 */
		interface EntityContract
		{
			/**
			 * getId()
			 * @return int
			 */
			public function getId() : int;

			/**
			 * getNid()
			 * @return int
			 */
			public function getNid() : int;

			/**
			 * setNid()
			 * @param int $nid
			 *
			 * @return \Jkirkby91\Boilers\NodeEntityBoiler\EntityContract
			 */
			public function setNid(int $nid) : EntityContract;
		}
	}
