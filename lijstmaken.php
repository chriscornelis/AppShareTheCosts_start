<?php
include('classes/Costlist.class.php');
	/*if(isset($_POST['make_list']))
	{
	$feedback = 'tot hier';

		if(!empty($_POST['name_list']) && !empty($_POST['password_list']))
		{
			
			try
			{
				$list = new List();
				$list->ListName = $_POST['name_list'];
				//$list->UserID = $_POST['']; ------- moet uit SESSION gehaald worden
				$list->ListPass = $_POST['password_list'];
				$list->SaveList();
				
			}
			catch(Exception $e)
			{
				$feedback = $e->getMessage();
			}
		}
		else
		{
			$feedback = "Vergeet niet alle velden in te vullen";
		}
	}*/
?>	
<?php include 'header.php'; ?>
	<div data-role="content">
			<h2>Maak een uitgavenlijst</h2>
			<form action="" method="post">
				<input type="text" name="list" id="name_list" placeholder="Naam lijst" value="">
				<input type="password" name="password" id="password_list" placeholder="Kies een wachtwoord" value="" autocomplete="off">
				
				<input type="submit" name="make_list" id="make_list" value="Maak de lijst" />
			</form>
			
			<?php if(isset($feedback)):?>
			<div class="feedback">
			
			<?php echo $feedback; ?>
			</div>
			<?php endif; ?>
		</div><!--content-->
		
	
	<?php include 'footer.php'; ?>