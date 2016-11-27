<nav class="navbar navbar-inverse">
	<div class="container-fluid">
        <div class="navbar-header">
			<!-- Fait le boutton carré avec 3 lignes (on le voit lorsque la fenêtre est petite)-->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar" style="background-color:green;"></span>
                <span class="icon-bar" style="background-color:green;"></span>
                <span class="icon-bar" style="background-color:green;"></span>
            </button>
			<!-- Lien BioShare à gauche du menu -->
            <a class="navbar-brand" href="<?php echo base_url(); ?>">BioShare</a>
			<ul class="nav navbar-nav navbar-left">
				<li><a href="<?php echo base_url(); ?>welcome/fruits">Fruits</a></li>
				<li><a href="<?php echo base_url(); ?>welcome/vegetables">Vegetables</a></li>
			</ul>
        </div>
		<!-- Si l'écran est petit et qu'on clique sur le boutton carré alors le menu tombe -->
		<!-- Si l'écran est grand alors le menu est affiché à droite -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<!-- Formulaire de recherche -->
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
			<!-- Les bouttons du menu qui sont affichés à droite -->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url(); ?>welcome/inscriptionForm">Inscription</a></li>
				<!-- Lorsque le boutton login est cliqué alors la fenêtre modale est affichée -->
                <li><a data-toggle="modal" data-target="#lf">Login</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>

<!-- fenêtre modale pour login -->
<div class="modal fade" role="dialog" id="lf">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login</h4>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url(); ?>welcome/login" method="POST">
                    <label for="login">Login</label>
                    <input type="text" class="form-control" name="login" id="login" />
                    <label for="pwd">Password</label>
                    <input type="password" class="form-control" name="pwd" id="pwd" />
                    <button type="submit" class="btn btn-default">Login</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>