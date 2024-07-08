<!-- resources/views/edit_footer_quick_section_modal.blade.php -->
<div class="modal fade" id="footercart{{ $language->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Edit Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('languages.footercart') }}" method="POST">
                    @csrf
                    <input type="hidden" name="language_id" value="{{ $language->id }}">
                    
                   <!-- My Cart Section -->
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
        <div class="col-md-12">
            <h3>My Cart</h3>
        </div>
    </div>
    <!-- Music Cart -->
    <div class="row mt-2">
        <div class="col-md-6">
            <h6>Music Cart</h6>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" name="music_cart" placeholder="My Music Cart">
        </div>
    </div>
    <!-- Video Cart -->
    <div class="row mt-2">
        <div class="col-md-6">
            <h6>Video Cart</h6>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" name="video_cart" placeholder="My Video Cart">
        </div>
    </div>
    <!-- Bazar Cart -->
    <div class="row mt-2">
        <div class="col-md-6">
            <h6>Bazar Cart</h6>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" name="bazar_cart" placeholder="My Bazar Cart">
        </div>
    </div>
    <!-- Event Cart -->
    <div class="row mt-2">
        <div class="col-md-6">
            <h6>Event Cart</h6>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" name="event_cart" placeholder="My Event Cart">
        </div>
    </div>
    <!-- Shop Cart -->
    <div class="row mt-2">
        <div class="col-md-6">
            <h6>Shop Cart</h6>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" name="shop_cart" placeholder="My Shop Cart">
        </div>
    </div>
    <!-- Service Cart -->
    <div class="row mt-2">
        <div class="col-md-6">
            <h6>Service Cart</h6>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" name="service_cart" placeholder="My Service Cart">
        </div>
    </div>
    <!-- Wishes Cart -->
    <div class="row mt-2">
        <div class="col-md-6">
            <h6>Wishes Cart</h6>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" name="wishes_cart" placeholder="My Wishes Cart">
        </div>
    </div>
    <!-- Donate -->
    <div class="row mt-2">
        <div class="col-md-6">
            <h6>Donate</h6>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" name="donate" placeholder="My Donation Cart">
        </div>
    </div>
    <!-- Portal Cart -->
    <div class="row mt-2">
        <div class="col-md-6">
            <h6>Portal Cart</h6>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" name="portal_cart" placeholder="My Portal cart">
        </div>
    </div>
    <!-- Select the payment Method -->
    <div class="row mt-2">
        <div class="col-md-6">
            <h6>Select the payment Method</h6>
        </div>
        <div class="col-md-6">
            <select class="form-control" name="payment_method">
                <option value="" disabled selected>Select your payment method</option>
                <option value="credit_card">Credit Card</option>
                <option value="paypal">PayPal</option>
                <option value="bank_transfer">Bank Transfer</option>
            </select>
        </div>
    </div>
    <!-- Accept policy and terms -->
    <div class="row mt-2">
        <div class="col-md-6">
            <h6>Accept policy and terms</h6>
        </div>
        <div class="col-md-6">
            <input type="checkbox" name="accept_policy_terms"> I accept the policy and terms
        </div>
    </div>
    <!-- Office Information will Shared in your Invoice -->
    <div class="row mt-2">
        <div class="col-md-6">
            <h6>Office Information will Shared in your Invoice</h6>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" name="office_information" placeholder="Office Information">
        </div>
    </div>
    <!-- Bank Information will Shared in your Invoice -->
    <div class="row mt-2">
        <div class="col-md-6">
            <h6>Bank Information will Shared in your Invoice</h6>
        </div>
        <div class="col-md-6">
            <input type="text" class="form-control" name="bank_information" placeholder="Bank Information">
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
