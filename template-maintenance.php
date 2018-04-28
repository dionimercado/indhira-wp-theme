<?php /* Template Name: Maintenance */ ?>
<!doctype html>
<html <?php language_attributes() ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'name' ) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <?php wp_head() ?>
    <style media="screen">
      :root {
        font-size: 62.5%;
      }
      html,
      body {
        width: 100%;
        height: 100vh;
        background: linear-gradient(to right,#fff,#fff);
      }
      div {
        height: 100%;
      }
      p {
        font-size: calc(2em + 1vw);
        color: #000;
        padding: 1rem 3rem;
        text-transform: uppercase;
        border: 2px solid #000;
      }
      @media screen and (max-width: 768px) {
        .w-50 {
          width: 100% !important;
        }
        img {
          width: 80% !important;
        }
      }

      </style>
  </head>
  <body>

    <div class="text-center justify-content-center d-flex flex-column align-items-center w-50 m-auto">
      <img class="img-fluid mb-5" src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt="Indhira Ortega">
      <p class="mt-5"><?php _e( 'Under Construction' ) ?></p>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <?php wp_head() ?>
  </body>
</html>