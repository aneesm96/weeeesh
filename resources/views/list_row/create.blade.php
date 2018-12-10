@extends('layouts.default')

@section('content')

<!-- create.blade.php -->
<!-- https://appdividend.com/2017/08/20/laravel-5-5-tutorial-example/#Step_3_Create_a_model_as_well_as_migration_file_for_our_Products_table -->
    <div class="container">

        <a href="{{action('WListController@show', $wlist->id_list)}}"><b>{{ $wlist->name }}</b></a>
        <br>@lang("Insert new Object in list:")

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div><br />
        @endif

        {{ Form::open(array('route' => array('wlists.list_rows.store', $wlist->id_list), 'class' => 'form')) }}

          {{csrf_field()}}
        <div class="row">
              <div class="col-md-4"></div>
              <div class="form-group col-md-4">
                  <label for="name">@lang("Name"):</label>
                  <input type="text" class="form-input" name="object">
              </div>
          </div>

          <div class="row">
              <div class="col-md-4"></div>
              <div class="form-group col-md-4">
                  <label for="link_web">@lang("Link"):</label>
                  <input type="text" class="form-input" name="link_web">
              </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="image">@lang("Image"):</label>
            <input type="file" class="form-input" name="image" value="{{old('image')}}">
          </div>
        </div>
          <?php $listPrivacies = \Weeesh\ListPrivacy::pluck('name', 'id_list_privacy')->toArray() ?>
          <div class="row">
              <div class="col-md-4"></div>
              <div class="form-group col-md-4">
                  <label for="name">@lang("Privacy"):</label>
                  {!! Form::select('id_list_privacy', $listPrivacies, null, ['class' => 'form-input']) !!}
              </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-left:38px">@lang("Insert Object")</button>
          </div>
        </div>
        <input type="hidden" name="id_list" value="{{$wlist->id_list}}"/>
        {{ Form::close() }}
    </div>
@endsection