@extends('layouts.app')

@section('content')

<div class="container">

    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
    @endif

<br/>
    <table class="table table-striped responsive">


        @foreach($friendships as $friendshipKey => $friendshipValue)
            <tr>
                <td>
                    <a href="{{action('UserProfileController@show', $friendshipValue->id_friend)}}">
                        {{$friendshipValue->name}}
                        {{$friendshipValue->surname}}
                    </a>
                </td>
                <td>
                    {{date('d/m/Y', strtotime($friendshipValue->date_from)) }}
                </td>
            </tr>
        @endforeach

    </table>
</div>


<section class="our-webcoderskull padding-lg">
  <div class="container">
    <ul class="row">
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="http://www.webcoderskull.com/img/team4.png" class="img-responsive" alt=""></figure>
            <h3><a href="http://www.webcoderskull.com/">Guptam Holla</a></h3>
            <p>Hofstra University School of Law Hempstead, New York</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
      </li>
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="http://www.webcoderskull.com/img/team1.png" class="img-responsive" alt=""></figure>
            <h3><a href="#">Kappua Billa</a></h3>
            <p>Hofstra University School of Law Hempstead, New York</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
      </li>
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="http://www.webcoderskull.com/img/team4.png" class="img-responsive" alt=""></figure>
            <h3><a href="http://www.webcoderskull.com/">Omin Goshu</a></h3>
            <p>Hofstra University School of Law Hempstead, New York</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
       </li>
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="http://www.webcoderskull.com/img/team2.png" class="img-responsive" alt=""></figure>
            <h3><a href="http://www.webcoderskull.com/">NArman Bandhu</a></h3>
            <p>Hofstra University School of Law Hempstead, New York</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
      </li>
    </ul>
  </div>
</section>
@endsection