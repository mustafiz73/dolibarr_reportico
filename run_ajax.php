<?php
/*
 Reportico - PHP Reporting Tool
 Copyright (C) 2010-2014 Peter Deed

 This program is free software; you can redistribute it and/or
 modify it under the terms of the GNU General Public License
 as published by the Free Software Foundation; either version 2
 of the License, or (at your option) any later version.
 
 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with this program; if not, write to the Free Software
 Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

 * File:        run.php
 *
 * Reportico runner script
 *
 * @link http://www.reportico.org/
 * @copyright 2010-2014 Peter Deed
 * @author Peter Deed <info@reportico.org>
 * @package Reportico
 * @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @version $Id: run.php,v 1.25 2014/05/17 15:12:31 peter Exp $
 */


  //DOLIBARR MAIN

 $res=0;
if (! $res && file_exists("../main.inc.php")) $res=@include '../main.inc.php';					// to work if your module directory is into dolibarr root htdocs directory
if (! $res && file_exists("../../main.inc.php")) $res=@include '../../main.inc.php';// to work if your module directory is into a subdir of root htdocs directory
//if (! $res && file_exists("/home/patrick/gitrespo/dolibarr/htdocs/main.inc.php")) $res=@include "/home/patrick/gitrespo/dolibarr/htdocs/main.inc.php";     // Used on dev env only
if(strpos($_SERVER['PHP_SELF'], 'dolibarr_min')>0 && !$res && file_exists("/var/www/dolibarr_min/htdocs/main.inc.php")) $res=@include "/var/www/dolibarr_min/htdocs/main.inc.php";     // Used on dev env only
else if (! $res && file_exists("/var/www/dolibarr/htdocs/main.inc.php")) $res=@include '/var/www/dolibarr/htdocs/main.inc.php';   // Used on dev env only
if (! $res && file_exists("../../../../dolibarr/htdocs/main.inc.php")) $res=@include '../../../../dolibarr/htdocs/main.inc.php';   // Used on dev env only
if (! $res) die("Include of main fails");
global $conf;
//END DOLIBARR MAIN
//
llxHeader('',$langs->trans('Reportico'),'');

include 'run.php';


llxFooter();
	//ob_end_flush();

?>
