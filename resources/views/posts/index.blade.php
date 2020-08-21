@extends('layouts.app')

@section('content')
<div class="container pr-5 pl-5">
    <div class="row">
        <div class="col-8">
            @foreach ($posts as $post)
            <div class="pb-4">
                <div style="border: 1px solid #dbdbdb">
                    <div class="d-flex align-items-center p-3">
                        <div class="pr-3">
                            <a href="/profile/{{ $post->user->id }}" class="text-decoration-none">
                                <img class="rounded-circle w-100" style="max-width: 35px;" src="{{ $post->user->profile->profileImage() }}">
                            </a>
                        </div>

                        <div class="font-weight-bold">
                            <a href="/profile/{{ $post->user->id }}" class="text-decoration-none">
                                <span class="text-dark text-decoration-none">{{ $post->user->username }}</span>
                            </a>
                            <span class="p-1">•</span>
                            <a href="#">Follow</a>
                        </div>
                    </div>
                    <div>
                        <div>
                            <a href="/p/{{ $post->id }}">
                                <img class="w-100" src="/storage/{{ $post->image }}">
                            </a>
                        </div>
                        <div class="p-3">
                            <span class="font-weight-bold">
                                <a href="/profile/{{ $post->user->id }}" class="text-decoration-none">
                                    <span class="text-dark">{{ $post->user->username }}</span>
                                </a>
                            </span> {{ $post->caption }}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
        <div class="col-4 pt-4">
            <div class="d-flex align-items-center">
                <div class="col-3 p-0">
                    <a href="/profile/{{ Auth::user()->id }}" class="text-decoration-none">
                        <img class="rounded-circle" style="max-width: 50px;" src="{{ Auth::user()->profile->profileImage() }}">
                    </a>
                </div>
                <div class="col-6 p-0">
                    <div class="row">
                        <a href="/profile/{{ Auth::user()->id }}" class="text-decoration-none">
                            <span class="text-dark font-weight-bold">{{ Auth::user()->username }}</span>
                        </a>
                    </div>
                    <div class="row">
                        <span style="color: #8f8f8f;">{{ Auth::user()->profile->title }}</span>
                    </div>
                </div>
            </div>

            <br>

            <div>
                <div class="font-weight-bold" style="color: #8e8e8e">Suggestions For You</div>
                <hr>
                @foreach ($allUsers as $user)
                <div class="d-flex align-items-center pb-3">
                    <div class="pr-3">
                        <a href="/profile/{{ $user->id }}" class="text-decoration-none">
                            <img class="rounded-circle w-100" style="max-width: 35px;" src="{{ $user->profile->profileImage() }}">
                        </a>
                    </div>

                    <div class="font-weight-bold">
                        <a href="/profile/{{ $user->id }}" class="text-decoration-none">
                            <span class="text-dark text-decoration-none">{{ $user->username }}</span>
                        </a>
                        <span class="p-1">•</span>
                        <a href="#">Follow</a>
                        {{-- <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button> --}}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection