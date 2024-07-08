<!-- resources/views/edit_footer_quick_section_modal.blade.php -->
<div class="modal fade" id="headerfeedsection{{ $language->id }}" tabindex="-1" aria-hidden="true">
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
                                <h6>No Stories found</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="no_stories_found" placeholder="No Stories found">
                            </div>
                        </div>
                    
                        <!-- Latest Feeds -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Latest Feeds</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="latest_feeds" placeholder="Latest Feeds">
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
                    
                        <!-- Greeting & Wishes -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Greeting & Wishes</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="greeting_wishes" placeholder="Greeting & Wishes">
                            </div>
                        </div>
                    
                        <!-- In development -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>In development</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="in_development" placeholder="In development">
                            </div>
                        </div>
                    
                        <!-- Will be soon available -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Will be soon available</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="soon_available" placeholder="Will be soon available">
                            </div>
                        </div>
                    
                        <!-- Latest history -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Latest history</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="latest_history" placeholder="Latest history">
                            </div>
                        </div>
                    
                        <!-- Latest Vote -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Latest Vote</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="latest_vote" placeholder="Latest Vote">
                            </div>
                        </div>
                    
                        <!-- Post Comment -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Post Comment</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="post_comment" placeholder="Post Comment">
                            </div>
                        </div>
                    
                        <!-- Like -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Like</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="like" placeholder="Like">
                            </div>
                        </div>
                    
                        <!-- Replay -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Replay</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="replay" placeholder="Replay">
                            </div>
                        </div>
                    
                        <!-- Report the comment -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Report the comment</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="report_comment" placeholder="Report the comment">
                            </div>
                        </div>
                    
                        <!-- Show more -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Show more</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="show_more" placeholder="Show more">
                            </div>
                        </div>
                    
                        <!-- I want to see more Feeds from this Member -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>I want to see more Feeds from this Member</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="see_more_feeds" placeholder="I want to see more Feeds from this Member">
                            </div>
                        </div>
                    
                        <!-- Show less -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Show less</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="show_less" placeholder="Show less">
                            </div>
                        </div>
                    
                        <!-- I want to see less Feeds from this Member -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>I want to see less Feeds from this Member</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="see_less_feeds" placeholder="I want to see less Feeds from this Member">
                            </div>
                        </div>
                    
                        <!-- Save the Feed -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Save the Feed</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="save_feed" placeholder="Save the Feed">
                            </div>
                        </div>
                    
                        <!-- Add to Collection -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Add to Collection</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="add_to_collection" placeholder="Add to Collection">
                            </div>
                        </div>
                    
                        <!-- Active Notification -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Active Notification</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="active_notification" placeholder="Active Notification">
                            </div>
                        </div>
                    
                        <!-- Get message when User Publish Feed -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Get message when User Publish Feed</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="get_message_publish_feed" placeholder="Get message when User Publish Feed">
                            </div>
                        </div>
                    
                        <!-- Hide Feed from this User -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Hide Feed from this User</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="hide_feed_from_user" placeholder="Hide Feed from this User">
                            </div>
                        </div>
                    
                        <!-- Lorem Ipsum dolor sit amet consectetur -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Lorem Ipsum dolor sit amet consectetur</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Lorem_Ipsum" placeholder="Lorem Ipsum dolor sit amet consectetur">
                            </div>
                        </div>
                    
                        <!-- Report this Feed -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Report this Feed</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="report_this_feed" placeholder="Report this Feed">
                            </div>
                        </div>
                    
                        <!-- Share on YekBun -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Share on YekBun</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="share_yekbun" placeholder="Share on YekBun">
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
                    
                        <!-- Friend -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Friend</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="friend" placeholder="Friend">
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
                    
                        <!-- Enter the Description -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Enter the Description</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="enter_description" placeholder="Enter the Description">
                            </div>
                        </div>
                    
                        <!-- Create Feed -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Create Feed</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="create_feed" placeholder="Create Feed">
                            </div>
                        </div>
                    
                        <!-- Select Feed background -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Select Feed background</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="select_background" placeholder="Select Feed background">
                            </div>
                        </div>
                    
                        <!-- Select Font Color -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Select Font Color</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="select_font_color" placeholder="Select Font Color">
                            </div>
                        </div>
                    
                        <!-- Select a Service -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Select a Service</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="select_service" placeholder="Select a Service">
                            </div>
                        </div>
                    
                        <!-- Search -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Search</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="search" placeholder="Search">
                            </div>
                        </div>
                    
                        <!-- Newest -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Newest</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="newest" placeholder="Newest">
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
                    
                        <!-- Must Viewed -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Must Viewed</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="must_viewed" placeholder="Must Viewed">
                            </div>
                        </div>
                    
                        <!-- Done -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Done</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="done" placeholder="Done">
                            </div>
                        </div>
                    
                        <!-- No Data found -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>No Data found</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="no_data_found" placeholder="No Data found">
                            </div>
                        </div>
                    
                        <!-- My Collection -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>My Collection</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="my_collection" placeholder="My Collection">
                            </div>
                        </div>
                    
                        <!-- No Collection -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>No Collection</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="no_collection" placeholder="No Collection">
                            </div>
                        </div>
                    
                        <!-- Create Collection -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Create Collection</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="create_collection" placeholder="Create Collection">
                            </div>
                        </div>
                    
                        <!-- Enter new Playlist name -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Enter new Playlist name</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="new_playlist_name" placeholder="Enter new Playlist name">
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
