<?php
/**
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
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
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
	 <?php echo $this->Session->flash('auth'); ?>
	<div id="container">
		<div id="header">
			 <?php if ($this->Session->read('Auth.User')): ?>
			<ul>
				<li>
					<a href="/backend-ingrup/roles">Roles</a>
					<ul>
						<li>
							<a href="/backend-ingrup/users">Usuarios</a>
							<ul>
								<li>
									<a href="/backend-ingrup/users/logout">Cerrar Sesión</a>
								</li>
							</ul>
						</li>
						
					</ul>
				</li>
				<li>
					<a href="/backend-ingrup/family_products">Productos por Familia</a>
					<ul>
						<li>
							<a href="/backend-ingrup/category_products">Productos por Categoria</a>
							<ul>
								<li>
									<a href="/backend-ingrup/products">Productos</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="/backend-ingrup/family_products">Familia Industria</a>
					<ul>
						<li>
							<a href="/backend-ingrup/category_products">Categoria Industrias</a>
							<ul>
								<li>
									<a href="/backend-ingrup/products">Productos</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
			<?php  endif; ?>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<p>
				Copyright © 2015 INGRUP - All Rights Reserved
			</p>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
