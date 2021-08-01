<?php 
include_once('partials/header.php');

	if(!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !== true)
	{
	    // redirect to login
	     header('Location: login.php');
	    exit();
	   
	}

?>
<main>
	<div class="container">
		<div class="row">
			<div class="col s12">
				<div class="card">
					<div class="card-content">
						<span class="card-header">Error!!!</span>
						<p class="flow-text">Ooop! You run into an error.</p>
						<p>Please click <a href="notepage.php">here</a> to go back.</p>
						<a href="notepage.php" class="btn">Back</a>
					</div>
				</div>
			</div>
		</div>
	</div>

</main>