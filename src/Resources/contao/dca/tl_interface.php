<?php
/**
 * This file is part of Contao EstateManager.
 *
 * @link      https://www.contao-estatemanager.com/
 * @source    https://github.com/contao-estatemanager/wib-import
 * @copyright Copyright (c) 2019  Oveleon GbR (https://www.oveleon.de)
 * @license   https://www.contao-estatemanager.com/lizenzbedingungen.html
 */

if(ContaoEstateManager\OnOfficeReferenceImport\AddonManager::valid()) {

    // Add type option
    $GLOBALS['TL_DCA']['tl_interface']['fields']['type']['options'][] = 'onofficereference';

    // Add palettes
    $GLOBALS['TL_DCA']['tl_interface']['palettes']['onofficereference'] = '{title_legend},title,type;{oi_field_legend},provider,anbieternr,uniqueField,importPath,filesPath,filesPathContactPerson;{related_records_legend},contactPersonActions,contactPersonUniqueField,importThirdPartyRecords;{sync_legend},autoSync';
}
