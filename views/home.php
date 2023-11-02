<?php








?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="container">
            <div class="jumbotron">
                <form action="index.php" method="POST">
                    <input type="hidden" name="action" value="init">
                    <button type="submit" class="btn mt-3 btn-primary">init</button>
                </form>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <form action="index.php" method="POST">
                <select name="data_type" class="form-select" id="data_type" aria-label="Default select example">
                    <option selected>Cosa vuoi salvare</option>
                    <option value="all">Tutto</option>
                    <option value="reviews">Recensioni</option>
                    <option value="order">Ordini</option>
                    
                </select>
                <input type="hidden" name="action"  value="export">
            <button type="submit" class="btn mt-3 btn-primary">CREA CSV</button>
            </form>
            <form action="/restaurant" method="POST">
                <h1>CREA RISTORANTE </h1>
                <input type="hidden" name="action" value="restaurant">
                <div class="mb-3 mt-5">
                    <label for="name" class="form-label">Nome Ristorante</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" required>
                    <div id="client_name" class="form-text">Grazie per questa informazione</div>
                </div>
                <div class="mb-5">
                    <label for="address" class="form-label">Indirizzo</label>
                    <input type="text" class="form-control" name="address" id="address" required>
                </div>
                <div class="mb-5">
                    <label for="phone" class="form-label">telefono</label>
                    <input type="string" name="phone" class="form-control" id="phone" required>
                </div>
                <div class="mb-5">
                    <label for="opening_time" class="form-label">orario di apertura</label>
                    <input type="string" name="opening_time" class="form-control" id="openint_time" required>
                </div>
                <button type="submit" class="btn mt-3 btn-primary">Submit</button>
            </form>
        
            <form action="index.php" method="POST">
                <input type="hidden" name="action" value="vote">
                <div class="mb-3 mt-5">
                    <label for="recens_name" class="form-label">Nome Cliente</label>
                    <input type="text" class="form-control" id="recens_name" name="recens_name" aria-describedby="emailHelp" required>
                    <div id="recens_name" class="form-text">Grazie per questa informazione</div>
                </div>
                <div class="mb-5">
                    <label for="vote" class="form-label">Voto</label>
                    <input type="number" name="vote" class="form-control" id="vote" required>
                </div>
                <div class=" form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="vote" name="comment" style="height: 100px"></textarea>
                    <label for="vote">Lascia un commento</label>
                </div>
                <button type="submit" class="btn mt-3 btn-primary">Submit</button>
            </form>
            
        </div>
    </main>
</body>

</html> 