@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://pbs.twimg.com/profile_images/782132102368223232/yJxwuI1g_400x400.jpg"
            class="rounded-circle  img-fluid"  style="height: 110px;"/>
        </div>
        <div class="col-9 pt-5">
          <div><h1>{{ $user->username}}</h1></div>
          <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
          </div>
          <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
          <div>{{$user->profile->description}}</div>
          <div><a href="#">{{$user->profile->url}}</a></div>
        </div>
    </div>

    <div class="row pt-5">
      <div class="col-4">
          <img src="https://www.desmaakspecialist.nl/wp-content/uploads/sites/2/2017/04/IMG-20170401-WA0004-300x300.jpg" class="w-100" />
      </div>
      <div class="col-4">
          <img src="https://kucht.com/online/wp-content/uploads/2018/12/azul-293x293.jpg" class="w-100"/>
      </div>
      <div class="col-4">
          <img src="https://www.biotoday.bio/wp-content/uploads/sites/2/2019/01/IMG_3913-293x293.jpg" class="w-100" />
      </div>
    </div>
</div>
@endsection
