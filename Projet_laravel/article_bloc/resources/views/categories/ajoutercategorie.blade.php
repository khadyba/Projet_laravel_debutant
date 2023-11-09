@extends("layout.nav")
@section('contenue')
@if(count($errors)>0)
<div class="alert alert-dismissible alert-warning">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    @foreach($errors->all() as $error)
    <h4 class="alert-heading">{{$error}}</h4>
    @endforeach
</div>
@endif
<div class="container my-4">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-4">
            <form action="/categories/ajouter"  method="POST">
                @csrf
                <div class="form-group">
                    <label for="Nomcatego" class="form-label mt-4" style="color: black"  >Nom de la  Categorie</label>
                    <input type="text" class="form-control"  name="nomCategorie" id="nomCategorie" aria-describedby="emailHelp" placeholder="Nom Categorie">
                    <small id="emailHelp" class="form-text text-primary-emphasis">Ajouter ici une Nouvelle Categorie</small>
                  </div><br>
                  <button type="submit" class="btn btn-secondary"   style="background-color: blue">Submit</button>
               </form>
       </div>
    </div>
</div>
@endsection()