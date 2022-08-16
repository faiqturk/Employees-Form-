<?php
	/**
	 * Main Loader File.
	 *
	 * @package Employee-Form
	 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( ! class_exists( 'EF_Loader' ) ) {

	/**
	 * Class EF_Loader
	 */
	class EF_Loader {

		/**
		 * Constructor.
		 */
		public function __construct() { 
			$this->includes();
			add_action('init', array( $this, 'scratchcode_create_payment_table'));
		}		

		/**
		 * Function for Including Files and Classes.
		 */
		public function includes() {
			include_once 'class-ef-tab.php';
		}

		/**
		 * Function for make a table of employees.
		 */
		public function scratchcode_create_payment_table() {
 
			global $wpdb;
		 
			$table_name = $wpdb->prefix . "employee";
		 
			$charset_collate = $wpdb->get_charset_collate();
		 
			$sql = "CREATE TABLE IF NOT EXISTS $table_name (
			  id bigint(20) NOT NULL AUTO_INCREMENT,
			  fname varchar(50) NOT NULL,
			  lname varchar(50) NOT NULL,
			  email varchar(50) NOT NULL,
			  img varchar(350) NOT NULL,
			  PRIMARY KEY id (id)
			) $charset_collate;";
		 
			require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
			dbDelta($sql);
		}    
	}
}
new EF_Loader();

