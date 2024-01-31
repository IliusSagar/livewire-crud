<div>
<div class="container mt-4">

<a href="{{ URL('/')}}" class="btn btn-danger mb-3">Add Item</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>
           
        </tr>
    </thead>
    <tbody>
        @foreach($items as $row)
            <tr>
                <td>{{ $row->name }}</td>
                <td>{{ $row->description }}</td>
                <td>
                <a class="btn btn-sm btn-info" href="{{ route('item.edit', ['id' => $row->id]) }}">Edit</a>
                    <a class="btn btn-sm btn-danger" wire:click="deleteitem({{ $row->id }})">Delete</a>
                </td>
                
            </tr>

            
        @endforeach
    </tbody>
</table>
</div>

<div>
</div>
</div>
