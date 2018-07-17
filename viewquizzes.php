<?php if(!isset($_SESSION['username']) || empty($_SESSION['username'])): ?>

<?php elseif (!empty($_SESSION['page']) && $_SESSION['page'] == 'View Quizzes'): ?>
	<?php $_SESSION['action'] = '<h2>It worked</h2>
								 <p>Further steps towards making a dynamic website</p>' ?>
<?php endif; ?>



