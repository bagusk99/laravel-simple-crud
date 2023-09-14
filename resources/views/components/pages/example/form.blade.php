<x-layout>
  <div class="row">
    <div class="col s12">
      <div class="card-panel">
        <form action="{{ $url }}" method="post">
          @csrf {{-- wajib ada setiap form --}}
          @if ($example ?? null) {{-- jika ini sedang edit --}}
            @method('put')
          @endif

          <div class="input-field">
            <input id="name" name="name" type="text" class="validate" value="{{ old('name') ?? $example->name ?? null }}">
            <label for="name">Name</label>
            @error('name')
              <small class="pink-text"><i>*{{ $message }}</i></small>
            @enderror
          </div>

          <div class="input-field">
            <input id="description" name="description" type="text" class="validate" value="{{ old('description') ?? $example->description ?? null }}">
            <label for="description">Description</label>
            @error('description')
              <small class="pink-text"><i>*{{ $message }}</i></small>
            @enderror
          </div>

          <a href="{{ route('example.index') }}" class="waves-effect waves-light btn pink white-text">Back</a>
          <button class="waves-effect waves-light btn">Save</button>
        </form> 
      </div> 
    </div> 
  </div>  
</x-layout>