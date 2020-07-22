@extends('layouts/backend/app')


@section('content')


  <!-- Error message -->
  @if ($errors->any())
  <div class="alert alert-danger">
  <ul>
  @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
  @endforeach
  </ul>
  </div>
  @endif

  <!--  message -->
       @if(session()->has('message'))
           <div class="alert alert-{{ session('type') }}">
               {{ session('message') }}
           </div>
       @endif

<a href="{{ route('brands.show') }}" style="text-decoration:none;" class="btn btn-info">Go To Brand Section</a>
<a href="{{ route('logout') }}" style="text-decoration:none;" class="btn btn-danger">LogOut</a>




@endsection
