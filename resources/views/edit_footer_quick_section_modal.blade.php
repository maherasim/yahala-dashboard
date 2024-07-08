<!-- resources/views/edit_footer_quick_section_modal.blade.php -->
<div class="modal fade" id="footerQuickSectionModal{{ $language->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Edit Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('languages.footerquicklauncher') }}" method="POST">
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
                                <h6>U Have a Restaurants?</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control"
                                    name="restorent"
                                    placeholder="-	U Have a Restaurants?">
                            </div>
                        </div>

                        <!-- -	Food Pickup -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>- Food Pickup</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control"
                                    name="food_pickup" placeholder="-	Food Pickup">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Introduce your Business or ideas</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control"
                                    name="busineess_ideas"
                                    placeholder="	Business Ideas">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Services</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control"
                                    name="services" placeholder="Services">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Fan Page</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control"
                                    name="fan_page" placeholder="Fan Page">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Onlineship</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control"
                                    name="online_ship" placeholder="online_ship">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Order your Meal</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control"
                                    name="order_meal" placeholder="Order your Meal">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Book a Table</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control"
                                    name="book_table" placeholder="Book a Table">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Share Emotions</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control"
                                    name="emotions" placeholder="Share Emotions">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Greating</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control"
                                    name="emotions" placeholder="Share Emotions">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Pray</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control"
                                    name="pray"
                                    placeholder="Let your Order Delivered">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Past Away</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control"
                                    name="past_away" placeholder="Past Away">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>+ Shops</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control"
                                    name="shops"
                                    placeholder="Let your Order Delivered">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Fast Sharing</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control"
                                    name="fast_sharing" placeholder="Fast Sharing">
                            </div>
                        </div>

                        <!-- Go To -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Go To</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control"
                                    name="go_to" placeholder="Go To">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Options</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control"
                                    name="options" placeholder="Options">
                            </div>
                        </div>

                        <!-- Current Notifications -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Current Notifications</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control"
                                    name="current_notifications"
                                    placeholder="Current Notifications">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Notifications</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control"
                                    name="notifications"
                                    placeholder="Notifications">
                            </div>
                        </div>

                        <!-- Fanpage -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Fanpage</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control"
                                    name="fanpage" placeholder="Fanpage">
                            </div>
                        </div>

                        <!-- Onlineshop -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Onlineshop</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control"
                                    name="onlineshop" placeholder="Onlineshop">
                            </div>
                        </div>
                        <!-- Remember me and Forget Password -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Remember me</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" name="remember_me"> Remember
                                me

                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <h6>Repeat Password</h6>
                                </div>
                                <div class="col-md-6">
                                    <input type="password" class="form-control"
                                        name="repeat_password"
                                        placeholder="Repeat Password">
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="submit"
                                    class="btn btn-label-secondary"
                                    data-bs-dismiss="modal">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
