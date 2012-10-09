<?php
namespace TYPO3\CMS\Extbase\Utility;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2009 Jochen Rau <jochen.rau@typoplanet.de>
 *  All rights reserved
 *
 *  This class is a backport of the corresponding class of FLOW3.
 *  All credits go to the v5 team.
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
/**
 * Cache clearing helper functions
 *
 * @deprecated since Extbase 1.4.0; will be removed in Extbase 6.0. Please use Tx_Extbase_Service_CacheService instead
 */
class CacheUtility {

	/**
	 * Clears the page cache
	 *
	 * @param mixed $pageIdsToClear (int) single or (array) multiple pageIds to clear the cache for
	 * @return void
	 */
	static public function clearPageCache($pageIdsToClear = NULL) {
		\TYPO3\CMS\Core\Utility\GeneralUtility::logDeprecatedFunction();
		$objectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
		$cacheService = $objectManager->get('TYPO3\\CMS\\Extbase\\Service\\CacheService');
		$cacheService->clearPageCache($pageIdsToClear);
	}

}


?>