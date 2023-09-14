<x-layout>
  <div class="row">
    <div class="col s12">
      <div class="card-panel">
        <table>
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Keterangan</th>
              <th>
                <a href="{{ route('example.create') }}" class="waves-effect waves-light btn">Add</a>
              </th>
            </tr>
          </thead>
          <tbody>
            @if (count($example))
              @foreach ($example as $row)
                <td>{{ $loop->iteration }}</td> {{-- $loop->iteration -> variable bawaan laravel --}}
                <td>{{ $row->name }}</td>
                <td>{{ $row->description }}</td>
                <td>
                  <a href="{{ route('example.edit', $row) }}" class="waves-effect waves-light btn yellow darken-3 white-text">Edit</a>
                  <a href="{{ route('example.destroy', $row) }}" class="waves-effect waves-light btn pink white-text">Delete</a>
                </td>
              @endforeach
            @else
                <tr>
                  <td class="center-align" colspan="4">DATA EMPTY</td>
                </tr>
            @endif
          </tbody>
        </table>
      </div> 
    </div> 
  </div>  
</x-layout>