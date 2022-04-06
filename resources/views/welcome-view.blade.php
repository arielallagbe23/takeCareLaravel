<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<style>




</style>
<body>

    <section style="padding-top:100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-18">
                    <div class="card">
                        <div class="card-header">
                            <h1>TakeCare</h1>
                            <h5>Nous avons essayé de réaliser cet application assez simplement 
                                pourque sa prise en main soit facile à toutes et à tous<h5>
                        </div>
                        <div class="card-body">
                            <div class="card">
                                <img [src]="myimage" class="card-img-top">
                                    <div class="card-body">
                                        <h3 class="card-title">Accès médicaments </h3>
                                            <p class="card-text">Vous aurez accès à la liste des medicaments qui sont en reserve.
                                                Vous devriez vous ateler chaque jour à faire des mises à jour en fonction du stock, concernant 
                                                les aspects disponibilité du produit et date de perantion.
                                            </p>
                                            <a href="/all-article/" class="btn btn-primary">Aller aux médicaments !</a>
                                            <a href="/add-article/" class="btn btn-danger">Ajouter un nouveau medicament !</a>
                                    </div>
                                </div><br/>

                            <div class="card">
                                <img [src]="myimage" class="card-img-top">
                                    <div class="card-body">
                                        <h3 class="card-title">Accès aux Ordonnaces </h3>
                                            <p class="card-text">Vous aurez accès aux derniers ajouts d'ordonance qui sont en reserve.
                                                Vous devriez vous ateler chaque jour à faire des mises à jou et a reponde au plus vite
                                                afin de ne pas faire attendre les clients.
                                            </p>
                                            <a href="/all-ordonances" class="btn btn-primary">Accédez aux ordonances !</a>
                                    </div>
                            </div><br/>
                       
                        <div class="card" style="padding-bottom: 0px">
                            <img [src]="myimage" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title"> Accès aux Rendez-Vous </h3>
                                        <p class="card-text">Vous aurez accès aux rendez-vous que les clients prennent sur le site.
                                            Les clients mettrons eux memes les motifs de leurs rendez-vous. A vous de les lire et de vous 
                                            appreter en conseqences.
                                        </p>
                                       <br/> <a href="/all-rdv" class="btn btn-primary">Accédez aux rdvs !</a>
                                </div>
                        </div><br/>
                        
                        <div class="card">
                            <img [src]="myimage" class="card-img-top">
                                <div class="card-body">
                                    <h3 class="card-title"> Réferencement des paiements</h3>
                                        <p class="card-text">Vous aurez accès aux paiement effecués par les clients via Orange Money.
                                            Les clients mettrons eux memes les preuves de leur paiement. Dès que vous recevez un paiement,
                                            ajooutez-le afin de vous facilité la tache quand les clients viendront à la pharmacie.
                                        </p>
                                        <a href="/paiementone" class="btn btn-primary">Accédez aux paiements!</a>
                                </div>
                        </div><br/>
                        <a href="/add-article" class="btn btn-dark">Back</a>
                    
                    </div>
                </div>
            </div>
            </div>  
        </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script>
      
    </script>
</body>
</html>