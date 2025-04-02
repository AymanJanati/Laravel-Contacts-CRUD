@extends('base')

@section('main')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Modifier le contact
  </div>

  <div class="card-body">

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <form method="post" action="{{ route('contacts.update', $contact->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Name :</label>
              <input type="text" class="form-control" name="name" value="{{ $contact->name }}"/>
          </div>

          <div class="form-group">
              <label for="email">Email :</label>
              <input type="text" class="form-control" name="email" value="{{ $contact->email }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
  </div>
</div>
@endsection