<?php $user = $_SESSION['username'];?>

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
    <div class="container topnav">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/clinic/">CLINIC Stystem</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a class="btn btn-md" href="/clinic/Terms">Terms</a></li>
				<li><a class="btn btn-md" href="/clinic/About">About</a></li>
				<li class="dropdown">
          			<a 
          				href="#" 
          				class="dropdown-toggle" 
          				data-toggle="dropdown" 
          				role="button" 
          				aria-haspopup="true" 
          				aria-expanded="false">
          				<?php 
          					if($user)echo "<span id=\"logo\">#".ucfirst($user)."</span>";
          				?> 
          				<span class="caret"></span>
          			</a>
          			<ul class="dropdown-menu">
            			<li><a href="/clinic/Book">Book</a></li>
            			<li><a href="/clinic/Profile">Profile</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a style="cursor: pointer;" class="text-center" onclick="window.location.href='/clinic/inc/logout.php'"><b>Logout</b></a></li>
          			</ul>
        		</li>
            </ul>
        </div>
    </div>
</nav>