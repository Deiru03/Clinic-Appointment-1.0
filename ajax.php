<?php
ob_start();
date_default_timezone_set("Asia/Manila");

$action = $_GET['action'];
include 'admin_class.php';
$crud = new Action();
if($action == 'login'){
	$login = $crud->login();
	if($login)
		echo $login;
}
if($action == 'signup'){
	$signup = $crud->signup();
	if($signup)
		echo $signup;
}
if($action == 'login2'){
	$login = $crud->login2();
	if($login)
		echo $login;
}
if($action == 'logout'){
	$logout = $crud->logout();
	if($logout)
		echo $logout;
}
if($action == 'logout2'){
	$logout = $crud->logout2();
	if($logout)
		echo $logout;
}
if($action == 'signup'){
	$save = $crud->signup();
	if($save)
		echo $save;
}
if($action == 'save_user'){
	$save = $crud->save_user();
	if($save)
		echo $save;
}
if($action == 'update_user'){
	$save = $crud->update_user();
	if($save)
		echo $save;
}
if($action == 'delete_user'){
	$save = $crud->delete_user();
	if($save)
		echo $save;
}
if($action == 'save_campus'){
	$save = $crud->save_campus();
	if($save)
		echo $save;
}
if($action == 'delete_campus'){
	$save = $crud->delete_campus();
	if($save)
		echo $save;
}
if($action == 'save_medicine'){
	$save = $crud->save_medicine();
	if($save)
		echo $save;
}
if($action == 'delete_medicine'){
	$save = $crud->delete_medicine();
	if($save)
		echo $save;
}
if($action == 'save_designation'){
	$save = $crud->save_designation();
	if($save)
		echo $save;
}
if($action == 'delete_designation'){
	$save = $crud->delete_designation();
	if($save)
		echo $save;
}
if($action == 'save_clinic_des'){
	$save = $crud->save_clinic_des();
	if($save)
		echo $save;
}
if($action == 'delete_clinic_des'){
	$save = $crud->delete_clinic_des();
	if($save)
		echo $save;
}
if($action == 'save_client'){
	$save = $crud->save_client();
	if($save)
		echo $save;
}
if($action == 'save_client_info'){
	$save = $crud->save_client_info();
	if($save)
		echo $save;
}
if($action == 'delete_client'){
	$save = $crud->delete_client();
	if($save)
		echo $save;
}
if($action == 'delete_health'){
	$save = $crud->delete_health();
	if($save)
		echo $save;
}
if($action == 'save_doctor_staff'){
	$save = $crud->save_doctor_staff();
	if($save)
		echo $save;
}
if($action == 'delete_doctor_staff'){
	$save = $crud->delete_doctor_staff();
	if($save)
		echo $save;
}
if($action == 'save_appointment'){
	$save = $crud->save_appointment();
	if($save)
		echo $save;
}
if($action == 'examine_appointment'){
	$save = $crud->examine_appointment();
	if($save)
		echo $save;
}
if($action == 'save_sched_settings'){
	$save = $crud->save_sched_settings();
	if($save)
		echo $save;
}
if($action == 'save_health'){
	$save = $crud->save_health();
	if($save)
		echo $save;
}
if($action == 'save_report'){
	$save = $crud->save_report();
	if($save)
		echo $save;
}
if($action == 'in_medicine'){
	$save = $crud->in_medicine();
	if($save)
		echo $save;
}
if($action == 'out_medicine'){
	$save = $crud->out_medicine();
	if($save)
		echo $save;
}
if($action == 'approve_appointment'){
	$save = $crud->approve_appointment();
	if($save)
		echo $save;
}
if($action == 'cancel_appointment'){
	$save = $crud->cancel_appointment();
	if($save)
		echo $save;
}
if($action == 'treat_appointment'){
	$save = $crud->treat_appointment();
	if($save)
		echo $save;
}
if($action == 'save_session'){
	$save = $crud->save_session();
	if($save)
		echo $save;
}
if($action == 'delete_session'){
	$save = $crud->delete_session();
	if($save)
		echo $save;
}
if($action == 'save_task'){
	$save = $crud->save_task();
	if($save)
		echo $save;
}
if($action == 'delete_task'){
	$save = $crud->delete_task();
	if($save)
		echo $save;
}
if($action == 'save_progress'){
	$save = $crud->save_progress();
	if($save)
		echo $save;
}
if($action == 'delete_progress'){
	$save = $crud->delete_progress();
	if($save)
		echo $save;
}
if($action == 'save_evaluation'){
	$save = $crud->save_evaluation();
	if($save)
		echo $save;
}
if($action == 'delete_evaluation'){
	$save = $crud->delete_evaluation();
	if($save)
		echo $save;
}
if($action == 'get_emp_tasks'){
	$get = $crud->get_emp_tasks();
	if($get)
		echo $get;
}
if($action == 'get_progress'){
	$get = $crud->get_progress();
	if($get)
		echo $get;
}
if($action == 'get_report'){
	$get = $crud->get_report();
	if($get)
		echo $get;
}
ob_end_flush();
?>
