<?php declare(strict_types=1);

	/**
	 * @author: James Kirkby <jkirkby@protonmail.ch>
	 * File: NodeType.php
	 * Date: 26/11/2017
	 * Time: 07:17
	 */
	namespace Jkirkby91\Boilers\NodeEntityBoiler {

		/**
		 * Interface NodeContract
		 *
		 * @package Jkirkby91\Boilers\NodeEntityBoiler
		 * @author  James Kirkby <jkirkby@protonmail.ch>
		 */
		interface NodeContract
		{
			/**
			 * @return string
			 */
			public function getNodeType();

			/**
			 * @param $nodeType
			 * @return $this
			 *
			 * @TODO Type hint nodeType Entity?
			 */
			public function setNodeType(string $nodeType);

			/**
			 * @return mixed
			 */
			public function getContentChangedBy();

			/**
			 * Sets createdFromIp.
			 *
			 * @param string $createdFromIp
			 *
			 * @return $this
			 */
			public function setCreatedFromIp($createdFromIp);

			/**
			 * Returns createdFromIp.
			 * @return string
			 */
			public function getCreatedFromIp();

			/**
			 * setUpdatedFromIp()
			 * @param string $updatedFromIp
			 *
			 * @return mixed
			 */
			public function setUpdatedFromIp($updatedFromIp);

			/**
			 * Returns updatedFromIp.
			 * @return string
			 */
			public function getUpdatedFromIp();

			/**
			 * @return DateTime
			 */
			public function getDeletedAt();

			/**
			 * @param \DateTime|null $deletedAt
			 * @return mixed
			 */
			public function setDeletedAt(\DateTime $deletedAt = null);

			/**
			 * Restore the soft-deleted state
			 */
			public function restore();

			/**
			 * @return bool
			 */
			public function isDeleted();

			/**
			 * @return DateTime
			 */
			public function getCreatedAt();

			/**
			 * @return DateTime
			 */
			public function getUpdatedAt();

			/**
			 * @param \DateTime $createdAt
			 */
			public function setCreatedAt(\DateTime $createdAt);

			/**
			 * @param \DateTime $updatedAt
			 */
			public function setUpdatedAt(\DateTime $updatedAt);
		}
	}