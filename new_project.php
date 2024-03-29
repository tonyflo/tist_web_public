<?php
include "helpers/header.php";
?>
<html>
<head>
	<title>New Project</title>
	<script type="text/javascript" src="scripts/new_project.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="scripts/project.js"></script>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/selectors.css">
	<link rel="stylesheet" href="css/responsive.css">
	<meta name="description" content="Allows user to create a new project">
</head>
<body>
<form action="">
	<h3>New Project</h3>
	<h4>General Information About the Project</h4>
	Name: <input type="text" id="project_name" value="">
	<br>
	Start date: <input type="date" id="date_start">
	<br>
	Current phase: <select id="state_id"><?php include $PUBLIC_ROOT."helpers/lists/get_list_of_project_states.php" ?></select>
	<br>
	Science summary: <textarea rows="4" cols="80" id="summary_science"></textarea>
	<br>
	Summary of impact: <textarea rows="4" cols="80" id="summary_impact"></textarea>
	<br>
	Link to website: <input type="text" id="link_website" value="">
	<br>
	<h4>Information Specifically About Your Contribution to the Project</h4>
	<?php include 'helpers/join_project_form.php' ?>
	<input type="hidden" id="user_id" value="<?php echo $_SESSION['user_id']; ?>">
	<input type="hidden" id="lab_id" value="<?php echo $_GET['lab_id']; ?>">
	<input type="hidden" id="institution_id" value="<?php echo $_GET['institution_id']; ?>">
</form>
<button type="button" onclick="create_new_project()" id="new_project">Create Project</button>
<p id="status"></p>
</body>
</html>

