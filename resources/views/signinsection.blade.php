<div class="modal fade" id="signinsection__1{{ $language->id }}" tabindex="-1"
    aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Edit
                    {{-- <span class="text-info">{{ $language->title }}</span> --}}
                    Section</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('languages.signinsection') }}"
                    method="POST">
                    @csrf
                    <input type="hidden" name="language_id"
                        value="{{ $language->id }}">
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
                                <h6>E-mail</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control"
                                    name="email" placeholder="E-Mail">
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <h6>Password</h6>
                            </div>
                            <div class="col-md-6">
                                <input type="password" class="form-control"
                                    name="password" placeholder="Password">
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
                </form>
            </div>
        </div>
    </div>




</div>