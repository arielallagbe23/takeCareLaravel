<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>

    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Edit Article
                        </div>
                        <div class="card-body">
                            @if(Session::has('article_updated'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('article_updated')}}
                                </div>
                            @endif    

                            <form method="POST" action="{{route('article.update')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$article->id}}"/>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" value="{{$article->name}}" class="form-control"/>
                                </div><br/>

                                <div class="form-group">
                                    <label for="pet-select">Description</label><br/>
                                    <select name="description" id="pet-select" value="{{$article->description}}">
                                        <option value="">--Please choose an description--</option>
                                        <option value="anti_biotique">Anti-biotique</option>
                                        <option value="anti_inflamatoire">Anti-inflamatoire</option>
                                        <option value="anti_allergique">Anti-allergique</option>
                                        <option value="remede_principal">Remede-principal</option>
                                    </select>                                
                                </div><br/>

                                <div class="form-group">
                                    <label for="type">Inserez une photo</label>
                                    <input type="file" name="file" class="form-control" onchange="previewFile(this)"/>
                                    <img id="previewImg" alt="profile image" src="{{asset('images')}}/{{$article->articleimage}}"style="max-width:130px;margin-top:20px;" />
                                </div><br/>

                                <div class="form-group">
                                    <label for="type">Price</label>
                                    <input type="text" name="price" value="{{$article->price}}" class="form-control"/>
                                </div><br/>

                                <button type="submit" class="btn btn-primary">Submit</button><br/><br/>

                                <a href="/all-article" class="btn btn-dark">back</a>
                                


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