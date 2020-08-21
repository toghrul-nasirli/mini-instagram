@extends('layouts.app')

@section('content')
    <div class="container pr-5 pl-5">
        <div class="row">
            <div class="col-8">
                <div style="border: 1px solid #dbdbdb">
                    <img class="w-100" src="/storage/{{ $post->image }}">
                </div>
            </div>
            <div class="col-4">
                <div>
                    <div class="d-flex align-items-center">
                        <div class="pr-3">
                            <img class="rounded-circle w-100" style="max-width: 35px;" src="{{ $post->user->profile->profileImage() }}">
                        </div>
                        <div>
                            <div class="font-weight-bold">
                                <a href="/profile/{{ $post->user->id }}" class="text-decoration-none">
                                    <span class="text-dark">{{ $post->user->username }}</span>
                                </a>
                                <span class="p-1">•</span>
                                <a href="#">Follow</a>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <p>
                        <span class="font-weight-bold">
                            <a href="/profile/{{ $post->user->id }}" class="text-decoration-none">
                                <span class="text-dark">{{ $post->user->username }}</span>
                            </a>
                        </span> {{ $post->caption }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection