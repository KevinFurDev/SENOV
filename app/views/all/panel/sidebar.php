
<div class="container-fluid">
	<div class="row main-p">

		<div class="col-2 panel-nav pl-0">

			<div class="row header-main">
				<div class="col-12 panel-title">
					<span>SENOV</span>
				</div>
			</div>	

			<div class="row">
				<div class="col-12 p-4">
					<div class="form-group py-2">
						<select class="form-control" id="exampleFormControlSelect1">
							<option>Administrador</option>
							<option>Apoyo Administrativo</option>
						</select>
					</div>
				</div>		
			</div>

			<div>
				<nav id ="" class="menu-lateral">
					<ul>
						<li>
							<a href="" title="Ir al Inicio">
								<div class="barra"></div>
								<span><i class="fas fa-link mr-2"></i>Inicio</span>
							</a>
						</li>
						<li>
							<a href="" title="Ir a Diligenciar">
								<div class="barra"></div>
								<span><i class="fas fa-link mr-2"></i>Nueva Novedad</span>
							</a>
						</li>
						<li>
							<a href="" title="Ir a Estados">
								<div class="barra"></div>
								<span><i class="fas fa-link mr-2"></i>Estados de Novedad</span>
							</a>
						</li>
						<li>
							<a href="" title="Salir">
								<div class="barra"></div>
								<span><i class="fas fa-link mr-2"></i>Salir</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>

			<div class=" footer-panel mx-2">
				<p class="text-muted m-0">Senov Versión 3.0.0 - &copy; Equipo Senov - <?php echo date('Y'); ?></p>
			</div>


		</div>

		<div class="col-10 main2">

			<div class="row header-main">

				<div class="bars m-0">
					<i id="bars" class="fas fa-bars icon-sidebar open"></i>
					<i id="times" class="fas fa-times icon-sidebar open"></i>
				</div>
				
			</div>

			<div class="row">
				<div class="col-12 p-5">
					<div class="table-responsive">
						<table class="table">
							<tr>
								<th>sdsad</th>
								<th>sdsad</th>
								<th>sdsad</th>
								<th>sdsad</th>
							</tr>
							<tr>
								<td>sadasdsd</td>
								<td>sadasdsd</td>
								<td>sadasdsd</td>
								<td>sadasdsd</td>
							</tr>
						</table>
					</div>
				</div>
			</div>

		</div>

	</div>
</div>

<style>
body, html {
  height: 100%;
}
	
.panel-nav{
	position: absolute;
	background-color: #333;
	height: 100%;
}

.main2{
	height: 100%;

}

.main-p{
	height: 100vh;
}

.bars{
	background-color: #FF8400;
	padding: 4px;
	padding-left: 15px;
}
#bars{
	font-size: 28px;
}
.bars i{
	margin: 10px;
	font-weight: 300;
}

.header-main{
	width: 100%
	background-color: #333;
}

.header-main span{
	font-size: 30px;
	color: #FFF;	
	font-family: 'Roboto', sans-serif;
	text-align: center;
	font-weight: 300;
}

.panel-title{
	background-color: #FF8400;
	padding: 5px;
	text-align: center;
	border-right: 1px solid #333;
}

.img-user{
	height: 120px;
	width: 100%;
}

.img-thumbnail{
	background-color: #FF8400;
	border-color: #333;
}

.menu-lateral ul{
	list-style: none;
	padding: 0;
}

.menu-lateral ul li a{
	text-decoration: none;
}


.menu-lateral ul li span {
	display: block;
	padding: 20px 10px;
	font-family: 'Roboto', sans-serif;
	font-weight: 500;
	border-bottom: 1px solid rgba(255,255,255,.1);
	text-decoration: none;
	transition: all ease 300ms;
	color: #FFF;
	opacity: .6;
	-webkit-transition: opacity .2s;
	font-size: 17px;
}

.menu-lateral ul li:hover span{
	opacity: 1;
} 

.menu-lateral ul li a i {
	margin-right: 20px;
	font-weight: normal;
}

.footer-panel{
	position: absolute;
	right: 0;
	bottom: 0;
}







</style>