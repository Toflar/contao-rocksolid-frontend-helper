<?php
/*
 * Copyright MADE/YOUR/DAY OG <mail@madeyourday.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MadeYourDay\RockSolidFrontendHelper;

/**
 * @author Martin Auswöger <martin@madeyourday.net>
 */
interface ElementProviderInterface
{
	/**
	 * Get elements configuration array indexed by type
	 *
	 * @param string $table
	 *
	 * @return array
	 */
	public function getElements($table);

	/**
	 * Get default values for new element by table and type
	 *
	 * @param string $table
	 * @param string $type
	 *
	 * @return array
	 */
	public function getDefaultValues($table, $type);
}
