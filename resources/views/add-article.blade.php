<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Pharmaceuticals</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>
<body>

    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h1>Add New Pharmaceutical</h1>
                        </div>
                        <div class="card-body">
                              
                            <form method="POST" action="" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control"/>
                                </div><br/>

                                <div class="form-group">
                                    <label for="type">Price</label>
                                    <input type="number" name="price" class="form-control"/>
                                </div><br/>

                                <div class="form-group">
                                    <label for="description-select">description:</label><br/>
                                    <select name="description" id="pet-select">
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
                                    <img id="previewImg" alt="article image" style="max-width:130px;margin-top:20px;" />
                                </div> <br/>
                                
                                <button type="submit" class="btn btn-danger">Add Pharmaceutical</button><br/><br/>

                                <a href="/welcome-view" class="btn btn-dark">back</a>
                                <a href="/all-article/" class="btn btn-primary">Aller aux médicaments !</a>


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
        function previewFile(input)
        {
            var file=$("input[type=file]").get(0).files[0];
            if(file)
            {
                var reader = new FileReader();
                reader.onload = function() 
                {
                    $('previewImg').attr("src",reader.result);
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
</body>
</html>