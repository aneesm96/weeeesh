@extends('layouts.app')

@section('content')

<div class="container">

    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
    @endif

 



<section class="our-webcoderskull padding-lg">
  <div class="container">
    <ul class="row">
      @foreach($friendships as $friendshipKey => $friendshipValue)
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="{{ asset($user->profile->avatar) }}" class="img-responsive" alt=""></figure>
            <h3><a href="{{action('UserProfileController@show', $friendshipValue->id_friend)}}">
                        {{$friendshipValue->name}}
                        {{$friendshipValue->surname}}
                    </a></h3>
            <p>{{date('d/m/Y', strtotime($friendshipValue->date_from)) }}</p>
          </div>
      </li>
       @endforeach
      
    </ul>
  </div>
</section>
</div>
@endsection