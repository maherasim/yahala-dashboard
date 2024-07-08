<!-- resources/views/edit_footer_quick_section_modal.blade.php -->
<div class="modal fade" id="myprofileoffice{{ $language->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Edit Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('languages.myProfileOfficeSection') }}" method="POST">
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

<div class="row ">
    <div class="col-md-6">
        <h6>Standard</h6>
    </div>
    <div class="col-md-6">
        <input type="text" class="form-control" name="standard" placeholder="Standard">
    </div>
</div>

<!-- Upgrade your account -->
<div class="row mt-2">
    <div class="col-md-6 offset-md-6">
        <input type="text" class="form-control" name="upgrade_account" placeholder="Upgrade your account">
    </div>
</div>

<!-- My Fanpage -->
<div class="row mt-2">
    <div class="col-md-6">
        <h6>My Fanpage</h6>
    </div>
    <div class="col-md-6">
        <input type="text" class="form-control" name="my_fanpage" placeholder="My Fanpage">
    </div>
</div>

<!-- New Violate -->
<div class="row mt-2">
    <div class="col-md-6">
        <h6>New Violate</h6>
    </div>
    <div class="col-md-6">
        <input type="text" class="form-control" name="new_violate" placeholder="New Violate">
    </div>
</div>

<!-- You get Flag -->
<div class="row mt-2">
    <div class="col-md-6 offset-md-6">
        <input type="text" class="form-control" name="you_get_flag" placeholder="You get Flag">
    </div>
</div>

<!-- Reason -->
<div class="row mt-2">
    <div class="col-md-6 offset-md-6">
        <input type="text" class="form-control" name="reason" placeholder="Reason">
    </div>
</div>

<!-- Closed Violate -->
<div class="row mt-2">
    <div class="col-md-6 offset-md-6">
        <input type="text" class="form-control" name="closed_violate" placeholder="Closed Violate">
    </div>
</div>

<!-- My Fanpage (Channel) -->
<div class="row mt-2">
    <div class="col-md-6">
        <h6>My Fanpage (Channel)</h6>
    </div>
    <div class="col-md-6">
        <input type="text" class="form-control" name="my_fanpage_channel" placeholder="My Fanpage (Channel)">
    </div>
</div>

<!-- Owner -->
<div class="row mt-2">
    <div class="col-md-6 offset-md-6">
        <input type="text" class="form-control" name="owner" placeholder="Owner">
    </div>
</div>

<!-- Follower -->
<div class="row mt-2">
    <div class="col-md-6 offset-md-6">
        <input type="text" class="form-control" name="follower" placeholder="Follower">
    </div>
</div>

<!-- Member -->
<div class="row mt-2">
    <div class="col-md-6 offset-md-6">
        <input type="text" class="form-control" name="member" placeholder="Member">
    </div>
</div>

<!-- Our Document -->
<div class="row mt-2">
    <div class="col-md-6">
        <h6>Our Document</h6>
    </div>
    <div class="col-md-6">
        <input type="text" class="form-control" name="our_document" placeholder="Our Document">
    </div>
</div>

<!-- See All -->
<div class="row mt-2">
    <div class="col-md-6 offset-md-6">
        <input type="text" class="form-control" name="see_all_document" placeholder="See All">
    </div>
</div>

<!-- Statics -->
<div class="row mt-2">
    <div class="col-md-6">
        <h6>Statics</h6>
    </div>
    <div class="col-md-6">
        <input type="text" class="form-control" name="statics" placeholder="Statics">
    </div>
</div>

<!-- My Storage -->
<div class="row mt-2">
    <div class="col-md-6">
        <h6>My Storage</h6>
    </div>
    <div class="col-md-6">
        <input type="text" class="form-control" name="my_storage" placeholder="My Storage">
    </div>
</div>

<!-- Used -->
<div class="row mt-2">
    <div class="col-md-6 offset-md-6">
        <input type="text" class="form-control" name="used_storage" placeholder="Used">
    </div>
</div>

<!-- Free -->
<div class="row mt-2">
    <div class="col-md-6 offset-md-6">
        <input type="text" class="form-control" name="free_storage" placeholder="Free">
    </div>
</div>

<!-- My Wishes -->
<div class="row mt-2">
    <div class="col-md-6">
        <h6>My Wishes</h6>
    </div>
    <div class="col-md-6">
        <input type="text" class="form-control" name="my_wishes" placeholder="My Wishes">
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
