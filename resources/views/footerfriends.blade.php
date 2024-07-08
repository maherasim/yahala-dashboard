<!-- resources/views/edit_footer_quick_section_modal.blade.php -->
<div class="modal fade" id="footerfriendssection{{ $language->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Edit Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('languages.footerfriendsection') }}" method="POST">
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

    <div class="row">
        <div class="row mt-2">
            <div class="col-md-6">
                <h6>Friends Online</h6>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" name="friends_online" placeholder="Friends Online">
            </div>
        </div>
    </div>
    <!-- User you may know -->
    <div class="row mt-2">
        <div class="col-md-6">
            <h6>User you may know</h6>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" name="user_you_may_know" placeholder="User you may know">
        </div>
    </div>
    <!-- See all -->
    <div class="row mt-2">
        <div class="col-md-6">
            <h6>See all</h6>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" name="see_all" placeholder="See all">
        </div>
    </div>
    <!-- Friends request -->
    <div class="row mt-2">
        <div class="col-md-6">
            <h6>Friends request</h6>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" name="friends_request" placeholder="Friends request">
        </div>
    </div>
    <!-- Search for Friends -->
    <div class="row mt-2">
        <div class="col-md-6">
            <h6>Search for Friends</h6>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" name="search_friends" placeholder="Search for Friends">
        </div>
    </div>
    <!-- Friends -->
    <div class="row mt-2">
        <div class="col-md-6">
            <h6>Friends</h6>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" name="friends" placeholder="Friends">
        </div>
    </div>
    <!-- No Record found -->
    <div class="row mt-2">
        <div class="col-md-6">
            <h6>No Record found</h6>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" name="no_record_found" placeholder="No Record found">
        </div>
    </div>
    <!-- Search for Family -->
    <div class="row mt-2">
        <div class="col-md-6">
            <h6>Search for Family</h6>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" name="search_family" placeholder="Search for Family">
        </div>
    </div>
    <!-- Family -->
    <div class="row mt-2">
        <div class="col-md-6">
            <h6>Family</h6>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" name="family" placeholder="Family">
        </div>
    </div>
    <!-- No Family member found -->
    <div class="row mt-2">
        <div class="col-md-6">
            <h6>No Family member found</h6>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" name="no_family_member_found" placeholder="No Family member found">
        </div>
    </div>
    <!-- Search for User -->
    <div class="row mt-2">
        <div class="col-md-6">
            <h6>Search for User</h6>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" name="search_user" placeholder="Search for User">
        </div>
    </div>
    <!-- No Friend and Family member found -->
    <div class="row mt-2">
        <div class="col-md-6">
            <h6>No Friend and Family member found</h6>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" name="no_friend_family_found" placeholder="No Friend and Family member found">
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
