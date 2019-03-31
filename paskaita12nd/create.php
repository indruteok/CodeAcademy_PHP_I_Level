<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body class=" mt-5 text-center bg-light container">
        <h2 class="mb-5"> Automobilių CRUD papildymas</h2>
        <form action="store.php" method="POST">
            <div class="form-row">
                <div class="form-group col-lg-6">
                    <label for="exampleInputMarke"> Markė: </label>
                    <input type="text" class="form-control" name="marke" id="exampleInputMarke" aria-describedby="markeHelp" placeholder="Įveskite automobilio markę"></input>
                    <small id="markelHelp" class="form-text text-muted"> Galite rašyti mažsiomis raidėmis</small>
                </div>                     
                <div class="form-group col-lg-6">
                    <label for="exampleInputModelis">Modelis: </label>
                    <input type="text" class="form-control" id="exampleInputModelis" aria-describedby="modelisHelp" name="modelis"  placeholder="Įveskite automobilio modelį" value="">
                    <small id="modelislHelp" class="form-text text-muted"> Galite rašyti mažsiomis raidėmis</small>
                </div>
            </div>
            <div class="form-row">
                <div class="col-lg-2">
                </div>
                <div class="form-group col-lg-4">
                    <label for="exampleInputPagaminimoMetai">pagaminimoMetai: </label>
                    <input type="number" class="form-control" aria-describedby="pagaminimoMetaiHelp" name="pagaminimoMetai" value="">
                    <small id="pagaminimoMetaiHelp" class="form-text text-muted">pirmas automibilis pagamintas 1897m </small>
                </div>
                <div class="form-group col-lg-4">
                    <label for="exampleInputKaina">Kaina: </label>
                    <input type="number" class="form-control" name="kaina" value="">
                </div>
            </div>
            <input class="btn btn-primary mt-5" type="submit" value="Išsaugoti">
        </form>

    </body>
</html>




