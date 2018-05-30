<?php  

if(!isset($_SESSION)) { 
	session_start(); 
} 

if (!isset($_SESSION['id_usuario'])) header("location: ../index.php?erro_login=1");
?>
<nav>
	<div class="nav-wrapper blue">
		<a href="#!" class="brand-logo fontePadrao" >&nbsp;&nbsp;&nbsp;&nbsp;Action Rede</a>
		<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		<ul class="right hide-on-med-and-down">
			<li><a href="#" class="fontePadrao"><i class="left material-icons">home</i>Home</a></li>
			<li><a href="#" class="fontePadrao"><i class="left material-icons">supervisor_account</i>Grupos</a></li>
			<li><a href="#" class="fontePadrao"><i class="left material-icons">chat</i> Chat</a></li>
			<li ><a  href="#" class="fontePadrao"><i class="left material-icons">account_box</i><?php echo $_SESSION['nome']; ?></a></li>
			<li ><a href="../model/sair.php" class="fontePadrao"><i class="left material-icons">redo</i>Sair</a></li>
			<li>&nbsp;&nbsp;&nbsp;&nbsp;</li>
		</ul>
	</div>
</nav>

<ul class="sidenav" id="mobile-demo">
	<li><a href="sass.html">Sass</a></li>
	<li><a href="badges.html">Components</a></li>
	<li><a href="collapsible.html">Javascript</a></li>
	<li><a href="mobile.html">Mobile</a></li>
</ul>
