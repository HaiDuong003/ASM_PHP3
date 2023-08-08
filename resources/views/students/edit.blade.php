@extends('templates.layout')
@section('content')
    <form action="{{ route('edit-student', ['id' => request()->route('id')]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Card -->
        <div id="addUserStepProfile" class="card card-lg active">
            <!-- Body -->
            <div class="card-body">
                <!-- Form Group -->
                <div class="row form-group">
                    <label class="col-sm-3 col-form-label input-label">Avatar</label>

                    <div class="col-sm-9">
                        <div class="d-flex align-items-center">
                            <!-- Avatar -->
                            <label class="avatar avatar-xl avatar-circle avatar-uploader mr-5" for="avatarUploader">
                                <img id="avatarImg" class="avatar-img"
                                    src="{{ $studentEdit->image ? Storage::url($studentEdit->image) : '' }}"
                                    alt="Image Description">

                                <input type="file" name="image" class="js-file-attach avatar-uploader-input"
                                    id="avatarUploader"
                                    data-hs-file-attach-options="{
                            &quot;textTarget&quot;: &quot;#avatarImg&quot;,
                            &quot;mode&quot;: &quot;image&quot;,
                            &quot;targetAttr&quot;: &quot;src&quot;,
                            &quot;resetTarget&quot;: &quot;.js-file-attach-reset-img&quot;,
                            &quot;resetImg&quot;: &quot;./assets/img/160x160/img1.jpg&quot;,
                            &quot;allowTypes&quot;: [&quot;.png&quot;, &quot;.jpeg&quot;, &quot;.jpg&quot;]
                            }">
                                <span class="avatar-uploader-trigger">
                                    <i class="tio-edit avatar-uploader-icon shadow-soft"></i>
                                </span>
                            </label>
                            <!-- End Avatar -->

                            <button type="button" class="js-file-attach-reset-img btn btn-white">Delete</button>
                        </div>
                    </div>
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="row form-group">
                    <label for="firstNameLabel" class="col-sm-3 col-form-label input-label">Name<i
                            class="tio-help-outlined text-body ml-1"></i></label>
                    <div class="col-sm-9">
                        <div class="input-group input-group-sm-down-break">
                            <input value="{{ $studentEdit->name }}" type="text" class="form-control" name="name"
                                placeholder="Name...">
                        </div>
                    </div>
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <label>Gender</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="1"
                        {{ $studentEdit->gender == '1' ? 'checked' : '' }}>
                    <label class="form-check-label">
                        Nam
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" value="2"
                        {{ $studentEdit->gender == '2' ? 'checked' : '' }}>
                    <label class="form-check-label">
                        Nu
                    </label>
                </div>
                <!-- End Form Group -->
                <!-- Form Group -->
                <div class="row form-group">
                    <label for="emailLabel" class="col-sm-3 col-form-label input-label">Phone</label>
                    <div class="col-sm-9">
                        <input value="{{ $studentEdit->phone }}" type="text" class="form-control" name="phone"
                            placeholder="Phone">
                    </div>
                </div>
                <!-- End Form Group -->
                <!-- Form Group -->
                <div class="row form-group">
                    <label for="emailLabel" class="col-sm-3 col-form-label input-label">Address</label>
                    <div class="col-sm-9">
                        <input value="{{ $studentEdit->address }}" type="text" class="form-control" name="address"
                            placeholder="Address">
                    </div>
                </div>
                <!-- End Form Group -->
            </div>
            <!-- End Body -->

            <!-- Footer -->
            <div class="card-footer d-flex justify-content-end align-items-center">
                <input type="submit" class="btn btn-primary" value="EDIT">
            </div>
            <!-- End Footer -->
        </div>
        <!-- End Card -->
    </form>
@endsection
