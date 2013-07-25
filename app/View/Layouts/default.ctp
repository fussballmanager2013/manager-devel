<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
		</div>
		<div id="content">
			<p>
				<h2>Account erstellen</h2>
				 <p> Menü  | Optionen</p>
			</p>
			<div style="padding: 20px 10px 10px 50px">

				<div style="width:150px;height200px; border:2px solid black; float:left; padding:20px">
				  
					<form>
						Nickname: <input type="text" name="nickname"><br>
						Vorname: <input type="text" name="firstname"><br>
						Nachname: <input type="text" name="lastname"><br>
						Mailadresse: <input type="text" name="mail"><br>
						Mailadresse wiederholen:: <input type="text" name="mail2"><br>
						Passwort: <input type="text" name="password"><br>
						Passwort wiederholen: <input type="text" name="password2"><br>
					</form>
					</div>

					<div style="width:200px; height:200px; border:2px solid black; float:left; padding: 10px;  margin-left: 50px">
						<h3>Profilbild</h3>
						<p>Name: Max Manager</p>
						<form name="input" action="html_form_action.asp" method="get">
							<input type="submit" value="Hochladen">
						</form>
					</div>
					<div style="width:500px; height200px; border:2px solid black; float:left; padding:20px; margin-top: 100px">
					  <h3>Ich stimme den AGBs zu: </h3>
					<form>
						<input type="checkbox" name="vehicle" value="Bike"> akzeptieren<br>
					</form>
				</div>
			</div>
	
		
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
