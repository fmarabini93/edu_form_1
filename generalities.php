<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <link rel="stylesheet" href="css/style.css">
            <title>Generalities</title>
      </head>
      <body>
            <?php 
                  include "components/header.php";
                  include "components/jumbotron.php";
            ?>
            <!-- Generalities form -->
            <form action="db/db_insert.php" method="POST" name="generalities">
                  <div class="container">
                        <div class="row justify-content-center">
                              <div class="col-lg-12 fb col-md-10 col-sm-10 col-11">
                                    <div class="form-back">
                                          <div class="form-heading pt-4">
                                                <h1>
                                                      Inserisci i tuoi dati e invia la tua <br> candidatura! 🎓
                                                </h1>
                                          </div>
                                          <div class="form11 pt-0">
                                                <div class="row">
                                                      <div class="col-6 formInputs">
                                                            <div class="form-group mb-0">
                                                                  <label for="">Qual è il tuo nome?</label>
                                                                  <input type="text" class="form-control w-75" name="name" id="name">
                                                            </div>
                                                            <div class="form-group mb-0">
                                                                  <label for="" class="mt-3">Qual è il tuo cognome?</label>
                                                                  <input type="text" class="form-control w-75" name="surname" id="surname">
                                                            </div>
                                                            <div class="form-group mb-0">
                                                                  <label for="" class="mt-3">Qual è il tuo indirizzo email?</label>
                                                                  <input type="text" class="form-control w-75" name="email" id="email">
                                                            </div>
                                                      </div>
                                                      <div class="col-12">
                                                            <div class="checkb mt-3 mb-0">
                                                                  <label class="customcheckboxContainer mb-0">
                                                                        <span class="customCheckBox">
                                                                              <input type="checkbox" id="coursename" name="options">
                                                                              <span class="checkmark"></span>
                                                                        </span>
                                                                        <p class="mt-2 d-inline-block">Compilando il form accetto la <a href="https://docsend.com/view/rddr7drukin2z8ed" target="_blank" style="text-decoration: underline;">privacy policy </a></p>
                                                                  </label>
                                                            </div>
                                                      </div>
                                                </div>
                                                <input type="submit" name="Submit1" class="btn btn-success mt-3 mb-5" id="nextStep" value="CONTINUA">
                                          </div>
                                          <?php
                                                if (isset($_POST['Submit1'])) {
                                                $_SESSION['name'] = $_POST['name'];
                                                $_SESSION['surname'] = $_POST['surname'];
                                                $_SESSION['email'] = $_POST['email'];
                                                }
                                          ?>
                                    </div>
                              </div>
                        </div>
                  </div>
            </form>
            <!-- /Generalities form -->

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      </body>
</html>