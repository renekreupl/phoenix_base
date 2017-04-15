<?php
namespace ReneKreupl\PhoenixBase\ViewHelpers;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Rene Kreupl <info@renekreupl>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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

use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * This view helper returns its content compressed
 * It removes
 *
 * = Examples =
 * <code title="Inline">
 * {variable -> b:compress()}
 * </code>
 * <output>
 *
 * </output>
 *
 * <code title="As an if condition">
 * <b:compress>
 * 	<div>
 * 		<ul>
 * 			<li>
 * 				Level 1 Punkt 1
 * 				<ul>
 * 					<li>Level 2 Punkt 1</li>
 * 					<li>Level 2 Punkt 2</li>
 * 					<li>Level 2 Punkt 3</li>
 * 				</ul>
 * 			</li>
 * 			<li>Level 1 Punkt 2</li>
 * 			<li>Level 1 Punkt    3</li>
 * 		</ul>
 * 	</div>
 * </b:compress>
 * </code>
 * <output>
 * <div><ul><li>Level 1 Punkt 1<ul><li>Level 2 Punkt 1</li><li>Level 2 Punkt 2</li><li>Level 2 Punkt 3</li></ul></li><li>Level 1 Punkt 2</li><li>Level 1 Punkt 3</li></ul></div>
 * </output>
 *
 */
class CompressViewHelper extends AbstractViewHelper {

	/**
	 * Return the compressed content
	 *
	 * @return string
	 */
	public function render() {
		$content = $this->renderChildren();
		return preg_replace(array('/(\t|\n)/', '/\s\s+/'), array('', ' '), $content);
	}
}