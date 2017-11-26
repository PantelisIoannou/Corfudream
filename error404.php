<!DOCTYPE html>
<html>
<head>
<title> 404 - Page not found </title>
</head>
<style>
.container {
  width: 100%;
  height: 100%;
  height: 100vh;
  overflow: hidden !important;
}

h1 {
  font-family: "Source Sans Pro", sans-serif;
  font-weight: bold;
  font-size: 90px;
  letter-spacing: 20px;
  text-transform: uppercase;
  text-align: center;
  color: #B5B5B5;
  margin: 0px;
  padding: 0px;
}

h2 {
  font-family: "Source Sans Pro", sans-serif;
  font-size: 30px;
  font-weight: 600;
  letter-spacing: 20px;
  text-transform: uppercase;
  text-align: center;
  color: #B5B5B5;
  line-height: 50px;
  padding: 0px;
  margin: 0px;
}
h2 a {
  color: #B5B5B5;
  text-decoration: none;
  border-bottom: 5px solid #B5B5B5;
  margin: 0;
  padding: 0;
}
h2 a span {
  letter-spacing: 0px !important;
  padding-right: 3px;
}
h2 a:hover {
  color: #808080;
  border-bottom: 5px solid #808080;
}

#scene ul {
  width: 100% !important;
  height: 100% !important;
  height: 100vh !important;
  overflow: hidden;
  position: relative;
}

.text {
  position: relative;
  top: 50%;
  -webkit-transform: translateY(-50%) !important;
  -ms-transform: translateY(-50%) !important;
  transform: translateY(-50%) !important;
  z-index: 3;
  display: block;
}

.toppattern {
  margin-top: -700px;
  left: -100px !important;
  position: absolute;
  z-index: 2;
}
@media screen and (max-height: 600px) {
  .toppattern {
    margin-top: -900px;
  }
}
@media screen and (max-height: 900px) {
  .toppattern {
    margin-top: -850px;
  }
}

.bottompattern {
  margin-top: 350px;
  left: 900px !important;
  position: absolute;
  z-index: 1;
}
@media screen and (max-height: 600px) {
  .bottompattern {
    margin-top: -100px;
  }
}
@media screen and (max-height: 900px) {
  .bottompattern {
    margin-top: 30px;
  }
}

.sidepattern {
  top: 350px !important;
  left: -250px !important;
  position: absolute;
  z-index: 1;
}

</style>
<body>
<div class="container">
	<div class="text">
	<h1> ERROR 404 </h1>
	<h2>Go <a href="index.php" >hom<span>e</span></a>&nbsp; You're Drunk </h2>
	</div>
	<ul id="scene" >
		<li class="layer sidepattern" data-depth="0.40"><img src="http://arielbeninca.com/404assets/img/sidepattern.jpg"></li>
		<li class="layer toppattern" data-depth="0.20"><img src="http://arielbeninca.com/404assets/img/toppattern.jpg"></li>
		<li class="layer bottompattern" data-depth="0.70"><img src="http://arielbeninca.com/404assets/img/bottompattern.jpg"></li>
	</ul>
	</section>
</div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://rawgithub.com/wagerfield/parallax/master/deploy/jquery.parallax.js"></script>

<script>
$('#scene').parallax();
/*
Designed and Developed by Ariel Beninca
arielbeninca.com
*/
</script>
</html>