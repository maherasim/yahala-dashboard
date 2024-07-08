<!-- resources/views/edit_footer_quick_section_modal.blade.php -->
<div class="modal fade" id="headermusic{{ $language->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Edit Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('languages.headermusicsection') }}" method="POST">
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
                                <h6>New Albums</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="new_albums" placeholder="New Albums">
                            </div>
                        </div>
                    
                        <!-- Latest Videos -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Latest Videos</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="latest_videos" placeholder="Latest Videos">
                            </div>
                        </div>
                    
                        <!-- New Artist -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>New Artist</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="new_artist" placeholder="New Artist">
                            </div>
                        </div>
                    
                        <!-- Latest Stream -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Latest Stream</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="latest_stream" placeholder="Latest Stream">
                            </div>
                        </div>
                    
                        <!-- Latest Songs -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Latest Songs</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="latest_songs" placeholder="Latest Songs">
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
                    
                        <!-- History -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>History</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="history" placeholder="History">
                            </div>
                        </div>
                    
                        <!-- Invoice -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Invoice</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="invoice" placeholder="Invoice">
                            </div>
                        </div>
                    
                        <!-- Purchase -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Purchase</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="purchase" placeholder="Purchase">
                            </div>
                        </div>
                    
                        <!-- My Invoice -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>My Invoice</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="my_invoice" placeholder="My Invoice">
                            </div>
                        </div>
                    
                        <!-- Music History -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Music History</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="music_history" placeholder="Music History">
                            </div>
                        </div>
                    
                        <!-- My Purchase -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>My Purchase</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="my_purchase" placeholder="My Purchase">
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
                    
                        <!-- Share with Friends -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Share with Friends</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="share_with_friends" placeholder="Share with Friends">
                            </div>
                        </div>
                    
                        <!-- Move to other Playlist -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Move to other Playlist</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="move_to_playlist" placeholder="Move to other Playlist">
                            </div>
                        </div>
                    
                        <!-- Save -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Save</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="save" placeholder="Save">
                            </div>
                        </div>
                    
                        <!-- Remove from Playlist -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Remove from Playlist</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="remove_from_playlist" placeholder="Remove from Playlist">
                            </div>
                        </div>
                    
                        <!-- Categorys -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Categorys</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="categorys" placeholder="Categorys">
                            </div>
                        </div>
                    
                        <!-- Popular Songs -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Popular Songs</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="popular_songs" placeholder="Popular Songs">
                            </div>
                        </div>
                    
                        <!-- Latest Uploads -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Latest Uploads</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="latest_uploads" placeholder="Latest Uploads">
                            </div>
                        </div>
                    
                        <!-- New Artist -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>New Artist</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="new_artist_2" placeholder="New Artist">
                            </div>
                        </div>
                    
                        <!-- Artist -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Artist</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="artist" placeholder="Artist">
                            </div>
                        </div>
                    
                        <!-- Songs -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Songs</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="songs" placeholder="Songs">
                            </div>
                        </div>
                    
                        <!-- Albums -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Albums</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="albums" placeholder="Albums">
                            </div>
                        </div>
                    
                        <!-- Video Clip -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Video Clip</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="video_clip" placeholder="Video Clip">
                            </div>
                        </div>
                    
                        <!-- New Album -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>New Album</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="new_album" placeholder="New Album">
                            </div>
                        </div>
                    
                        <!-- Albums -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Albums</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="albums_2" placeholder="Albums">
                            </div>
                        </div>
                    
                        <!-- My Playlist -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>My Playlist</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="my_playlist" placeholder="My Playlist">
                            </div>
                        </div>
                    
                        <!-- Playlist -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Playlist</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="playlist" placeholder="Playlist">
                            </div>
                        </div>
                    
                        <!-- Need more Playlist -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Need more Playlist</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="need_more_playlist" placeholder="Need more Playlist">
                            </div>
                        </div>
                    
                        <!-- Buy new Playlist -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Buy new Playlist</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="buy_new_playlist" placeholder="Buy new Playlist">
                            </div>
                        </div>
                    
                        <!-- Options -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Options</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="options_2" placeholder="Options">
                            </div>
                        </div>
                    
                        <!-- Create New Playlist -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Create New Playlist</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="create_new_playlist" placeholder="Create New Playlist">
                            </div>
                        </div>
                    
                        <!-- Enter new Playlist Name -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Enter new Playlist Name</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="enter_new_playlist_name" placeholder="Enter new Playlist Name">
                            </div>
                        </div>
                    
                        <!-- Select -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Select</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="select" placeholder="Select">
                            </div>
                        </div>
                    
                        <!-- Private -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Private</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="private" placeholder="Private">
                            </div>
                        </div>
                    
                        <!-- Public -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Public</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="public" placeholder="Public">
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
                    
                        <!-- Family -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Family</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="family" placeholder="Family">
                            </div>
                        </div>
                    
                        <!-- Create -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Create</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="create" placeholder="Create">
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
