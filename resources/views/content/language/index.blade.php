@extends('layouts/layoutMaster')

@section('title', 'Boxicons - Icons')


@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-icons.css') }}" />

@endsection
@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/tagify/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
@endsection

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.css" />
@section('content')




    <div class="d-flex justify-content-between">
        <div>
            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Language /</span> All Language
            </h4>
        </div>
        <div class="">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createlanguageModal">Add
                Language</button>
        </div>
    </div>
    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header">List of Language</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Language</th>
                        <th>Icon</th>
                        {{-- <th>Progress</th> --}}
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @if (count($languages))
                        @foreach ($languages as $language)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $language->title ?? '' }}</td>
                                <td>
                                    @if (isset($language->icon))
                                        <img src="{{ asset($language->icon) }}" width="50" height="50"
                                            alt="Language Icon">
                                    @endif


                                </td>
                                {{-- <td>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: {{ ( $language->translations_count *100)/$language->texts_count}}%" aria-valuenow="{{ $language->translations_count }}" aria-valuemin="0" aria-valuemax="{{ $language->texts_count }}">{{  floor(($language->translations_count *100)/$language->texts_count)}}%</div>
                        </div>
                    </td> --}}
                                <td>
                                    <div class="">
                                        <span data-bs-toggle="modal" data-bs-target="#languageModal{{ $language->id }}">
                                            <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4"
                                                data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit"><i
                                                    class="bx bx-edit"></i></button>
                                        </span>
                                        <form action="{{ route('language.destroy', $language->id) }}"
                                            onsubmit="confirmAction(event, () => event.target.submit())" method="post"
                                            class="d-inline">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip"
                                                data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                                data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                                        </form>
                                        {{-- <x-modal id="editlanguageModal{{$language->id}}" title="Update Language" saveBtnText="Update" saveBtnType="submit" saveBtnForm="editForm{{$language->id}}" size="md">
                            @include('content.include.movies.editForm')
                            </x-modal> --}}

                                        {{-- Add Categroy modal --}}
                                        <div class="modal fade" id="languageModal{{ $language->id }}" tabindex="-1"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalCenterTitle">Edit <span
                                                                class="text-info">{{ $language->title }}</span> Language
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="card">
                                                            <div class="table-responsive text-nowrap">
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">Section</th>
                                                                            <th scope="col">File</th>
                                                                            <th scope="col">Progress</th>
                                                                            <th scope="col">Done</th>
                                                                            <th scope="col">Total</th>
                                                                            <th scope="col">Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="table-border-bottom-0">
                                                                        <tr>
                                                                            <td>Alert,Upgrade,Mail</td>
                                                                            <td>Task</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar"
                                                                                        role="progressbar"
                                                                                        style="width: {{ rand(0, 100) }}%;"
                                                                                        aria-valuenow="{{ rand(0, 100) }}"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal"
                                                                                    data-bs-target="#languageModal__1{{ $language->id }}"
                                                                                    onclick="openSectionModal('alert')">
                                                                                    <button class="btn"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-offset="0,4"
                                                                                        data-bs-placement="top"
                                                                                        data-bs-html="true"
                                                                                        data-bs-original-title="Edit"><i
                                                                                            class="bx bx-edit"></i></button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Start Page</td>
                                                                            <td>Task</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar"
                                                                                        role="progressbar"
                                                                                        style="width: {{ rand(0, 100) }}%;"
                                                                                        aria-valuenow="{{ rand(0, 100) }}"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal"
                                                                                    data-bs-target="#startpage__1{{ $language->id }}"
                                                                                    onclick="openSectionModal('alert')">
                                                                                    <button class="btn"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-offset="0,4"
                                                                                        data-bs-placement="top"
                                                                                        data-bs-html="true"
                                                                                        data-bs-original-title="Edit"><i
                                                                                            class="bx bx-edit"></i></button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Sign up Section</td>
                                                                            <td>Task</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar"
                                                                                        role="progressbar"
                                                                                        style="width: {{ rand(0, 100) }}%;"
                                                                                        aria-valuenow="{{ rand(0, 100) }}"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal"
                                                                                    data-bs-target="#signupsection__1{{ $language->id }}"
                                                                                    onclick="openSectionModal('alert')">
                                                                                    <button class="btn"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-offset="0,4"
                                                                                        data-bs-placement="top"
                                                                                        data-bs-html="true"
                                                                                        data-bs-original-title="Edit"><i
                                                                                            class="bx bx-edit"></i></button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Sign in Section</td>
                                                                            <td>Task</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar"
                                                                                        role="progressbar"
                                                                                        style="width: {{ rand(0, 100) }}%;"
                                                                                        aria-valuenow="{{ rand(0, 100) }}"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal"
                                                                                    data-bs-target="#signinsection__1{{ $language->id }}"
                                                                                    onclick="openSectionModal('alert')">
                                                                                    <button class="btn"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-offset="0,4"
                                                                                        data-bs-placement="top"
                                                                                        data-bs-html="true"
                                                                                        data-bs-original-title="Edit"><i
                                                                                            class="bx bx-edit"></i></button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Footer Quick Launcher Sections</td>
                                                                            <td>Task</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar" role="progressbar" style="width: {{ rand(0, 100) }}%;" aria-valuenow="{{ rand(0, 100) }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal" data-bs-target="#footerQuickSectionModal{{ $language->id }}">
                                                                                    <button class="btn" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Edit">
                                                                                        <i class="bx bx-edit"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        
                                                                        <tr>
                                                                            <td>Footer Cart Sections</td>
                                                                            <td>Task</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar"
                                                                                        role="progressbar"
                                                                                        style="width: {{ rand(0, 100) }}%;"
                                                                                        aria-valuenow="{{ rand(0, 100) }}"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal"
                                                                                    data-bs-target="#footercart{{ $language->id }}"
                                                                                    onclick="openSectionModal('alert')">
                                                                                    <button class="btn"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-offset="0,4"
                                                                                        data-bs-placement="top"
                                                                                        data-bs-html="true"
                                                                                        data-bs-original-title="Edit"><i
                                                                                            class="bx bx-edit"></i></button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Footer Friends Sections</td>
                                                                            <td>Task</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar"
                                                                                        role="progressbar"
                                                                                        style="width: {{ rand(0, 100) }}%;"
                                                                                        aria-valuenow="{{ rand(0, 100) }}"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal"
                                                                                    data-bs-target="#footerfriendssection{{ $language->id }}"
                                                                                    onclick="openSectionModal('alert')">
                                                                                    <button class="btn"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-offset="0,4"
                                                                                        data-bs-placement="top"
                                                                                        data-bs-html="true"
                                                                                        data-bs-original-title="Edit"><i
                                                                                            class="bx bx-edit"></i></button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Footer Chat Section</td>
                                                                            <td>Task</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar"
                                                                                        role="progressbar"
                                                                                        style="width: {{ rand(0, 100) }}%;"
                                                                                        aria-valuenow="{{ rand(0, 100) }}"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal"
                                                                                    data-bs-target="#footerchatsection{{ $language->id }}"
                                                                                    onclick="openSectionModal('alert')">
                                                                                    <button class="btn"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-offset="0,4"
                                                                                        data-bs-placement="top"
                                                                                        data-bs-html="true"
                                                                                        data-bs-original-title="Edit"><i
                                                                                            class="bx bx-edit"></i></button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Header Feed Sections</td>
                                                                            <td>Task</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar"
                                                                                        role="progressbar"
                                                                                        style="width: {{ rand(0, 100) }}%;"
                                                                                        aria-valuenow="{{ rand(0, 100) }}"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal"
                                                                                    data-bs-target="#headerfeedsection{{ $language->id }}"
                                                                                    onclick="openSectionModal('alert')">
                                                                                    <button class="btn"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-offset="0,4"
                                                                                        data-bs-placement="top"
                                                                                        data-bs-html="true"
                                                                                        data-bs-original-title="Edit"><i
                                                                                            class="bx bx-edit"></i></button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Visitor Profile</td>
                                                                            <td>Task</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar"
                                                                                        role="progressbar"
                                                                                        style="width: {{ rand(0, 100) }}%;"
                                                                                        aria-valuenow="{{ rand(0, 100) }}"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal"
                                                                                    data-bs-target="#visitprofilesection{{ $language->id }}"
                                                                                    onclick="openSectionModal('alert')">
                                                                                    <button class="btn"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-offset="0,4"
                                                                                        data-bs-placement="top"
                                                                                        data-bs-html="true"
                                                                                        data-bs-original-title="Edit"><i
                                                                                            class="bx bx-edit"></i></button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Header Stories Section</td>
                                                                            <td>Task</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar"
                                                                                        role="progressbar"
                                                                                        style="width: {{ rand(0, 100) }}%;"
                                                                                        aria-valuenow="{{ rand(0, 100) }}"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal"
                                                                                    data-bs-target="#headerstoriessection{{ $language->id }}"
                                                                                    onclick="openSectionModal('alert')">
                                                                                    <button class="btn"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-offset="0,4"
                                                                                        data-bs-placement="top"
                                                                                        data-bs-html="true"
                                                                                        data-bs-original-title="Edit"><i
                                                                                            class="bx bx-edit"></i></button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Header Greeting & Wishes Section</td>
                                                                            <td>Task</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar"
                                                                                        role="progressbar"
                                                                                        style="width: {{ rand(0, 100) }}%;"
                                                                                        aria-valuenow="{{ rand(0, 100) }}"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal"
                                                                                    data-bs-target="#headergreating{{ $language->id }}"
                                                                                    onclick="openSectionModal('alert')">
                                                                                    <button class="btn"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-offset="0,4"
                                                                                        data-bs-placement="top"
                                                                                        data-bs-html="true"
                                                                                        data-bs-original-title="Edit"><i
                                                                                            class="bx bx-edit"></i></button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Header Music Section</td>
                                                                            <td>Task</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar"
                                                                                        role="progressbar"
                                                                                        style="width: {{ rand(0, 100) }}%;"
                                                                                        aria-valuenow="{{ rand(0, 100) }}"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal"
                                                                                    data-bs-target="#headermusic{{ $language->id }}"
                                                                                    onclick="openSectionModal('alert')">
                                                                                    <button class="btn"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-offset="0,4"
                                                                                        data-bs-placement="top"
                                                                                        data-bs-html="true"
                                                                                        data-bs-original-title="Edit"><i
                                                                                            class="bx bx-edit"></i></button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Header Videos Section</td>
                                                                            <td>Task</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar"
                                                                                        role="progressbar"
                                                                                        style="width: {{ rand(0, 100) }}%;"
                                                                                        aria-valuenow="{{ rand(0, 100) }}"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal"
                                                                                    data-bs-target="#headervideo{{ $language->id }}"
                                                                                    onclick="openSectionModal('alert')">
                                                                                    <button class="btn"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-offset="0,4"
                                                                                        data-bs-placement="top"
                                                                                        data-bs-html="true"
                                                                                        data-bs-original-title="Edit"><i
                                                                                            class="bx bx-edit"></i></button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Header Stream Section</td>
                                                                            <td>Task</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar"
                                                                                        role="progressbar"
                                                                                        style="width: {{ rand(0, 100) }}%;"
                                                                                        aria-valuenow="{{ rand(0, 100) }}"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal"
                                                                                    data-bs-target="#headerstreamsection{{ $language->id }}"
                                                                                    onclick="openSectionModal('alert')">
                                                                                    <button class="btn"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-offset="0,4"
                                                                                        data-bs-placement="top"
                                                                                        data-bs-html="true"
                                                                                        data-bs-original-title="Edit"><i
                                                                                            class="bx bx-edit"></i></button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Header Event Section</td>
                                                                            <td>Task</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar"
                                                                                        role="progressbar"
                                                                                        style="width: {{ rand(0, 100) }}%;"
                                                                                        aria-valuenow="{{ rand(0, 100) }}"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal"
                                                                                    data-bs-target="#headerevent{{ $language->id }}"
                                                                                    onclick="openSectionModal('alert')">
                                                                                    <button class="btn"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-offset="0,4"
                                                                                        data-bs-placement="top"
                                                                                        data-bs-html="true"
                                                                                        data-bs-original-title="Edit"><i
                                                                                            class="bx bx-edit"></i></button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Header OnlineShop Section</td>
                                                                            <td>Task</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar"
                                                                                        role="progressbar"
                                                                                        style="width: {{ rand(0, 100) }}%;"
                                                                                        aria-valuenow="{{ rand(0, 100) }}"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal"
                                                                                    data-bs-target="#headeronlineshop{{ $language->id }}"
                                                                                    onclick="openSectionModal('alert')">
                                                                                    <button class="btn"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-offset="0,4"
                                                                                        data-bs-placement="top"
                                                                                        data-bs-html="true"
                                                                                        data-bs-original-title="Edit"><i
                                                                                            class="bx bx-edit"></i></button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Header Restaurant Section</td>
                                                                            <td>Task</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar"
                                                                                        role="progressbar"
                                                                                        style="width: {{ rand(0, 100) }}%;"
                                                                                        aria-valuenow="{{ rand(0, 100) }}"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal"
                                                                                    data-bs-target="#headerrestorent{{ $language->id }}"
                                                                                    onclick="openSectionModal('alert')">
                                                                                    <button class="btn"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-offset="0,4"
                                                                                        data-bs-placement="top"
                                                                                        data-bs-html="true"
                                                                                        data-bs-original-title="Edit"><i
                                                                                            class="bx bx-edit"></i></button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Header ServicePortal Section</td>
                                                                            <td>Task</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar"
                                                                                        role="progressbar"
                                                                                        style="width: {{ rand(0, 100) }}%;"
                                                                                        aria-valuenow="{{ rand(0, 100) }}"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal"
                                                                                    data-bs-target="#headerserviceportal{{ $language->id }}"
                                                                                    onclick="openSectionModal('alert')">
                                                                                    <button class="btn"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-offset="0,4"
                                                                                        data-bs-placement="top"
                                                                                        data-bs-html="true"
                                                                                        data-bs-original-title="Edit"><i
                                                                                            class="bx bx-edit"></i></button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td>Setting Overview Section</td>
                                                                            <td>Task</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar"
                                                                                        role="progressbar"
                                                                                        style="width: {{ rand(0, 100) }}%;"
                                                                                        aria-valuenow="{{ rand(0, 100) }}"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal"
                                                                                    data-bs-target="#settingoverview{{ $language->id }}"
                                                                                    onclick="openSectionModal('alert')">
                                                                                    <button class="btn"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-offset="0,4"
                                                                                        data-bs-placement="top"
                                                                                        data-bs-html="true"
                                                                                        data-bs-original-title="Edit"><i
                                                                                            class="bx bx-edit"></i></button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Setting Section</td>
                                                                            <td>Task</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar"
                                                                                        role="progressbar"
                                                                                        style="width: {{ rand(0, 100) }}%;"
                                                                                        aria-valuenow="{{ rand(0, 100) }}"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal"
                                                                                    data-bs-target="#settingsectionsok{{ $language->id }}"
                                                                                    onclick="openSectionModal('alert')">
                                                                                    <button class="btn"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-offset="0,4"
                                                                                        data-bs-placement="top"
                                                                                        data-bs-html="true"
                                                                                        data-bs-original-title="Edit"><i
                                                                                            class="bx bx-edit"></i></button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>My Profile Home Section</td>
                                                                            <td>Task</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar"
                                                                                        role="progressbar"
                                                                                        style="width: {{ rand(0, 100) }}%;"
                                                                                        aria-valuenow="{{ rand(0, 100) }}"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal"
                                                                                    data-bs-target="#myprofilesection{{ $language->id }}"
                                                                                    onclick="openSectionModal('alert')">
                                                                                    <button class="btn"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-offset="0,4"
                                                                                        data-bs-placement="top"
                                                                                        data-bs-html="true"
                                                                                        data-bs-original-title="Edit"><i
                                                                                            class="bx bx-edit"></i></button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td>My Profile Multimedia Section</td>
                                                                            <td>Task</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar"
                                                                                        role="progressbar"
                                                                                        style="width: {{ rand(0, 100) }}%;"
                                                                                        aria-valuenow="{{ rand(0, 100) }}"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal"
                                                                                    data-bs-target="#profilemultimedia{{ $language->id }}"
                                                                                    onclick="openSectionModal('alert')">
                                                                                    <button class="btn"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-offset="0,4"
                                                                                        data-bs-placement="top"
                                                                                        data-bs-html="true"
                                                                                        data-bs-original-title="Edit"><i
                                                                                            class="bx bx-edit"></i></button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>My Profile Friends Section</td>
                                                                            <td>Task</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar"
                                                                                        role="progressbar"
                                                                                        style="width: {{ rand(0, 100) }}%;"
                                                                                        aria-valuenow="{{ rand(0, 100) }}"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal"
                                                                                    data-bs-target="#myprofilefriends{{ $language->id }}"
                                                                                    onclick="openSectionModal('alert')">
                                                                                    <button class="btn"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-offset="0,4"
                                                                                        data-bs-placement="top"
                                                                                        data-bs-html="true"
                                                                                        data-bs-original-title="Edit"><i
                                                                                            class="bx bx-edit"></i></button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>My Profile Office Section</td>
                                                                            <td>Task</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar"
                                                                                        role="progressbar"
                                                                                        style="width: {{ rand(0, 100) }}%;"
                                                                                        aria-valuenow="{{ rand(0, 100) }}"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal"
                                                                                    data-bs-target="#myprofileoffice{{ $language->id }}"
                                                                                    onclick="openSectionModal('alert')">
                                                                                    <button class="btn"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-offset="0,4"
                                                                                        data-bs-placement="top"
                                                                                        data-bs-html="true"
                                                                                        data-bs-original-title="Edit"><i
                                                                                            class="bx bx-edit"></i></button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Channels</td>
                                                                            <td>Task</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar"
                                                                                        role="progressbar"
                                                                                        style="width: {{ rand(0, 100) }}%;"
                                                                                        aria-valuenow="{{ rand(0, 100) }}"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal"
                                                                                    data-bs-target="#myaschannels{{ $language->id }}"
                                                                                    onclick="openSectionModal('alert')">
                                                                                    <button class="btn"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-offset="0,4"
                                                                                        data-bs-placement="top"
                                                                                        data-bs-html="true"
                                                                                        data-bs-original-title="Edit"><i
                                                                                            class="bx bx-edit"></i></button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Channel Settings</td>
                                                                            <td>Task</td>
                                                                            <td>
                                                                                <div class="progress">
                                                                                    <div class="progress-bar"
                                                                                        role="progressbar"
                                                                                        style="width: {{ rand(0, 100) }}%;"
                                                                                        aria-valuenow="{{ rand(0, 100) }}"
                                                                                        aria-valuemin="0"
                                                                                        aria-valuemax="100"></div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>{{ rand(0, 100) }}</td>
                                                                            <td>
                                                                                <span data-bs-toggle="modal"
                                                                                    data-bs-target="#mychannelsetting{{ $language->id }}"
                                                                                    onclick="openSectionModal('alert')">
                                                                                    <button class="btn"
                                                                                        data-bs-toggle="tooltip"
                                                                                        data-bs-offset="0,4"
                                                                                        data-bs-placement="top"
                                                                                        data-bs-html="true"
                                                                                        data-bs-original-title="Edit"><i
                                                                                            class="bx bx-edit"></i></button>
                                                                                </span>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-label-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Edit language model __1 --}}
                                        <div class="modal fade" id="languageModal__1{{ $language->id }}" tabindex="-1"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalCenterTitle">Edit
                                                            {{-- <span class="text-info">{{ $language->title }}</span> --}}
                                                            Section</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('languages.keywordstore') }}"
                                                            method="POST">
                                                            @csrf
                                                            <input type="hidden" name="language_id"
                                                                value="{{ $language->id }}">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <h5>English Language</h5>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h5>{{ $language->title }} Language</h5>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <h6>Alert</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="This Module is only for Premium User Please Upgrade your Account"
                                                                            name="alert">
                                                                    </div>
                                                                </div>

                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Upgrade</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="upgrade" placeholder="Select the plan">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Premium</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="premium" placeholder="Premium">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Vip</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="vip" placeholder="Vip">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Monthly</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Monthly" name="monthly">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Feeds</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="feeds" placeholder="Feeds">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Text Comments</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="text_comments"
                                                                            placeholder="Text Comments">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Music Player</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="music_player"
                                                                            placeholder="Music Player">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Video Playlist</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="video_playlist"
                                                                            placeholder="Video Playlist">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>10% Discount</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="discount" placeholder="10% Discount">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Stories</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="stories" placeholder="Stories">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Voice Comments</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="voice_comments"
                                                                            placeholder="Voice Comments">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Live Stream</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="live_stream" placeholder="Live Stream">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Fanpage</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="fanpage" placeholder="Fanpage">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Choose this Plan and get one Gift Free</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="gift_free"
                                                                            placeholder="Choose this Plan and get one Gift Free">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Show me the Gift</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="show_me_the_gift"
                                                                            placeholder="Show me the Gift">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Congratulations Educated</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="congratulations_educated"
                                                                            placeholder="Congratulations Educated">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Congratulations Academic</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="congratulations_academic"
                                                                            placeholder="Congratulations Academic">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Premium Description</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="premium_description"
                                                                            placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Go back to home!</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="go_back_home"
                                                                            placeholder="Go back to home!">
                                                                    </div>
                                                                </div>

                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Your Activation Code „Mail“</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="your_activation_code_mail"
                                                                            placeholder="Your Activation Code „Mail“">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Your Password Code „Mail“</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="your_password_code_mail"
                                                                            placeholder="Your Password Code „Mail“">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Your FanPage Activation Code</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="your_fanpage_activation_code"
                                                                            placeholder="Your FanPage Activation Code">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Code can be used one Time only</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="one_time_code"
                                                                            placeholder="Code can be used one Time only">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Follow Steps on your Device</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="follow_steps_on_your_device"
                                                                            placeholder="Follow Steps on your Device">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Welcome</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="welcome" placeholder="Welcome">
                                                                    </div>
                                                                </div>
                                                            </div>


                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-label-secondary"
                                                            data-bs-dismiss="modal">Save</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- //Startpage --}}
                                        <div class="modal fade" id="startpage__1{{ $language->id }}" tabindex="-1"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalCenterTitle">Edit
                                                            {{-- <span class="text-info">{{ $language->title }}</span> --}}
                                                            Section</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('languages.startpage') }}"
                                                            method="POST">
                                                            @csrf
                                                            <input type="hidden" name="language_id"
                                                                value="{{ $language->id }}">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <h5>English Language</h5>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h5>{{ $language->title }} Language</h5>
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Language</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="language" placeholder="Language">
                                                                    </div>
                                                                </div>

                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Our Policy</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="our_policy" placeholder="Our Policy">
                                                                    </div>
                                                                </div>

                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Login</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="login" placeholder="Login">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Sign up</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="sign_up" placeholder="Sign up">
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6> Guest</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="dear_guest" placeholder="Dear Guest">
                                                                    </div>
                                                                </div>

                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Create Account</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="create_account"
                                                                            placeholder="Create Account">
                                                                    </div>
                                                                </div>



                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-label-secondary"
                                                                    data-bs-dismiss="modal">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- //Sign up Section --}}
                                        <div class="modal fade" id="signupsection__1{{ $language->id }}" tabindex="-1"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalCenterTitle">Edit
                                                            {{-- <span class="text-info">{{ $language->title }}</span> --}}
                                                            Section</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('languages.signupsection') }}"
                                                            method="POST">
                                                            @csrf
                                                            <input type="hidden" name="language_id"
                                                                value="{{ $language->id }}">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <h5>English Language</h5>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h5>{{ $language->title }} Language</h5>
                                                                    </div>
                                                                </div>

                                                                <!-- Language -->
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Language</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="language_search" placeholder="Search">
                                                                        <input type="text" class="form-control mt-2"
                                                                            name="language_save_change"
                                                                            placeholder="Save Change">
                                                                    </div>
                                                                </div>

                                                                <!-- Select Gender -->
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Select Gender</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <select class="form-control" name="gender">
                                                                            <option value="male">Male</option>
                                                                            <option value="female">Female</option>
                                                                            <option value="missing">Gender is Missing</option>
                                                                        </select>
                                                                        <input type="text" class="form-control mt-2" name="select_gender_prompt" placeholder="Please select your gender">
                                                                        <input type="text" class="form-control mt-2" name="gender_ok" placeholder="Ok">
                                                                        <input type="text" class="form-control mt-2" name="gender_start" placeholder="Start">
                                                                    </div>
                                                                </div>
                                                                
                                                                <!-- Firstname -->
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Firstname</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="firstname" placeholder="Your Firstname">
                                                                    </div>
                                                                </div>

                                                                <!-- Lastname -->
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Lastname</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="lastname" placeholder="Your Lastname">
                                                                    </div>
                                                                </div>

                                                                <!-- Username -->
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Username</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="username" placeholder="Your Username">
                                                                    </div>
                                                                </div>

                                                                <!-- Birthday and Status -->
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Your Birthday</h6>
                                                                    </div>
                                                                    <div class="row mt-2">
                                                                        <div class="col-md-6">
                                                                            <h6>Your Status</h6>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <select class="form-control" name="your_status">
                                                                                <option value="single">Single</option>
                                                                                <option value="engaged">Engaged</option>
                                                                                <option value="married">Married</option>
                                                                            </select>
                                                                            <input type="text" class="form-control mt-2" name="status_next" placeholder="Next">
                                                                            <input type="text" class="form-control mt-2" name="status_back" placeholder="Back">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Select Location -->
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Select Location</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="current_location"
                                                                            placeholder="Current Location">
                                                                        <input type="text" class="form-control mt-2"
                                                                            name="address" placeholder="Address">
                                                                    </div>
                                                                </div>

                                                                <!-- E-Mail Address -->
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Your E-Mail Address</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="email" class="form-control"
                                                                            name="email" placeholder="Type your E-Mail">
                                                                        <input type="email" class="form-control mt-2"
                                                                            name="repeat_email"
                                                                            placeholder="Repeat your E-Mail">
                                                                         
                                                                           </div>
                                                                </div>

                                                                <!-- Phone Number -->
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Your Phone Number</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="phone_number"
                                                                            placeholder="Your Phone Number">
                                                                    </div>
                                                                </div>

                                                                <!-- Create Password -->
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Create Password</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="password" class="form-control"
                                                                            name="password"
                                                                            placeholder="Enter a Password">
                                                                        <input type="password" class="form-control mt-2"
                                                                            name="repeat_password"
                                                                            placeholder="Repeat a Password">
                                                                                                                                            </div>
                                                                </div>

                                                                <!-- Account Created -->
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <h6>Account Created!</h6>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" class="form-control"
                                                                            name="account_created_success_message"
                                                                            placeholder="Your account has been created, successfully. Please sign in to use your account, and enjoy">
                                                                        
                                                                        <input type="text" class="form-control mt-2"
                                                                            name="sign_in_redirect"
                                                                            placeholder="Take me to sign in">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-label-secondary"
                                                            data-bs-dismiss="modal">Save</button>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Signin Section --}}
                                    @include('footercartsection', ['language' => $language])
                                    @include('footerchatsection', ['language' => $language])
                                    @include('visiterprofile', ['language' => $language])
                                    @include('headerstories', ['language' => $language])
                                    @include('headergreating', ['language' => $language])
                                    @include('headermusic', ['language' => $language])
                                    @include('headervideo', ['language' => $language])
                                    @include('headerstream', ['language' => $language])
                                    @include('headerevent', ['language' => $language]) 
                                    @include('headeronlineshop', ['language' => $language])
                                    @include('header_restorent', ['language' => $language])
                                    @include('header_serviceportal', ['language' => $language])
                                    @include('settingoverview', ['language' => $language])
                                    @include('settingsection', ['language' => $language])
                                    @include('myprofilesection', ['language' => $language]) 
                                    @include('profilemultimedia', ['language' => $language])
                                    @include('myprofilefriend', ['language' => $language])
                                    @include('profileofficesection', ['language' => $language])
                                    @include('chanel', ['language' => $language])
                                    @include('channel_setting', ['language' => $language])
                                    @include('headerfeedsection', ['language' => $language])
                                    @include('footerfriends', ['language' => $language])
                                    @include('edit_footer_quick_section_modal', ['language' => $language])

                                    @include('signinsection', ['language' => $language])
                                   
                                    {{-- Footer Quick Launcher Sections --}}
                                 



                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="text-center" colspan="8">No Language found.</td>
                        </tr>
                    @endif
                </tbody>
            </table>

        </div>
    </div>

    <x-modal id="createlanguageModal" title="Create Language" saveBtnText="Create" saveBtnType="submit"
        saveBtnForm="createForm" size="md">
        @include('content.include.language.createForm')
    </x-modal>

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
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.js"></script>
    <script type="text/javascript">
        function custom_template(obj) {
            var data = $(obj.element).data();
            var text = $(obj.element).text();
            if (data && data['img_src']) {
                img_src = data['img_src'];
                template = $("<div style=\"display:flex;gap:4px;margin-top:10px;\"><img src=\"" + img_src +
                    "\" style=\"width:20px;height:20px;border-radius:20px;\"/><p style=\"font-weight: 400;font-size:10pt; margin-top:-5px;\">" +
                    text + "</p></div>");
                return template;
            }
        }
        var options = {
            'templateSelection': custom_template,
            'templateResult': custom_template,
        }
        $('#id_select2_example').select2(options);
        $('.select2-container--default .select2-selection--single').css({
            'height': '47px'
        });
    </script>
@endsection
@endsection
