@extends('layouts.layoutMaster')

@section('title', 'Artist Songs')

@section('page-style')
<link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-icons.css') }}" />
<style>
    .custom-tab-content {
        border: 1px solid #dee2e6;
        border-top: none;
        padding: 1rem;
    }
    .table th, .table td {
        vertical-align: middle;
    }
</style>
@endsection

@section('vendor-style')
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/tagify/tagify.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/dropzone/dropzone.css') }}" />
@endsection

@section('vendor-script')
<script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Artist /</span> {{ $artist->name }}
        </h4>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link {{ Route::currentRouteName() == 'artist.songs' ? 'active' : '' }}" id="songs-tab" data-bs-toggle="tab" data-bs-target="#songs" type="button" role="tab" aria-controls="songs" aria-selected="{{ Route::currentRouteName() == 'artist.songs' ? 'true' : 'false' }}">Total Songs: {{ $artist->music->count() }}</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link {{ Route::currentRouteName() == 'artist.albums' ? 'active' : '' }}" id="albums-tab" data-bs-toggle="tab" data-bs-target="#albums" type="button" role="tab" aria-controls="albums" aria-selected="{{ Route::currentRouteName() == 'artist.albums' ? 'true' : 'false' }}">Total Albums: {{ $artist->banner->count() }}</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link {{ Route::currentRouteName() == 'artist.videos' ? 'active' : '' }}" id="videos-tab" data-bs-toggle="tab" data-bs-target="#videos" type="button" role="tab" aria-controls="videos" aria-selected="{{ Route::currentRouteName() == 'artist.videos' ? 'true' : 'false' }}">Video Clips: {{ $artist->video_clips->count() }}</button>
            </li>
        </ul>
    </div>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade {{ Route::currentRouteName() == 'artist.songs' ? 'show active' : '' }}" id="songs" role="tabpanel" aria-labelledby="songs-tab">
            <div class="table-responsive custom-tab-content">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Song Id</th>
                            <th>Song Title</th>
                            <th>Tracks</th>
                            <th>Total Listen</th>
                            <th>Uploaded Date</th>
                            <th>Size</th>
                            <th>Length</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($artist->music as $song)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $song->title }}</td>
                            <td>
                                @php
                                $url = url('storage/'.$song->audio);
                                $cleanUrl = str_replace('public/index.php/', '', $url);
                                @endphp
                                <audio controls>
                                    <source src="{{ $cleanUrl }}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                            </td>
                            <td>1000</td>
                            <td>{{ date('d-m-Y', strtotime($song->created_at)) }}</td>
                            <td>{{ number_format($song->size / 1024, 2) }}MB</td>
                            <td>{{ gmdate('i:s', $song->length) }}</td>
                            <td>
                                <form action="{{ route('musics.delete', $song->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-icon deletebtn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove">
                                        <i class="bx bx-trash me-1"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="tab-pane fade {{ Route::currentRouteName() == 'artist.albums' ? 'show active' : '' }}" id="albums" role="tabpanel" aria-labelledby="albums-tab">
            <div class="table-responsive custom-tab-content">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Album Id</th>
                            <th>Album Title</th>
                            <th>Total Listen</th>
                            <th>Uploaded Date</th>
                            <th>Size</th>
                            <th>Length</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($artist->banner as $album)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td> @php
                                $url = url('storage/' . $album->banner);
                                $cleanUrl = str_replace('public/index.php/', '', $url);
                                @endphp
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar avatar-xs">
                                            <img class="avatar-img rounded-circle" src="{{ $cleanUrl }}" alt="">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <span class="fw-bold">{{ $album->banner_title }}</span>
                                         
                                    </div>
                                </div>
    </td>
                            <td>1000</td>
                            <td>{{ date('d-m-Y', strtotime($album->created_at)) }}</td>
                            <td>{{ number_format($album->size / 1024, 2) }}MB</td>
                            <td>{{ gmdate('i:s', $album->length) }}</td>
                            <td>
                                <form action="{{ route('banneralbum.delete', $album->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-icon deletebtn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove">
                                        <i class="bx bx-trash me-1"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
          
           
        </div>
        <div class="tab-pane fade {{ Route::currentRouteName() == 'artist.videos' ? 'show active' : '' }}" id="videos" role="tabpanel" aria-labelledby="videos-tab">
            <div class="table-responsive custom-tab-content">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Video Id</th>
                            <th>Video Title</th>
                            <th>Tracks</th>
                            <th>Total Listen</th>
                            <th>Uploaded Date</th>
                            <th>Size</th>
                            <th>Length</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($artist->video_clips as $video)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $video->title }}</td>
                            <td>
                                @php
                                $url = url('storage/'.$video->video);
                                $cleanUrl = str_replace('public/index.php/', '', $url);
                                @endphp
                                <video controls width="320" height="240">
                                    <source src="{{ $cleanUrl }}" type="video/mp4">
                                    Your browser does not support the video element.
                                </video>
                            </td>
                            <td>1000</td>
                            <td>{{ date('d-m-Y', strtotime($video->created_at)) }}</td>
                            <td>{{ number_format($video->size / 1024, 2) }}MB</td>
                            <td>{{ gmdate('i:s', $video->length) }}</td>
                            <td>
                                <form action="{{ route('videoclips.delete-video', $video->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-icon deletebtn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove">
                                        <i class="bx bx-trash me-1"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-script')
<script>
    function confirmAction(event, callback) {
        event.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "Are you sure you want to delete this?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            customClass: {
                confirmButton: 'btn btn-danger me-3',
                cancelButton: 'btn btn-label-secondary'
            },
            buttonsStyling: false
        }).then(function(result) {
            if (result.value) {
                callback();
            }
        });
    }

    function drpzone_init() {
        dropZoneInitFunctions.forEach(callback => callback());
    }
</script>
<script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js" onload="drpzone_init()"></script>
@endsection
