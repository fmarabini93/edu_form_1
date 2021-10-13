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
            <title>Questions</title>
      </head>
      <body>
            <?php 
                  include "components/header.php";
                  include "components/jumbotron.php";
            ?>

            <!-- Questions form -->
            <div class="form1">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 fb col-md-10 col-sm-10 col-11">
                            <div class="form-back">
                                <div class="form-heading pt-4 pb-4">
                                    <h1>
                                        Rispondi alle ultime domande e<br> scopri se hai superato la selezione! 🎓
                                    </h1>
                                </div>
                                <form method="post" action="db/db_insert.php" class="form11 pt-0 needs-validation" novalidate>
                                    <div class="row">
                                        <div class="col-6 formInputs">
                                            <div class="form-group mb-0">
                                                <label for="">Qual è il tuo numero di telefono?</label>
                                                <input id="phone" name="phone" type="tel" class="form-control w-75" required>
                                                <span id="valid-msg" class="hide text-success">Valid</span>
                                                <span id="error-msg" class="hide text-danger">Invalid number</span>
                                                <!-- <input type="text" class="form-control w-75"> -->
                                            </div>
                                            <div class="form-group mb-0">
                                                <?php
                                                    // $regions = [];
                                                    // $sql = "SELECT * FROM regions";
                                                    // $result = mysqli_query($conn, $sql);
                                                    // while ($row = $result->fetch_assoc()) {
                                                    //     $regions[] = $row['name'];
                                                    // };
                                                ?>
                                                <label for="" class="mt-3">In quale regione si trova la tua scuola?</label>
                                                <select name="region" class="form-control w-75" required>
                                                    <?php
                                                        // foreach($regions as $region) {
                                                        //     echo "<option value='$region'>$region</option>";
                                                        // } 
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group mb-0">
                                                <label for="" class="mt-3">In quale provincia si trova la tua scuola?</label>
                                                <select name="province" class="form-control w-75">
                                                    <option value="Seleziona">Seleziona</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-0">
                                                <label for="" class="mt-3">In quale comune si trova la tua scuola?</label>
                                                <select name="municipality" class="form-control w-75">
                                                    <option value="Seleziona">Seleziona</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-0">
                                                <label for="" class="mt-3">Come si chiama la tua scuola?</label>
                                                <input type="text" name="school" class="form-control w-75" required>
                                            </div>
                                            <div class="radio1 mr-3">
                                                <label for="" class="mt-3 d-block">A quale anno scolastico sei?</label>
                                                <label class="customcheckboxContainer">
                                                    <span class="customCheckBox">
                                                        <input type="radio" id="schoolyear" name="Numberoptions" value="1" required>
                                                        <span class="checkmark rounded-circle borderGrn"></span>
                                                    </span>
                                                    <small class="mt-2 ml-4">1°</small>
                                                </label>
                                                <label class="customcheckboxContainer ml-2">
                                                    <span class="customCheckBox">
                                                        <input type="radio" id="schoolyear" name="Numberoptions" value="2">
                                                        <span class="checkmark rounded-circle borderGrn"></span>
                                                    </span>
                                                    <small class="mt-2 ml-4">2°</small>
                                                </label>
                                                <label class="customcheckboxContainer ml-2">
                                                    <span class="customCheckBox">
                                                        <input type="radio" id="schoolyear" name="Numberoptions" value="3">
                                                        <span class="checkmark rounded-circle borderGrn"></span>
                                                    </span>
                                                    <small class="mt-2 ml-4">3°</small>
                                                </label>
                                                <label class="customcheckboxContainer ml-2">
                                                    <span class="customCheckBox">
                                                        <input type="radio" id="schoolyear" name="Numberoptions" value="4">
                                                        <span class="checkmark rounded-circle borderGrn"></span>
                                                    </span>
                                                    <small class="mt-2 ml-4">4°</small>
                                                </label>
                                                <label class="customcheckboxContainer ml-2">
                                                    <span class="customCheckBox">
                                                        <input type="radio" id="schoolyear" name="Numberoptions" value="5">
                                                        <span class="checkmark rounded-circle borderGrn"></span>
                                                    </span>
                                                    <small class="mt-2 ml-4">5°</small>
                                                </label>
                                            </div>
                                            <div class="form-group-mb-0">
                                                <label for="" class="mt-3">Media voti della pagella precedente</label>
                                                <input type="text" name="avg_vote" class="form-control w-75" required />
                                            </div>
                                            <div class="form-group mb-0">
                                                <label for="" class="mt-3">Hai delle passioni/attività extracurricolari di cui ci vuoi parlare?</label> <br>
                                                <textarea name="passions" id="" cols="30" rows="6" class="form-control w-75" required></textarea>
                                            </div>
                                            <div class="form-group-mb-0">
                                                <label for="" class="mt-3">Scrivici un contatto mail di uno dei tuoi genitori</label>
                                                <input type="email" name="parent_mail" class="form-control w-75" required>
                                            </div>

                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-success mt-4 mb-5" value="INVIA">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Questions form -->

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      </body>
</html>