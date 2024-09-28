@extends('admin_layout')
@section('content_admin')
<div class="page-content">

    <!-- Start Container xxl -->
    <div class="container-xxl">

        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="bg-primary profile-bg rounded-top position-relative mx-n3 mt-n3">
                            <img src="{{asset('public/uploads/profile/admin_profile.png')}}" alt="" class="avatar-xl border border-light border-3 rounded-circle position-absolute top-100 start-0 translate-middle ms-5">
                        </div>
                        <div class="mt-5 d-flex flex-wrap align-items-center justify-content-between">
                            <div>
                                <h4 class="mb-1">
                                    <?php

                                    use Illuminate\Support\Facades\Session;

                                    $name = Session::get('admin_name');
                                    if ($name) {
                                        echo $name;
                                    }
                                    ?>
                                    <i class='bx bxs-badge-check text-success align-middle'></i>
                                </h4>
                                <p class="mb-0">Project Head Manager</p>
                            </div>
                            <div class="d-flex align-items-center gap-2 my-2 my-lg-0">
                                <a href="#!" class="btn btn-info"><i class='bx bx-message-dots'></i> Message</a>
                                <a href="#!" class="btn btn-outline-primary"><i class="bx bx-plus"></i> Follow</a>
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                        <iconify-icon icon="solar:menu-dots-bold" class="fs-20 align-middle text-muted"></iconify-icon>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Export</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Import</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3 gy-2">
                            <div class="col-lg-2 col-6">
                                <div class="d-flex align-items-center gap-2 border-end">
                                    <div class="">
                                        <iconify-icon icon="solar:clock-circle-bold-duotone" class="fs-28 text-primary"></iconify-icon>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">3+ Years Job</h5>
                                        <p class="mb-0">Experience</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-6">
                                <div class="d-flex align-items-center gap-2 border-end">
                                    <div class="">
                                        <iconify-icon icon="solar:cup-star-bold-duotone" class="fs-28 text-primary"></iconify-icon>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">5 Certificate</h5>
                                        <p class="mb-0">Achieved</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-6">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="">
                                        <iconify-icon icon="solar:notebook-bold-duotone" class="fs-28 text-primary"></iconify-icon>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">2 Internship</h5>
                                        <p class="mb-0">Completed</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Personal Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <div class="avatar-sm bg-light d-flex align-items-center justify-content-center rounded">
                                    <iconify-icon icon="solar:backpack-bold-duotone" class="fs-20 text-secondary"></iconify-icon>
                                </div>
                                <p class="mb-0 fs-14">Project Head Manager</p>
                            </div>
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <div class="avatar-sm bg-light d-flex align-items-center justify-content-center rounded">
                                    <iconify-icon icon="solar:square-academic-cap-2-bold-duotone" class="fs-20 text-secondary"></iconify-icon>
                                </div>
                                <p class="mb-0 fs-14">Went to <span class="text-dark fw-semibold">Oxford International</span></p>
                            </div>
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <div class="avatar-sm bg-light d-flex align-items-center justify-content-center rounded">
                                    <iconify-icon icon="solar:map-point-bold-duotone" class="fs-20 text-secondary"></iconify-icon>
                                </div>
                                <p class="mb-0 fs-14">Lives in <span class="text-dark fw-semibold">Pittsburgh, PA 15212</span></p>
                            </div>
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <div class="avatar-sm bg-light d-flex align-items-center justify-content-center rounded">
                                    <iconify-icon icon="solar:users-group-rounded-bold-duotone" class="fs-20 text-secondary"></iconify-icon>
                                </div>
                                <p class="mb-0 fs-14">Followed by <span class="text-dark fw-semibold">16.6k People</span></p>
                            </div>
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <div class="avatar-sm bg-light d-flex align-items-center justify-content-center rounded">
                                    <iconify-icon icon="solar:letter-bold-duotone" class="fs-20 text-secondary"></iconify-icon>
                                </div>
                                <p class="mb-0 fs-14">Email <a href="#!" class="text-primary fw-semibold">hello@dundermuffilin.com</a></p>
                            </div>
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <div class="avatar-sm bg-light d-flex align-items-center justify-content-center rounded">
                                    <iconify-icon icon="solar:link-bold-duotone" class="fs-20 text-secondary"></iconify-icon>
                                </div>
                                <p class="mb-0 fs-14">Website <a href="#!" class="text-primary fw-semibold">www.larkon.co</a></p>
                            </div>
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <div class="avatar-sm bg-light d-flex align-items-center justify-content-center rounded">
                                    <iconify-icon icon="solar:global-bold-duotone" class="fs-20 text-secondary"></iconify-icon>
                                </div>
                                <p class="mb-0 fs-14">Language <span class="text-dark fw-semibold">English , Spanish , German</span></p>
                            </div>

                            <div class="d-flex align-items-center gap-2">
                                <div class="avatar-sm bg-light d-flex align-items-center justify-content-center rounded">
                                    <iconify-icon icon="solar:check-circle-bold-duotone" class="fs-20 text-secondary"></iconify-icon>
                                </div>
                                <p class="mb-0 fs-14">Status <span class="badge bg-success-subtle text-success ms-1">Active</span></p>
                            </div>
                            <div class="mt-2">
                                <a href="#!" class="text-primary">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection