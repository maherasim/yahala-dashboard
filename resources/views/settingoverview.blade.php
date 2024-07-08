<!-- resources/views/edit_footer_quick_section_modal.blade.php -->
<div class="modal fade" id="settingoverview{{ $language->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Edit Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('languages.settingOverviewSection') }}" method="POST">
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
                                <h6>Setting Overview</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="setting_overview" placeholder="Setting Overview">
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
                    
                        <!-- Settings -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Settings</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="settings" placeholder="Settings">
                            </div>
                        </div>
                    
                        <!-- My Profile -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>My Profile</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="my_profile" placeholder="My Profile">
                            </div>
                        </div>
                    
                        <!-- My Channels -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>My Channels</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="my_channels" placeholder="My Channels">
                            </div>
                        </div>
                    
                        <!-- Shortcut -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Shortcut</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="shortcut" placeholder="Shortcut">
                            </div>
                        </div>
                    
                        <!-- Collection -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Collection</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="collection" placeholder="Collection">
                            </div>
                        </div>
                    
                        <!-- View later -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>View later</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="view_later" placeholder="View later">
                            </div>
                        </div>
                    
                        <!-- Market -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Market</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="market" placeholder="Market">
                            </div>
                        </div>
                    
                        <!-- Manage my Items -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Manage my Items</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="manage_items" placeholder="Manage my Items">
                            </div>
                        </div>
                    
                        <!-- Add -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Add</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="add" placeholder="Add">
                            </div>
                        </div>
                    
                        <!-- Manage my Adds -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Manage my Adds</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="manage_ads" placeholder="Manage my Adds">
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
                    
                        <!-- Manage Notifications -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Manage Notifications</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="manage_notifications" placeholder="Manage Notifications">
                            </div>
                        </div>
                    
                        <!-- Password -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Password</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="password" placeholder="Password">
                            </div>
                        </div>
                    
                        <!-- Manage my Password -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Manage my Password</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="manage_password" placeholder="Manage my Password">
                            </div>
                        </div>
                    
                        <!-- E-mail -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>E-mail</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="email" placeholder="E-mail">
                            </div>
                        </div>
                    
                        <!-- Change my E-Mail -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Change my E-Mail</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="change_email" placeholder="Change my E-Mail">
                            </div>
                        </div>
                    
                        <!-- Ringtone -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Ringtone</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="ringtone" placeholder="Ringtone">
                            </div>
                        </div>
                    
                        <!-- Manage Ringtone -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Manage Ringtone</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="manage_ringtone" placeholder="Manage Ringtone">
                            </div>
                        </div>
                    
                        <!-- Music -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Music</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="music" placeholder="Music">
                            </div>
                        </div>
                    
                        <!-- manage the Player -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>manage the Player</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="manage_player" placeholder="manage the Player">
                            </div>
                        </div>
                    
                        <!-- Network -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Network</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="network" placeholder="Network">
                            </div>
                        </div>
                    
                        <!-- Manange Connections -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Manange Connections</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="manage_connections" placeholder="Manange Connections">
                            </div>
                        </div>
                    
                        <!-- Documentation -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Documentation</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="documentation" placeholder="Documentation">
                            </div>
                        </div>
                    
                        <!-- My Documents -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>My Documents</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="my_documents" placeholder="My Documents">
                            </div>
                        </div>
                    
                        <!-- Stoarage -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Stoarage</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="stoarage" placeholder="Stoarage">
                            </div>
                        </div>
                    
                        <!-- Managae Storage -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Managae Storage</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="manage_storage" placeholder="Managae Storage">
                            </div>
                        </div>
                    
                        <!-- Violate -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Violate</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="violate" placeholder="Violate">
                            </div>
                        </div>
                    
                        <!-- Manage my Reels -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Manage my Reels</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="manage_reels" placeholder="Manage my Reels">
                            </div>
                        </div>
                    
                        <!-- My Channels -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>My Channels</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="my_channels_2" placeholder="My Channels">
                            </div>
                        </div>
                    
                        <!-- In Development -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>In Development</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="in_development_2" placeholder="In Development">
                            </div>
                        </div>
                    
                        <!-- Will be soon available -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Will be soon available</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="soon_available_2" placeholder="Will be soon available">
                            </div>
                        </div>
                    
                        <!-- Stadnard -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Stadnard</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="stadnard" placeholder="Stadnard">
                            </div>
                        </div>
                    
                        <!-- Upgrade your account -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Upgrade your account</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="upgrade_account" placeholder="Upgrade your account">
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
