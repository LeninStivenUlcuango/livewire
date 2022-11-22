    <div class="row justify-content-center" >
        <div class="col-sm-6">
            <form wire:submit.prevent="save">
                <label for="">Nombre producto</label>
                <input wire:model="name" type="text" class="form-control mb-2">
                @error('name')
                    <p class="error mb-2">{{$message}}</p>
                @enderror

                <label for="">Descripcion</label>
                <textarea type="text" wire:model="description" class="form-control mb-2"></textarea>
                @error('description')
                    <p class="error mb-2">{{$message}}</p>
                @enderror

                <label for="">Price</label>
                <input type="text" wire:model="price" class="form-control mb-2">
                @error('price')
                    <p class="error mb-2">{{$message}}</p>
                @enderror

                <label for="">Thumbnail</label>
                <input type="file" wire:model="thumbnail" class="form-control mb-2">
                @if ($thumbnail)
                    <img src="{{$thumbnail->temporaryUrl()}}" class="img-fluid mb-2" alt="">
                @endif
                @error('thumbnail')
                    <p class="error mb-2">{{$message}}</p>
                @enderror

                <button type="submit" class="btn btn-outline-primary btn-block">Save photo</button>
            </form>
        </div>
    </div>