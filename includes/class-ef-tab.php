<?php
/**
 * Employee Form in Setting Tab
 *
 * 
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'EF_Tab' ) ) {
	/**
	 * Class EF_Tab
	 */
	class EF_Tab {

		/**
		 * 
		 */
		public function __construct() { 
			add_action("admin_menu", array( $this, "wpdocs_register_my_custom_menu_page"));
			$this->save_employees_data();
			$this->delete_employee_data();
		}
		
		/**
		 * Create a tab in setting menu page.
		 */
		public function wpdocs_register_my_custom_menu_page(){
			add_submenu_page( 
				'options-general.php',
				'Employees',
				'Employee Form',
				'administrator',
				'employee-form',
				array($this, 'my_custom_menu_page'),null );
		}

		/**
		 * Display a Form and Table of Employees
		 */
		public function my_custom_menu_page(){
			global $wpdb;    
			$employees = $wpdb->prefix . 'employee';
			$result = $wpdb->get_results ( "SELECT * FROM $employees");
			include_once dirname( __DIR__ ).'/templates/employee-form.php';
			include_once dirname( __DIR__ ).'/templates/data.php';

		}

		/**
		 * Save the data of employees form.
		 */
		public function save_employees_data() { 
			global $wpdb;
			$table_name = $wpdb->prefix . 'employee'; 
			if ( isset( $_POST['submit'] ) ){   
				$fname = $_POST['fname'];
				$lastname = $_POST['lastname'];
				$email = $_POST['email'];
				$wpdb->insert(
					$table_name, array(
						'fname' => $fname,
						'lname' => $lastname,
						'email' => $email,
						'img' => 'targetpath'
					)
				);
			}
		}

		/**
		 * 
		 */
		public function delete_employee_data() { 
			
			global $wpdb;
			$table_name = $wpdb->prefix . 'employee';

			// if ( isset( $_GET['dlt'] ) ){ 
				echo isset($_GET['id']);
				// echo $_POST[''];  
				// $wpdb->delete(
				// 	$table_name, array(
				// 		'id' => 1
				// 	)
				// );
			// }
		}
	}
}

new EF_Tab();
