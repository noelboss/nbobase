<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2011 Paul Rohrbeck
*  All rights reserved
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

class Tx_Nbobase_ViewHelpers_Format_StrftimeViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {

	/**
	 * Render the supplied DateTime object as a formatted date using strftime.
	 *
	 * @param mixed $date either a DateTime object or a string (UNIX-Timestamp)
	 * @param string $format Format String which is taken to format the Date/Time
	 * @return string Formatted date
	 */
	public function render($date = NULL, $format = '%A, %d. %B %Y') {

		if ($date === NULL) {
			$date = $this->renderChildren();
			if ($date === NULL) {
				return '';
			}
		}

		if ($date instanceof DateTime) {
			try {
				//return strftime($format, $date->getTimestamp()); funktioniert nur mit PHP > 5.3
				return strftime($format, $date->format('U'));
			} catch (Exception $exception) {
				throw new Tx_Fluid_Core_ViewHelper_Exception('"' . $date . '" was DateTime and could not be converted to UNIX-Timestamp by DateTime.', 200000001);
			}
		}

		return strftime($format, (int)$date);
	}
}
?>