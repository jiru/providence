<?php
/* ----------------------------------------------------------------------
 * app/lib/Plugins/IWLPlugExternalExport.php : 
 * ----------------------------------------------------------------------
 * CollectiveAccess
 * Open-source collections management software
 * ----------------------------------------------------------------------
 *
 * Software by Whirl-i-Gig (http://www.whirl-i-gig.com)
 * Copyright 2018 Whirl-i-Gig
 *
 * For more information visit http://www.CollectiveAccess.org
 *
 * This program is free software; you may redistribute it and/or modify it under
 * the terms of the provided license as published by Whirl-i-Gig
 *
 * CollectiveAccess is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTIES whatsoever, including any implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * This source code is free and modifiable under the terms of
 * GNU General Public License. (http://www.gnu.org/copyleft/gpl.html). See
 * the "license.txt" file for details, or visit the CollectiveAccess web site at
 * http://www.CollectiveAccess.org
 *
 * ----------------------------------------------------------------------
 */
	
interface IWLPlugExternalExport {
	# -------------------------------------------------------
	# Initialization and state
	# -------------------------------------------------------
	public function __construct();
	public function register();
	public function init();
	public function cleanup();
	
	public function getDescription();
	public function checkStatus();
	
	# -------------------------------------------------------
	# Settings
	# -------------------------------------------------------
	public function getAvailableSettings();
	
	# -------------------------------------------------------
	# Processing
	# -------------------------------------------------------
	public function process($t_instance, $target_info, $options=null);
	# -------------------------------------------------------
}