<body>
<meta charset="UTF-8">
        <!--<title>  </title>-->
        <link rel="stylesheet" type="text/css" href="css/new-project.css"/>

	<div>
		<div>
			<div>
				<form action="" id="manage-project">

			<input type="hidden" name="id">
			<div>
				<div class="text">
					<div>
						<input name="title" placeholder="Untitled Project" type="text"/>
					</div>
				</div>

				<div>
					<div class="status">
						<label for=""> Status </label>
							<select name="status" id="status">
								<option value="0"> Pending </option>
								<option value="3"> On-Hold </option>
								<option value="5"> Done </option>
							</select>
					</div>
				</div>
			</div>

			<div>
				<div>
				<div class="startdate">
				<label for=""> Start Date </label>
				<input type="date" autocomplete="off" name="start_date">
				</div>
			</div>

			<div>
				<div class="enddate">
				<label for=""> End Date </label>
				<input type="date" autocomplete="off" name="end_date">
				</div>
			</div>
			</div>

			<div>
			<div>
				<div>
				<label for=""> Project Manager </label>
				<select name="manager_id">
					<option></option>
				
					<option></option>

				</select>
				</div>
			</div>

			<input type="hidden" name="manager_id">

			<div>
				<div>
				<label for=""> Project Team Members </label>
				
				</div>
			</div>
			</div>
			<div>
				<div>
					<div>
						<label for=""> Description </label>
						<textarea name="description" id="" cols="30" rows="10" class="summernote form-control">
							
						</textarea>
					</div>
				</div>
			</div>
			</form>
			</div>
			<div>
				<div>
					<button form="manage-project"> Save </button>
					<button type="button" onclick="location.href='index.php?page=project_list'"> Cancel </button>
				</div>
			</div>
		</div>
	</div>

	<!-- For progress bar -->
	<!-- CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    project_id INT,
    task_name VARCHAR(255),
    status ENUM('completed', 'in_progress', 'not_started')
	); -->

	<?php
		/* $host = 'localhost';
		$db   = 'database_name';
		$user = 'username';
		$pass = 'password';
		$charset = 'utf8mb4'; 

		$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
		$pdo = new PDO($dsn, $user, $pass); */

		$projectId = 1; // Replace with your project ID

		$stmt = $pdo->prepare('SELECT status, COUNT(*) as count FROM tasks WHERE project_id = :projectId GROUP BY status');
		$stmt->execute(['projectId' => $projectId]);

		$tasks = $stmt->fetchAll(PDO::FETCH_KEY_PAIR);

		$totalTasks = array_sum($tasks);
		$completedTasks = isset($tasks['completed']) ? $tasks['completed'] : 0;

		$progress = $totalTasks > 0 ? ($completedTasks / $totalTasks) * 100 : 0;
	?>

	<div class="progress-bar">
		<div class="progress-bar-inner" style="width: <?php echo $progress; ?>%"></div>
	</div>

</body>