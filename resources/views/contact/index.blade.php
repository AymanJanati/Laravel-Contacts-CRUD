@extends('base')

@section('main')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="uper">
    @if (session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success')}}
        </div>
    @endif
  <table class="table table-striped">

    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Email</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>

    <tbody>
        @foreach($contacts as $contact)
        <tr>
            <td>{{$contact->id}}</td>
            <td>{{$contact->name}}</td>
            <td>{{$contact->email}}</td>
            <td><a href="{{ route('contacts.edit', $contact->id)}}" class="btn btn-primary">Modifier</a></td>
            <td>
                <form action="{{ route('contacts.destroy', $contact->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection