@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                  <h1>Themes</h1>
                  <table class='table'>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Info</th>
                    </tr>
                    @foreach ($themes as $theme)
                      <tr><td>{{ $theme->id }}</td><td>{{ $theme->name }}</td><td>{{ $theme->info }}</td></tr>
                    @endforeach
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
