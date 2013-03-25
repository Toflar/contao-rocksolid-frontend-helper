<?php
/*
 * Copyright MADE/YOUR/DAY OG <mail@madeyourday.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * RockSolid Frontend Helper configuration
 *
 * @author Martin Auswöger <martin@madeyourday.net>
 */

$GLOBALS['TL_HOOKS']['parseFrontendTemplate'][] = array('MadeYourDay\\Contao\\FrontendHelper', 'parseFrontendTemplate');
$GLOBALS['TL_HOOKS']['getContentElement'][] = array('MadeYourDay\\Contao\\FrontendHelper', 'getContentElementHook');
