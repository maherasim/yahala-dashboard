<!-- resources/views/edit_footer_quick_section_modal.blade.php -->
<div class="modal fade" id="footerchatsection{{ $language->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Edit Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('languages.headerfeedsection') }}" method="POST">
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
                            <div class="col-md-6">
                                <h6>Bazar Chat</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="bazar_chat" placeholder="Bazar Chat">
                            </div>
                        </div>
                    
                        <!-- Shop Chat -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Shop Chat</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="shop_chat" placeholder="Shop Chat">
                            </div>
                        </div>
                    
                        <!-- Service Chat -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Service Chat</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="service_chat" placeholder="Service Chat">
                            </div>
                        </div>
                    
                        <!-- Friends Chat -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Friends Chat</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="friends_chat" placeholder="Friends Chat">
                            </div>
                        </div>
                    
                        <!-- Family Chat -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Family Chat</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="family_chat" placeholder="Family Chat">
                            </div>
                        </div>
                    
                        <!-- Group Chat -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Group Chat</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="group_chat" placeholder="Group Chat">
                            </div>
                        </div>
                    
                        <!-- Notifications -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Notifications</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="notifications" placeholder="Notifications">
                            </div>
                        </div>
                    
                        <!-- FanPage Chat -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>FanPage Chat</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="fanpage_chat" placeholder="FanPage Chat">
                            </div>
                        </div>
                    
                        <!-- Wishes Chat -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Wishes Chat</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="wishes_chat" placeholder="Wishes Chat">
                            </div>
                        </div>
                    
                        <!-- Favorite Contacts -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Favorite Contacts</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="favorite_contacts" placeholder="Favorite Contacts">
                            </div>
                        </div>
                    
                        <!-- My Groups -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>My Groups</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="my_groups" placeholder="My Groups">
                            </div>
                        </div>
                    
                        <!-- Coming Soon -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Coming Soon</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="coming_soon" placeholder="Coming Soon">
                            </div>
                        </div>
                    
                        <!-- Chat Overview -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Chat Overview</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="chat_overview" placeholder="Chat Overview">
                            </div>
                        </div>
                    
                        <!-- New Messages -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>New Messages</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="new_messages" placeholder="New Messages">
                            </div>
                        </div>
                    
                        <!-- Options -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Options</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="options" placeholder="Options">
                            </div>
                        </div>
                    
                        <!-- Block User -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Block User</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="block_user" placeholder="Block User">
                            </div>
                        </div>
                    
                        <!-- Unblocked -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Unblocked</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="unblocked" placeholder="Unblocked">
                            </div>
                        </div>
                    
                        <!-- Block -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Block</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="block" placeholder="Block">
                            </div>
                        </div>
                    
                        <!-- Report user -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Report user</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="report_user" placeholder="Report user">
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
