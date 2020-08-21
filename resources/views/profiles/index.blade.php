@extends('layouts.app')

@section('content')
<div class="container pr-5 pl-5">
    <div class="row pl-5">
        <div class="col-3 pt-4 pl-5">
            <img class="rounded-circle w-100" src="{{ $user->profile->profileImage() }}">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="h3">{{ $user->username }}</div>
                    @if (auth()->user()->id != $user->profile->user_id)
                        <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                    @endif
                </div>

                @can('update', $user->profile)
                    <a class="btn btn-primary" href="/p/create">Add new post</a>
                @endcan
            </div>
            
            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan

            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>{{ $user->profile->followers->count() }}</strong> followers</div>
                <div class="pr-5"><strong>{{ $user->following->count() }}</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a class="font-weight-bold" style="color: #00376b;" target="blank" href="{{ $user->profile->url }}">{{ $user->profile->url() }}</a></div>
        </div>
    </div>
    <div class="pt-5" style="border-bottom: 0.5px solid #dbdbdb"></div>
    <div class="row pt-5">
        @foreach ($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img class="w-100" src="/storage/{{ $post->image }}">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
