<?php
declare(strict_types=1);


/**
 * FullTextSearch - Full text search framework for Nextcloud
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Maxence Lange <maxence@artificial-owl.com>
 * @copyright 2018, Maxence Lange <maxence@artificial-owl.com>
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */


namespace OCP\FullTextSearch\Service;


use OCP\FullTextSearch\Model\IIndex;


/**
 * Interface IIndexService
 *
 * @since 15.0.0
 *
 * @package OCP\FullTextSearch\Service
 */
interface IIndexService {


	/**
	 * Retrieve an Index from the database, based on the Id of the Provider
	 * and the Id of the Document
	 *
	 * @since 15.0.0
	 *
	 * @param string $providerId
	 * @param string $documentId
	 *
	 * @return IIndex
	 */
	public function getIndex(string $providerId, string $documentId): IIndex;


	/**
	 * Update the status of an Index. status is a bit flag, setting $reset to
	 * true will reset the status to the value defined in the parameter.
	 *
	 * @since 15.0.0
	 *
	 * @param string $providerId
	 * @param string $documentId
	 * @param int $status
	 * @param bool $reset
	 */
	public function updateIndexStatus(string $providerId, string $documentId, int $status, bool $reset = false);


	/**
	 * Update the status of an array of Index. status is a bit flag, setting $reset to
	 * true will reset the status to the value defined in the parameter.
	 *
	 * @since 15.0.0
	 *
	 * @param string $providerId
	 * @param array $documentIds
	 * @param int $status
	 * @param bool $reset
	 */
	public function updateIndexesStatus(string $providerId, array $documentIds, int $status, bool $reset = false);


	/**
	 * Update an array of Index.
	 *
	 * @since 15.0.0
	 *
	 * @param array $indexes
	 */
	public function updateIndexes(array $indexes);

}

