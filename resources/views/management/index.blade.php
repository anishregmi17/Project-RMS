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
        Content
    </div>
    </div>
  </div>
@endsection
