<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="/restaurant/<?=$id?>/edit" method="POST">
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
</body>
</html>