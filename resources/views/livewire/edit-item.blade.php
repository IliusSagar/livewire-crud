<div>
<!-- <div>
    <form wire:submit.prevent="update">
        <input type="text" wire:model="name" placeholder="Post Title">
        <textarea wire:model="description" placeholder="Post Content"></textarea>
        <button type="submit">Update</button>
    </form>
</div> -->


@if (session()->has('message'))
        <div class="btn btn-primary">{{ session('message') }}</div>
    @endif

    <div class="container mt-3">

    <a href="{{ URL('/list')}}" class="btn btn-danger mb-3">List Item</a>

        <div class="row">
        <form wire:submit.prevent="update">
        <div class="form-group">
        <label for="name">Name:</label>
        <input wire:model="name" type="text" id="name" name="name" class="form-control"/>
        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

       <div class="form-group">
       <label for="description">Description:</label>
        <textarea wire:model="description" id="description" name="description" class="form-control"></textarea>
        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
       </div>

        <button type="submit" class="btn btn-success mt-3">Update</button>
    </form>
        </div>
    </div>

 

  
</div>
</div>
