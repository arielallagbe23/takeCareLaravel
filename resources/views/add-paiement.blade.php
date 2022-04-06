<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<style>
    h3
    {
        text-align:center;
    }
</style>    
<body>
<br/>    
<h3> 
    Rajoutez s'il vous plait de facon precise les<br/>informations contenues dans le 
    message Orange money <br/> et qui sont en relation avec ce formulaire.
</h3>


<section style="padding-top:60px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h1>Add New Paiement</h1>
                    </div>
                    <div class="card-body">
                          

                        <form method="POST" action="" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Reference du paiement</label>
                                <input type="text" name="name" class="form-control"/>
                            </div><br/>

                            <div class="form-group">
                                <label for="type">Nom et Prenom du client</label>
                                <input type="number" name="price" class="form-control"/>
                            </div><br/>

                            <div class="form-group">
                                <label for="type">Nom et Prenom de celui qui fait l'ajout</label>
                                <input type="number" name="price" class="form-control"/>
                            </div><br/>
                            <button type="submit" class="btn btn-danger">Ajouter le paiment</button><br/><br/>

                            <a href="/paiementone"class="btn btn-dark">Back</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>  

</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>



</body>
</html>