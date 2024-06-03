@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
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
    </div>
    </div>
  </div>
@endsection
