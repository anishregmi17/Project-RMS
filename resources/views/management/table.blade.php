@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">

        @include('management.inc.sidebar')

      <div class="col-md-8">
        <i class="fa-solid fa-list"></i>
        Table
        <a href="/management/table/create" class="btn btn-success btn-sm float-right"><i class="fa-solid fa-plus"></i>Create Table</a>
        <hr>

        @if(Session()->has('status'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">X</button>
            {{Session()->get('status')}}
          </div>
        @endif

        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Table</th>
                <th scope="col">Status</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
        </div>
    </table>

    </div>
    </div>
  </div>
@endsection
