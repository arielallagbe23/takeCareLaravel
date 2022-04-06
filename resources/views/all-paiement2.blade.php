<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Paiement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>

    <section style="padding-top:50px;">
        <div class="container">
            <div class="row">
                <div class="col-md-18">
                    <div class="card">
                        
                        <div class="card-body">
                     
                                
                                            <table class="table table-striped">
                                    
                                                <h1>Paiement Effectués</h1> 
                                                <br/><a href="/paiementone" class="btn btn-dark">Back</a>                               
                                                    <thead>
                                                        <tr>
                                                            <th>Numeros de commande</th>
                                                            <th>Référence de paiement</th>
                                                            <th>Nom client</th>
                                                            <th>Numeros de telephone </th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                    
                                                   
                                                        
                                                    @foreach ($paiementeffectue as $paiementeffectue)
                                                        <tr>
                                                            <td>{{$paiementeffectue->numcmd}}</td>
                                                            <td>{{$paiementeffectue->idpaiement}}</td>
                                                            <td>{{$paiementeffectue->pseudoorangemoney}}</td>
                                                            <td>{{$paiementeffectue->numorangemoney}}</td>    
                                                            <td>
                                                                <a href="/delete-paiementeffectue/{{$paiementeffectue->id}}" class="btn btn-warning">Valider le paiement</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    
                                                    
                                                    </tbody>
                                           
                                    
                
                                
                                </table>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script>
        function previewFile(input=)
        {
            var file=$("input[type=file]").get(0).files[0];
            if(file)
            {
                var reader = new FileReader();
                reader.onload = function(){
                    $('#previewImg').attr("src",reader.result);
                }
                reader.readAsDataURL(file); 
            }
        }
    </script>
</body>
</html>