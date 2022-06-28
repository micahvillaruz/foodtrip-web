<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center flex-wrap gap-2">
                    <div class="flex-grow-1">
                        <button class="btn btn-info add-btn" data-bs-toggle="modal" data-bs-target="#showModal"><i class="ri-add-fill me-1 align-bottom"></i> Add Contacts</button>
                    </div>
                    <div class="flex-shrink-0">
                        <div class="hstack text-nowrap gap-2">
                            <button class="btn btn-soft-danger" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#addmembers"><i class="ri-filter-2-line me-1 align-bottom"></i> Filters</button>
                            <button class="btn btn-soft-success shadow-none">Import</button>
                            <button type="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-expanded="false" class="btn btn-soft-info shadow-none"><i class="ri-more-2-fill"></i></button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                <li><a class="dropdown-item" href="#">All</a></li>
                                <li><a class="dropdown-item" href="#">Last Week</a></li>
                                <li><a class="dropdown-item" href="#">Last Month</a></li>
                                <li><a class="dropdown-item" href="#">Last Year</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col-xxl-9">
        <div class="card" id="contactList">
            <div class="card-header">
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="search-box">
                            <input type="text" class="form-control search" placeholder="Search for contact...">
                            <i class="ri-search-line search-icon"></i>
                        </div>
                    </div>
                    <div class="col-md-auto ms-auto">
                        <div class="d-flex align-items-center gap-2">
                            <span class="text-muted">Sort by: </span>
                            <select class="form-control mb-0" data-choices data-choices-search-false id="choices-single-default">
                                <option value="Name">Name</option>
                                <option value="Company">Company</option>
                                <option value="Lead">Lead</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div>
                    <div class="table-responsive table-card mb-3">
                        <table class="table align-middle table-nowrap mb-0" id="customerTable">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col" style="width: 50px;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                        </div>
                                    </th>
                                    <th class="sort" data-sort="name" scope="col">Name</th>
                                    <th class="sort" data-sort="company_name" scope="col">Company</th>
                                    <th class="sort" data-sort="email_id" scope="col">Email ID</th>
                                    <th class="sort" data-sort="phone" scope="col">Phone No</th>
                                    <th class="sort" data-sort="lead_score" scope="col">Lead Score</th>
                                    <th class="sort" data-sort="tags" scope="col">Tags</th>
                                    <th class="sort" data-sort="date" scope="col">Last Contacted</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody class="list form-check-all">
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                        </div>
                                    </th>
                                    <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ001</a></td>
                                    <td class="name">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0"><img src="<?php echo base_url('public/assets') ?>/images/users/avatar-10.jpg" alt="" class="avatar-xs rounded-circle"></div>
                                            <div class="flex-grow-1 ms-2 name">Tonya Noble</div>
                                        </div>
                                    </td>
                                    <td class="company_name">Nesta Technologies</td>
                                    <td class="email_id">tonyanoble@velzon.com</td>
                                    <td class="phone">414-453-5725</td>
                                    <td class="lead_score">154</td>
                                    <td class="tags">
                                        <span class="badge badge-soft-primary">Lead</span>
                                        <span class="badge badge-soft-primary">Partner</span>
                                    </td>
                                    <td class="date">15 Dec, 2021 <small class="text-muted">08:58AM</small></td>
                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">
                                            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Call">
                                                <a href="javascript:void(0);" class="text-muted d-inline-block">
                                                    <i class="ri-phone-line fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Message">
                                                <a href="javascript:void(0);" class="text-muted d-inline-block">
                                                    <i class="ri-question-answer-line fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="dropdown">
                                                    <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item view-item-btn" href="javascript:void(0);"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>View</a></li>
                                                        <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                        <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="noresult" style="display: none">
                            <div class="text-center">
                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                <p class="text-muted mb-0">We've searched more than 150+ contacts We did not find any contacts for you search.</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-3">
                        <div class="pagination-wrap hstack gap-2">
                            <a class="page-item pagination-prev disabled" href="#">
                                Previous
                            </a>
                            <ul class="pagination listjs-pagination mb-0"></ul>
                            <a class="page-item pagination-next" href="#">
                                Next
                            </a>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content border-0">
                            <div class="modal-header bg-soft-info p-3">
                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                            </div>
                            <form action="">
                                <div class="modal-body">
                                    <input type="hidden" id="id-field" />
                                    <div class="row g-3">
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <div class="position-relative d-inline-block">
                                                    <div class="position-absolute  bottom-0 end-0">
                                                        <label for="customer-image-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Select Image">
                                                            <div class="avatar-xs cursor-pointer">
                                                                <div class="avatar-title bg-light border rounded-circle text-muted">
                                                                    <i class="ri-image-fill"></i>
                                                                </div>
                                                            </div>
                                                        </label>
                                                        <input class="form-control d-none" value="" id="customer-image-input" type="file" accept="image/png, image/gif, image/jpeg">
                                                    </div>
                                                    <div class="avatar-lg p-1">
                                                        <div class="avatar-title bg-light rounded-circle">
                                                            <img src="<?php echo base_url('public/assets') ?>/images/users/user-dummy-img.jpg" id="customer-img" class="avatar-md rounded-circle object-cover" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <label for="name-field" class="form-label">Name</label>
                                                <input type="text" id="customername-field" class="form-control" placeholder="Enter name" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div>
                                                <label for="company_name-field" class="form-label">Company Name</label>
                                                <input type="text" id="company_name-field" class="form-control" placeholder="Enter company name" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div>
                                                <label for="designation-field" class="form-label">Designation</label>
                                                <input type="text" id="designation-field" class="form-control" placeholder="Enter Designation" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div>
                                                <label for="email_id-field" class="form-label">Email ID</label>
                                                <input type="text" id="email_id-field" class="form-control" placeholder="Enter email" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div>
                                                <label for="phone-field" class="form-label">Phone</label>
                                                <input type="text" id="phone-field" class="form-control" placeholder="Enter phone no" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div>
                                                <label for="lead_score-field" class="form-label">Lead Score</label>
                                                <input type="text" id="lead_score-field" class="form-control" placeholder="Enter value" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div>
                                                <label for="taginput-choices" class="form-label font-size-13 text-muted">Tags</label>
                                                <select class="form-control" name="taginput-choices" id="taginput-choices" multiple>
                                                    <option value="Lead">Lead</option>
                                                    <option value="Partner">Partner</option>
                                                    <option value="Exiting">Exiting</option>
                                                    <option value="Long-term">Long-term</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="hstack gap-2 justify-content-end">
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success" id="add-btn">Add Contact</button>
                                        <button type="button" class="btn btn-success" id="edit-btn">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--end add modal-->

                <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                            </div>
                            <div class="modal-body p-5 text-center">
                                <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#405189,secondary:#f06548" style="width:90px;height:90px"></lord-icon>
                                <div class="mt-4 text-center">
                                    <h4 class="fs-semibold">You are about to delete a contact ?</h4>
                                    <p class="text-muted fs-14 mb-4 pt-1">Deleting your contact will remove all of your information from our database.</p>
                                    <div class="hstack gap-2 justify-content-center remove">
                                        <button class="btn btn-link link-success fw-medium text-decoration-none" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</button>
                                        <button class="btn btn-danger" id="delete-record">Yes, Delete It!!</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end delete modal -->

            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-xxl-3">
        <div class="card" id="contact-view-detail">
            <div class="card-body text-center">
                <div class="position-relative d-inline-block">
                    <img src="<?php echo base_url('public/assets') ?>/images/users/avatar-10.jpg" alt="" class="avatar-lg rounded-circle img-thumbnail shadow">
                    <span class="contact-active position-absolute rounded-circle bg-success"><span class="visually-hidden"></span>
                </div>
                <h5 class="mt-4 mb-1">Tonya Noble</h5>
                <p class="text-muted">Nesta Technologies</p>

                <ul class="list-inline mb-0">
                    <li class="list-inline-item avatar-xs">
                        <a href="javascript:void(0);" class="avatar-title bg-soft-success text-success fs-15 rounded">
                            <i class="ri-phone-line"></i>
                        </a>
                    </li>
                    <li class="list-inline-item avatar-xs">
                        <a href="javascript:void(0);" class="avatar-title bg-soft-danger text-danger fs-15 rounded">
                            <i class="ri-mail-line"></i>
                        </a>
                    </li>
                    <li class="list-inline-item avatar-xs">
                        <a href="javascript:void(0);" class="avatar-title bg-soft-warning text-warning fs-15 rounded">
                            <i class="ri-question-answer-line"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <h6 class="text-muted text-uppercase fw-semibold mb-3">Personal Information</h6>
                <p class="text-muted mb-4">Hello, I'm Tonya Noble, The most effective objective is one that is tailored to the job you are applying for. It states what kind of career you are seeking, and what skills and experiences.</p>
                <div class="table-responsive table-card">
                    <table class="table table-borderless mb-0">
                        <tbody>
                            <tr>
                                <td class="fw-medium" scope="row">Designation</td>
                                <td>Lead Designer / Developer</td>
                            </tr>
                            <tr>
                                <td class="fw-medium" scope="row">Email ID</td>
                                <td>tonyanoble@velzon.com</td>
                            </tr>
                            <tr>
                                <td class="fw-medium" scope="row">Phone No</td>
                                <td>414-453-5725</td>
                            </tr>
                            <tr>
                                <td class="fw-medium" scope="row">Lead Score</td>
                                <td>154</td>
                            </tr>
                            <tr>
                                <td class="fw-medium" scope="row">Tags</td>
                                <td>
                                    <span class="badge badge-soft-primary">Lead</span>
                                    <span class="badge badge-soft-primary">Partner</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-medium" scope="row">Last Contacted</td>
                                <td>15 Dec, 2021 <small class="text-muted">08:58AM</small></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div>
<!--end row-->