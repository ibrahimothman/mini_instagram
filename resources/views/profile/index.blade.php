@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img src='https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSuBRzld_UHHLJcGlXadCWnv7IkdZAbBDWIdBG2nPrRVTzgC72P' class="rounded-circle w-100">
            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="d-flex align-items-center pb-3">
                        <div class="h4">{{$user->username}}</div>
                    </div>

                </div>



                <div class="d-flex">
                    <div class="pr-5"><strong>10</strong> posts</div>
                    <div class="pr-5"><strong>10</strong> followers</div>
                    <div class="pr-5"><strong>20</strong> following</div>
                </div>
                <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
                <div>{{ $user->profile->description }}</div>
                <div><a href="#">{{ $user->profile->url }}</a></div>
            </div>
        </div>

        <div class="row pt-5">
            <div class="col-4 pb-4">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSuBRzld_UHHLJcGlXadCWnv7IkdZAbBDWIdBG2nPrRVTzgC72P" class="w-100">
            </div>
            <div class="col-4 pb-4">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSuBRzld_UHHLJcGlXadCWnv7IkdZAbBDWIdBG2nPrRVTzgC72P" class="w-100">
            </div>
            <div class="col-4 pb-4">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSuBRzld_UHHLJcGlXadCWnv7IkdZAbBDWIdBG2nPrRVTzgC72P" class="w-100">
            </div>
        </div>
    </div>
@endsection
