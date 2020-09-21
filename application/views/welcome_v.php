<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>IFramework - Welcome</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?= BASE_PATH ?>/bootstrap/css/bootstrap.min.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
     /*
	 * Globals
	 */

	/* Links */
	a,
	a:focus,
	a:hover {
	  color: #fff;
	}

	/* Custom default button */
	.btn-secondary,
	.btn-secondary:hover,
	.btn-secondary:focus {
	  color: #333;
	  text-shadow: none; /* Prevent inheritance from `body` */
	  background-color: #fff;
	  border: .05rem solid #fff;
	}


	/*
	 * Base structure
	 */

	html,
	body {
	  height: 100%;
	  background-color: #333;
	}

	body {
	  display: -ms-flexbox;
	  display: flex;
	  color: #fff;
	  text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
	  box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
	}

	.cover-container {
	  max-width: 42em;
	}


	/*
	 * Header
	 */
	.masthead {
	  margin-bottom: 2rem;
	}

	.masthead-brand {
	  margin-bottom: 0;
	}

	.nav-masthead .nav-link {
	  padding: .25rem 0;
	  font-weight: 700;
	  color: rgba(255, 255, 255, .5);
	  background-color: transparent;
	  border-bottom: .25rem solid transparent;
	}

	.nav-masthead .nav-link:hover,
	.nav-masthead .nav-link:focus {
	  border-bottom-color: rgba(255, 255, 255, .25);
	}

	.nav-masthead .nav-link + .nav-link {
	  margin-left: 1rem;
	}

	.nav-masthead .active {
	  color: #fff;
	  border-bottom-color: #fff;
	}

	@media (min-width: 48em) {
	  .masthead-brand {
	    float: left;
	  }
	  .nav-masthead {
	    float: right;
	  }
	}


	/*
	 * Cover
	 */
	.cover {
	  padding: 0 1.5rem;
	}
	.cover .btn-lg {
	  padding: .75rem 1.25rem;
	  font-weight: 700;
	}


	/*
	 * Footer
	 */
	.mastfoot {
	  color: rgba(255, 255, 255, .5);
	}
    </style>

  </head>
  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
	  <header class="masthead mb-auto">
	    <div class="inner">
	      <h3 class="masthead-brand">IFramework</h3>
	    </div>
	  </header>

	  <main role="main" class="inner cover">
	    <h1 class="cover-heading">Welcome to IFramework</h1>
	    <p class="lead">This view is located application/views/welcome_v.php</p>
	    <p class="lead">This controller is located application/controllers/WelcomeController.php</p>
	    <p class="lead">
	      <a href="<?= BASE_PATH; ?>/crud" class="btn btn-lg btn-secondary">Learn more</a>
	    </p>
	  </main>

	  <footer class="mastfoot mt-auto">
	    <div class="inner">
		    <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
		    <p>Iframework <a href="https://www.facebook.com/ikhsan.heriyawan" target="_blank">IkhsanH</a>, by <a href="https://instagram.com/rohi_abdulloh?igshid=ncjmbk513u1m" target="_blank">Rohi Abdullah</a>.</p>
	    </div>
	  </footer>
	</div>

	<script src="<?= BASE_PATH ?>/jquery/jquery.js"></script>
	<script src="<?= BASE_PATH ?>/bootstrap/js/bootstrap.js"></script>
</body>
</html>
