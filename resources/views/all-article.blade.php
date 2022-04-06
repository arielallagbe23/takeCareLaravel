<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>

    <section style="padding-top:50px;">
        <div class="container">
            <div class="row">
                <div class="col-md-18">
                    <div class="card">
                        <div class="card-header">
                        <a href="/add-article" class="btn btn-primary">Add Pharmaeutical</a>
                        </div>
                        <div class="card-body">

                            <div class="card-body">                
                            
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Descripion</th>
                                        <th>Article Image</th>
                                        <th>Actions</th>
                                        <th>nombre d'article</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($articles as $article)
                                        <tr>
                                            <td>{{$article->name}}</td>
                                            <td></td>
                                            <td>{{$article->description}}</td>
                                            <td><img src="{{asset('images')}}/{{$article->articleimage}}" style="max-width:60px;"/></td>

                                          
                                            <td>
                                                <input type="number" name="price" style="max-width:60px" ;  />
                                            </td>
                                            
                                            <td>
                                                <a href="/delete-article/{{$article->id}}" class="btn btn-danger">Delete</a>
                                                <a href="/edit-article/{{$article->id}}" class="btn btn-warning">Edit</a>
                                                <a href="/ajouter-au-panier/{{$article->name}}/{{$article->price * 2}}"class="btn btn-success">Ajouter au panier</a>
                                            </td>
                                        </tr>
                                    @endforeach
                               
                                </tbody>
                            </table>
                        </form>    
                            <a href="/welcome-view" class="btn btn-dark">Back</a>
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