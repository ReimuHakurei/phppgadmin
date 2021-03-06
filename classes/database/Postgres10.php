<?php

/**
 * A Class that implements the DB Interface for Postgres
 * Note: This Class uses ADODB and returns RecordSets.
 *
 * $Id: Postgres.php,v 1.320 2008/02/20 20:43:09 ioguix Exp $
 */

include_once('./classes/database/Postgres.php');

class Postgres10 extends Postgres11 {
	var $major_version = 10.0;

	/**
	 * Constructor
	 * @param $conn The database connection
	 */
	function __construct($conn) {
		parent::__construct($conn);
	}
}
?>
