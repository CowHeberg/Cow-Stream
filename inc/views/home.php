<!DOCTYPE HTML>
	<head>
		<title>Cow-Stream | <?php echo  $this->getTitle(); ?></title>
		<link href="<?php echo $this->assets('css/style.css'); ?>" rel="stylesheet" type="text/css"  media="all" />
	</head>
	<body>
		<!---start-wrap---->
			<!---start-header---->
			<div class="header">
				<div class="wrap">
				<!---start-logo---->
				<div class="logo">
					<a href="index.html"><img src="<?php echo $this->assets('images/logo.png'); ?>" title="logo" /></a>
				</div>
				<!---End-logo---->
				<!---start-top-menu-search---->
				<div class="top-menu">
					<div class="top-nav">
						<ul>
							<li><a href="<?php echo $this->url('/'); ?>">Home</a></li>
							<li><a href="<?php echo $this->url('videos'); ?>">Videos</a></li>
							<li><a href="categories.html">Categories</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
					<div class="search">
						<form>
							<input type="text" class="textbox" value="Search:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
							<input type="submit" value=" " />
						</form>
					</div>
					<div class="clear"> </div>
				</div>
				<div class="clear"> </div>
				<!---End-top-menu-search---->
			</div>
			<!---End-header---->
		</div>
		<div class="clear"> </div>
		<!---start-content---->
		<div class="main-content">
			<div class="wrap">
			<div class="left-sidebar">
				<div class="sidebar-boxs">
					<div class="type-videos">
						<h3>Labels</h3>
						<ul>
							<li><a href="#">Lorem ipsum dolor</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="right-content">
				<div class="right-content-heading">
					<div class="right-content-heading-left">
						<h3>Latest Colletcions of videos</h3>
					</div>
					<div class="clear"> </div>
				</div>
				<div class="content-grids">
					<div class="content-grid">
						<a href="singlepage.html"><img src="<?php echo $this->assets('images/gridallbum1.png'); ?>" title="allbum-name" /></a>
						<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
					</div>
					<div class="clear"> </div>
					<!---start-pagenation----->
					<div class="pagenation">
						<ul>
							<li><a href="#">1</a></li>
							<li><a href="#">></a></li>
						</ul>
					</div>
					<div class="clear"> </div>
					<!---End-pagenation----->
				</div>
			</div>
			<div class="clear"> </div>
			</div>
		</div>
		<div class="clear"> </div>
		<!---End-content---->
		<!---start-copy-right---->
		<div class="copy-right">
			<p>Dev by <a href="https://roch-blondiaux.com/">Roch Blondiaux</a></p>
		</div>
		<!---End-copy-right---->
		<!---End-wrap---->
	</body>
</html>
