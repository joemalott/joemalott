<!DOCTYPE html>
<html>
<head>
	<title>Background Resize</title>
	<style type="text/css">

		body {
			margin: 0;
		}

		#parent {
		  position: relative;
		  text-align: center;
			font-size: 18px;
			font-family: sans-serif;

			background: url("<?php echo get_stylesheet_directory_uri(); ?>/images/scrolling_background.png");
			
      width: 100vw;
			height: 100vh;
		}

		.child {
		  width: 300px;
		  height: 1600px;
		  padding: 20px;

		  background-color: lightgrey;

		  position: absolute;
		  top: 50%;
		  left: 50%;

		  margin: -70px 0 0 -170px;

		  back
		}

		.child p {
			text-align: center;
			font-size: 18px;
			font-family: sans-serif;
		}

		img {
			width: 100%;
			height: auto;
		}
	</style>
</head>
<body>

		<div id="parent" style="background-size: auto;">
			<div class="child">
				<p>Resize me</p>
        
        <button id="demo" onclick="myFunction">Switch background behavior</button>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			
				<img src="http://source.unsplash.com/random/800x450">

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut lamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat botega de agua nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum proident, sunt in culpa qui offic.</p>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			
			
				</div>
		</div>

 <script>
  document.getElementById("demo").addEventListener("click", myFunction);

function myFunction() {
  document.getElementById("parent").style.backgroundSize = document.getElementById("parent").style.backgroundSize === 'auto' ? 'cover' : 'auto';
}
  </script>
</body>
</html>