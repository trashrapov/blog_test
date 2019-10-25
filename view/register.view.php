<?php

require 'layouts/header.view.php';

?>

<div class="container mt-5 px-0">
	
	<div class="row m-0 p-0 px-1 justify-content-center">

		<div class="col-12 col-sm-8 col-lg-6">

			<form class="border rounded px-1 px-sm-5 pb-2 pb-sm-5 pt-4" action="/register" method="POST">

				<h5 class="text-primary text-center">Register</h5>

				<div class="form-row">	

					<input type="hidden" name="token" value="<?= $_SESSION['token']; ?>">		

					<div class="form-group col-12">

						<label for="postTitle">Login</label>

					    <input 

					    	type="text" 

					    	class="form-control" 

					    	id="postTitle" 

					    	placeholder="Login" 

					    	name="login"

					    	value="<?php if (isset($_SESSION['data']['login'])); echo $_SESSION['data']['login']; ?>" 

					    >

					    <?php if (isset($_SESSION['errors']['login'])): ?>

					    	<span class="text-danger"><?= $_SESSION['errors']['login']; ?></span>

					    <?php endif; ?>


					</div>

					<div class="form-group col-12">

						<label for="postTitle">Password</label>

					    <input 

					    	type="text" 

					    	class="form-control" 

					    	id="postTitle" 

					    	placeholder="Password" 

					    	name="password"

					    	value="<?php if (isset($_SESSION['data']['password'])); echo $_SESSION['data']['password']; ?>" 

					    >

					    <?php if (isset($_SESSION['errors']['password'])): ?>

					    	<span class="text-danger"><?= $_SESSION['errors']['password']; ?></span>

					    <?php endif; ?>


					</div>

					<div class="form-group col-12">

						<label for="postTitle">Confirm password</label>

					    <input 

					    	type="text" 

					    	class="form-control" 

					    	id="postTitle" 

					    	placeholder="Confirm password" 

					    	name="confirm_password"

					    	value="<?php if (isset($_SESSION['data']['confirm_password'])); echo $_SESSION['data']['confirm_password']; ?>" 

					    >

					    <?php if (isset($_SESSION['errors']['confirm_password'])): ?>

					    	<span class="text-danger"><?= $_SESSION['errors']['confirm_password']; ?></span>

					    <?php endif; ?>


					</div>					
					

				</div>

				<button class="btn btn-block btn-primary mt-3" type="submit">Register</button>

			</form>

		</div>

	</div>

</div>

<?php

	require 'layouts/footer.view.php';

?>
