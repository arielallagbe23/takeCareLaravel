<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <style>
        th 
        {
            text-align : center; 
        }

        td
        {
            text-align : center;
        }
    </style>
</head>
    <body>

    <section style="padding-top:100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-18">
                    <div class="card">
                        <div class="card-header">
                            <h1>All Ordonances</h1>
                            <h5>Ci dessous vous avez toutes les ordonances que vous devez traiter<h5>
                                <br/><a href="/welcome-view" class="btn btn-dark">Back</a><br/>
                            </div>
                        <div class="card-body">

                            @if(Session::has('ordonance_deleted'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('ordonance_deleted')}}
                                </div>
                            @endif

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Surname</th>
                                        <th>Adresse mail</th>
                                        <th>Telephone</th>
                                        <th>Contenu de l'odonance</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($ordonances))
                                      
                                    @foreach ($ordonances as $ordonance)
                                        <tr>
                                            <td>{{$ordonance->name}}</td>
                                            <td>{{$ordonance->surname}}</td>
                                            <td>{{$ordonance->adressemail}}</td>
                                            <td>{{$ordonance->telephone}}</td>
                                            <td style="max-width:130px;margin-top:20px;">{{$ordonance->contenu}}</td>
                                            <td> 
                                                <a href="/api/delete-ordonance2/{{$ordonance->id}}" class="btn btn-warning">traiter l'ordonance</a>
                                            </td>
                                           
                                        </tr>
                                    @endforeach

                                    @endif
                                </tbody>
                            </table>
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