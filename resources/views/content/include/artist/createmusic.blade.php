@php
    $artists = \App\Models\Artist::get();
@endphp

<form id="createmusic" method="POST" action="{{ route('music.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="hidden-inputs"></div>
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label" for="fullname">Artist</label>
                    <select name="artists_id" class="form-select" required>
                        <option selected>Select Artist</option>
                        @foreach ($artists as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropzone needsclick dz-clickable" action="/" id="dropzone-audio">
                                <div class="dz-message needsclick">
                                    Upload Audio
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <label class="form-label" for="status">Status</label>
                    <select class="form-select" name="status">
                        <option selected value="">Select</option>
                        <option value="1">Publish</option>
                        <option value="0">UnPublish</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    'use strict';

    document.addEventListener('DOMContentLoaded', function() {
        const previewTemplate = `<div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <div class="dz-preview dz-file-preview w-100">
                    <div class="dz-details">
                        <div class="dz-thumbnail" style="width:95%">
                            <img data-dz-thumbnail>
                            <span class="dz-nopreview">No preview</span>
                            <div class="dz-success-mark"></div>
                            <div class="dz-error-mark"></div>
                            <div class="dz-error-message"><span data-dz-errormessage></span></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" data-dz-uploadprogress></div>
                            </div>
                        </div>
                        <div class="dz-filename" data-dz-name></div>
                        <div class="dz-size" data-dz-size></div>
                    </div>
                </div>
            </div>
        </div>`;

        const dropzoneMulti = new Dropzone('#dropzone-audio', {
    url: '{{ route('file.upload') }}',
    previewTemplate: previewTemplate,
    parallelUploads: 10,
    maxFilesize: 500, // Max size in MB
    addRemoveLinks: true,
    headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
    },
    acceptedFiles: 'audio/*',
    sending: function(file, xhr, formData) {
        formData.append('folder', 'audio');
    },
    success: function(file, response) {
        if (file.previewElement) {
            file.previewElement.classList.add("dz-success");
        }
        
        // Set the value of the hidden input field for each audio file
        const hiddenInputsContainer = file.previewElement.closest('form').querySelector('.hidden-inputs');
        hiddenInputsContainer.innerHTML +=
            `<input type="hidden" name="title[]" value="${file.name}" data-path="${response.path}">` +
            `<input type="hidden" name="audio[]" value="${response.path}">`;
    },
    removedfile: function(file) {
        const hiddenInputsContainer = file.previewElement.closest('form').querySelector('.hidden-inputs');
        hiddenInputsContainer.querySelectorAll(`input[data-path="${file.previewElement.dataset.path}"]`).forEach(el => el.remove());

        if (file.previewElement != null && file.previewElement.parentNode != null) {
            file.previewElement.parentNode.removeChild(file.previewElement);
        }

        $.ajax({
            url: '{{ route("file.delete") }}',
            method: 'delete',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            data: {
                path: file.previewElement.dataset.path
            },
            success: function() {}
        });

        return this._updateMaxFilesReachedClass();
    }
});


    });
</script>
