@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">

        {{-- @include('management.inc.sidebar') --}}

      <div class="col-md-4">
        <div class="list-group">
            <a href="/management/category" class="list-group-item list-group-item-action">
                <i class="fa-solid fa-list"></i> Category</a>
            <a href="/management/menu" class="list-group-item list-group-item-action">
                <i class="fa-solid fa-caret-down"></i> Menu</a>
            <a href="/management/table" class="list-group-item list-group-item-action">
                <i class="fa-solid fa-table"></i> Table</a>
            <a href="/management/user" class="list-group-item list-group-item-action">
                <i class="fa-solid fa-user"></i> User</a>
        </div>
      </div>
      <div class="col-md-8">
        <i class="fa-solid fa-list"></i>
        Category
        <a href="/management/category/create" class="btn btn-success btn-sm float-right"><i class="fa-solid fa-plus"></i>Create Category</a>
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
                <th scope="col">Category</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach($categories as $category)
                <tr>
                  <th scope="row">{{$category->id}}</th>
                  <td>{{$category->name}}</td>
                  <td>
                    <a href="/management/category/{{$category->id}}/edit" class="btn btn-warning">Edit</a>
                  </td>
                  <td>


                  <form action="/management/category/{{$category->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-danger">
                  </form>

                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
            {{ $categories->links() }}
        </div>


    </div>
    </div>
  </div>
@endsection
