<div class="container light-style flex-grow-1 container-p-y">

    <h4 class="font-weight-bold py-3 mb-4">
        Account settings
    </h4>

    <div class="card overflow-hidden">
        <div class="row no-gutters row-bordered row-border-light">
            <div class="col-md-3 pt-0">
                <div class="list-group list-group-flush account-settings-links">
                    <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">General</a>
                    <a class="list-group-item list-group-item-action" data-toggle="list"
                       href="#account-change-password">Change password</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="account-general">
                        <div class="card-body media align-items-center">
                            <img src="/assets/images/default-avatar.png" alt=""
                                 class="d-block ui-w-80">
                            <div class="media-body mt-3">
                                <label class="btn btn-outline-primary">
                                    Upload new photo
                                    <input type="file" class="account-settings-fileinput">
                                </label> &nbsp;
                                <button type="button" class="btn btn-default md-btn-flat">Reset</button>

                                <div class="small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
                            </div>
                        </div>
                        <hr class="border-light m-0">

                        <div class="card-body">
                            <div class="col-12 position-relative mb-3">
                                <label for="email" class="form-label">Full Name
                                    <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="full_name" id="full_name"
                                       placeholder="" required>
                            </div>
                            <div class="col-12 position-relative mb-3">
                                <label for="email" class="form-label">Username
                                    <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="username" id="username"
                                       value="" required>
                            </div>
                            <div class="col-12 position-relative mb-3">
                                <label for="email" class="form-label">Email <span class="subText"> ( Cannot Change Your Email Right Now )</span>
                                </label>
                                <input type="text" class="form-control border-0" value="example@gmail.com" name="email"
                                       id="email" readonly>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="account-change-password">
                        <div class="card-body pb-2 d-flex flex-column gap-3">

                            <div class="form-group">
                                <label class="form-label">Current password</label>
                                <input type="password" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="form-label">New password</label>
                                <input type="password" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Repeat new password</label>
                                <input type="password" class="form-control">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-right mt-3">
        <button type="button" class="btn btn-primary">Save changes</button>&nbsp;
        <button type="button" class="btn btn-default">Cancel</button>
    </div>

</div>