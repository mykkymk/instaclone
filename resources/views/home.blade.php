@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fnbo2-1.fna.fbcdn.net/v/t51.2885-19/s150x150/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=instagram.fnbo2-1.fna.fbcdn.net&_nc_ohc=Qs0j1hhrQ-IAX8NNjHS&tp=1&oh=d0b13b7cd543ccf347539d1459ca7a36&oe=603C0567" alt="" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="#">Add Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.fnbo2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c2.0.823.823a/s640x640/140507228_196917682183052_8114511830349298512_n.jpg?_nc_ht=instagram.fnbo2-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=PlDDNeq5fb0AX_s-hlc&tp=1&oh=7402fa788af229418c6af18275451887&oe=603C6D11" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fnbo2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c2.0.823.823a/s640x640/139964418_455868755429422_5426672429118341455_n.jpg?_nc_ht=instagram.fnbo2-1.fna.fbcdn.net&_nc_cat=110&_nc_ohc=eke2Po9Y1dsAX_tPpfT&tp=1&oh=9fd60a43452f623d468e2cf55d2ca40c&oe=603D156E" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fnbo2-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c2.0.823.823a/s640x640/137282729_891157201697073_3007940832466214946_n.jpg?_nc_ht=instagram.fnbo2-1.fna.fbcdn.net&_nc_cat=109&_nc_ohc=ETNY6RkxUDIAX8kutcY&tp=1&oh=e5730b89b59fb9d963a6fafa5085da49&oe=603D9D8E" class="w-100">
        </div>
    </div>
</div>
@endsection
