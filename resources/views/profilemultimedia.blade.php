<!-- resources/views/edit_footer_quick_section_modal.blade.php -->
<div class="modal fade" id="profilemultimedia{{ $language->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Edit Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('languages.myProfileMultimedia') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="language_id" value="{{ $language->id }}">

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
        <h6>Photo gallery</h6>
    </div>
    <div class="col-md-6">
        <input type="file" class="form-control" name="photo_gallery" placeholder="Photo gallery">
    </div>
</div>

 
 
<!-- Video gallery -->
<div class="row mt-2">
    <div class="col-md-6">
        <h6>Video gallery</h6>
    </div>
    <div class="col-md-6">
        <input type="file" class="form-control" name="video_gallery" placeholder="Video gallery">
    </div>
</div>

 
<!-- My Playlist -->
<div class="row mt-2">
    <div class="col-md-6">
        <h6>My Playlist</h6>
    </div>
    <div class="col-md-6">
        <input type="file" class="form-control" name="my_playlist" placeholder="My Playlist">
    </div>
</div>

 
 
<!-- My Artist -->
<div class="row mt-2">
    <div class="col-md-6">
        <h6>My Artist</h6>
    </div>
    <div class="col-md-6">
        <input type="text" class="form-control" name="my_artist" placeholder="My Artist">
    </div>
</div>

 

<!-- Must listen -->
<div class="row mt-2">
    <div class="col-md-6">
        <h6>Must listen</h6>
    </div>
    <div class="col-md-6">
        <input type="text" class="form-control" name="must_listen" placeholder="Must listen">
    </div>
</div>
 
<div class="row mt-2">
    <div class="col-md-6">
        <h6>My Subscribes</h6>
    </div>
    <div class="col-md-6">
        <input type="text" class="form-control" name="my_subscribes" placeholder="My Subscribes">
    </div>
</div>
 
<div class="modal-footer">
    <button type="submit"
        class="btn btn-label-secondary"
        data-bs-dismiss="modal">Save</button>
</div>
 </div>

                </form>
            </div>
        </div>
    </div>
</div>
