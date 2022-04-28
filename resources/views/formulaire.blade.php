<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Annoce
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container"> 
                    <form action="" method="post">
                        @csrf
                        <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="type" id="appartement" value="0" required>
  <label class="form-check-label" for="appartement">Appartement</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="type" id="maison" value="1" required>
  <label class="form-check-label" for="maison">Maison</label>
</div>
<br><br>
<label for="titre">Titre de votre annonce</label>
<input class="form-control" type="text" placeholder="Titre" aria-label="default input example" id="titre">

<br>
<div class="form-floating">
  <textarea class="form-control" placeholder="Ecrirer votre maison" id="description" style="height: 100px" required></textarea>
  <label for="description">Description</label>
</div>
<br><br>

<div class="row">
    <div class="col-6">
<input type="number" name="surface" id="surface" required>
<label for="surface">Surface</label>
    </div>
    <div class="col-6">
<input type="number" name="price" id="price" required>
<label for="price">Prix</label>
</div>
<br><br><br>
<div class="col-6">
<input type="number" name="nbr_piece" id="nbr_piece" required>
<label for="nbr_piece">Nombre de pièces</label>
</div>
<div class="col-6">
<input type="number" name="nbr_chambre" id="nbr_chambre" required>
<label for="nbr_chambre">Nombre de chambres</label>
</div>
</div>

<br><br>
<div class="mb-3">
  <label for="formFileMultiple" class="form-label">Choisir les images de votre maison...</label>
  <input class="form-control" type="file" id="formFileMultiple" accept="image/png, image/jpeg" multiple required>
</div>

<button type="submit" class="btn btn-primary">Envoyer</button>



                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>