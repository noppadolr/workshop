
@push('styles')
    <!-- third party css -->
    <link href="{{ asset('admin/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->
@endpush
<div>
    <x-slot name="title">
        Manage Supplier
    </x-slot>
    {{--    begin page title--}}
    <x-slot name="page_title">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">

                    <h4 class="page-title">Supplier</h4>
                </div>
            </div>
        </div>
    </x-slot>
    {{--    end page title--}}

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <a href="javascript:void(0);" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i> Add Customers</a>
                        </div>
                        <div class="col-sm-8">
                            <div class="text-sm-end">
                                <button type="button" class="btn btn-success mb-2 me-1"><i class="mdi mdi-cog"></i></button>
                                <button type="button" class="btn btn-light mb-2 me-1">Import</button>
                                <button type="button" class="btn btn-light mb-2">Export</button>
                            </div>
                        </div><!-- end col-->
                    </div>

                    <div class="table-responsive">
                        <div id="products-datatable_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="products-datatable_length"><label class="form-label">Display <select class="form-select form-select-sm ms-1 me-1"><option value="10">10</option><option value="20">20</option><option value="-1">All</option></select> customers</label></div></div><div class="col-sm-12 col-md-6"><div id="products-datatable_filter" class="dataTables_filter"><label class="form-label">Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="products-datatable"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-centered table-striped dt-responsive nowrap w-100 dataTable no-footer dtr-inline" id="products-datatable" aria-describedby="products-datatable_info" style="width: 1565px;">
                                        <thead>
                                        <tr><th style="width: 26.8px;" class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1" colspan="1" data-col="0" aria-label="


                                                                &amp;nbsp;

                                                        "><div class="form-check"><input type="checkbox" class="form-check-input dt-checkboxes"><label class="form-check-label">&nbsp;</label></div></th><th class="sorting" tabindex="0" aria-controls="products-datatable" rowspan="1" colspan="1" style="width: 282.4px;" aria-label="Customer: activate to sort column ascending">Customer</th><th class="sorting" tabindex="0" aria-controls="products-datatable" rowspan="1" colspan="1" style="width: 195.4px;" aria-label="Phone: activate to sort column ascending">Phone</th><th class="sorting" tabindex="0" aria-controls="products-datatable" rowspan="1" colspan="1" style="width: 129.4px;" aria-label="Balance: activate to sort column ascending">Balance</th><th class="sorting" tabindex="0" aria-controls="products-datatable" rowspan="1" colspan="1" style="width: 110.4px;" aria-label="Orders: activate to sort column ascending">Orders</th><th class="sorting sorting_asc" tabindex="0" aria-controls="products-datatable" rowspan="1" colspan="1" style="width: 321.4px;" aria-sort="ascending" aria-label="Last Order: activate to sort column descending">Last Order</th><th class="sorting" tabindex="0" aria-controls="products-datatable" rowspan="1" colspan="1" style="width: 107.4px;" aria-label="Status: activate to sort column ascending">Status</th><th style="width: 75.8px;" class="sorting_disabled" rowspan="1" colspan="1" aria-label="Action">Action</th></tr>
                                        </thead>
                                        <tbody>













                                        <tr class="odd">
                                            <td class="dt-checkboxes-cell dtr-control"><div class="form-check"><input type="checkbox" class="form-check-input dt-checkboxes"><label class="form-check-label">&nbsp;</label></div></td>
                                            <td class="table-user">
                                                <img src="assets/images/users/user-2.jpg" alt="table-user" class="me-2 rounded-circle">
                                                <a href="javascript:void(0);" class="text-body fw-semibold">Rory Seekamp</a>
                                            </td>
                                            <td>
                                                078 5054 8877
                                            </td>
                                            <td>
                                                $3365.12
                                            </td>
                                            <td>
                                                25
                                            </td>
                                            <td class="sorting_1">April 21 2019 <small class="text-muted">07:22 AM</small></td>
                                            <td>
                                                <span class="badge badge-soft-danger">Blocked</span>
                                            </td>

                                            <td>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                            </td>
                                        </tr><tr class="even">
                                            <td class="dtr-control dt-checkboxes-cell" tabindex="0"><div class="form-check"><input type="checkbox" class="form-check-input dt-checkboxes"><label class="form-check-label">&nbsp;</label></div></td>
                                            <td class="table-user">
                                                <img src="assets/images/users/user-3.jpg" alt="table-user" class="me-2 rounded-circle">
                                                <a href="javascript:void(0);" class="text-body fw-semibold">Bryan J. Luellen</a>
                                            </td>
                                            <td>
                                                215-302-3376
                                            </td>
                                            <td>
                                                $874.25
                                            </td>
                                            <td>
                                                220
                                            </td>
                                            <td class="sorting_1">August 04 2019 <small class="text-muted">08:18 AM</small></td>
                                            <td>
                                                <span class="badge badge-soft-success">Active</span>
                                            </td>

                                            <td>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                            </td>
                                        </tr><tr class="odd">
                                            <td class="dtr-control dt-checkboxes-cell" tabindex="0"><div class="form-check"><input type="checkbox" class="form-check-input dt-checkboxes"><label class="form-check-label">&nbsp;</label></div></td>
                                            <td class="table-user">
                                                <img src="assets/images/users/user-4.jpg" alt="table-user" class="me-2 rounded-circle">
                                                <a href="javascript:void(0);" class="text-body fw-semibold">Paul J. Friend</a>
                                            </td>
                                            <td>050 414 8778</td>
                                            <td>
                                                $12,874.82
                                            </td>
                                            <td>
                                                43
                                            </td>
                                            <td class="sorting_1">
                                                August 05 2019 <small class="text-muted">10:29 PM</small>
                                            </td>
                                            <td>
                                                <span class="badge badge-soft-success">Active</span>
                                            </td>

                                            <td>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                            </td>
                                        </tr><tr class="even">
                                            <td class="dtr-control dt-checkboxes-cell" tabindex="0"><div class="form-check"><input type="checkbox" class="form-check-input dt-checkboxes"><label class="form-check-label">&nbsp;</label></div></td>
                                            <td class="table-user">
                                                <img src="assets/images/users/user-1.jpg" alt="table-user" class="me-2 rounded-circle">
                                                <a href="javascript:void(0);" class="text-body fw-semibold">Timothy Kauper</a>
                                            </td>
                                            <td>
                                                (216) 75 612 706
                                            </td>
                                            <td>
                                                $561.25
                                            </td>
                                            <td>
                                                62
                                            </td>
                                            <td class="sorting_1">February 01 2019 <small class="text-muted">07:22 AM</small></td>
                                            <td>
                                                <span class="badge badge-soft-danger">Blocked</span>
                                            </td>

                                            <td>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                            </td>
                                        </tr><tr class="odd">
                                            <td class="dtr-control dt-checkboxes-cell" tabindex="0"><div class="form-check"><input type="checkbox" class="form-check-input dt-checkboxes"><label class="form-check-label">&nbsp;</label></div></td>
                                            <td class="table-user">
                                                <img src="assets/images/users/user-5.jpg" alt="table-user" class="me-2 rounded-circle">
                                                <a href="javascript:void(0);" class="text-body fw-semibold">Zara Raws</a>
                                            </td>
                                            <td>
                                                (02) 75 150 655
                                            </td>
                                            <td>
                                                $2147.84
                                            </td>
                                            <td>
                                                09
                                            </td>
                                            <td class="sorting_1">February 01 2019 <small class="text-muted">07:22 AM</small></td>
                                            <td>
                                                <span class="badge badge-soft-success">Active</span>
                                            </td>

                                            <td>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                            </td>
                                        </tr><tr class="even">
                                            <td class="dtr-control dt-checkboxes-cell" tabindex="0"><div class="form-check"><input type="checkbox" class="form-check-input dt-checkboxes"><label class="form-check-label">&nbsp;</label></div></td>
                                            <td class="table-user">
                                                <img src="assets/images/users/user-8.jpg" alt="table-user" class="me-2 rounded-circle">
                                                <a href="javascript:void(0);" class="text-body fw-semibold">Edward Roseby</a>
                                            </td>
                                            <td>
                                                078 6013 3854
                                            </td>
                                            <td>
                                                $71584.2
                                            </td>
                                            <td>
                                                365
                                            </td>
                                            <td class="sorting_1">February 09 2019 <small class="text-muted">07:22 AM</small></td>
                                            <td>
                                                <span class="badge badge-soft-success">Active</span>
                                            </td>

                                            <td>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                            </td>
                                        </tr><tr class="odd">
                                            <td class="dtr-control dt-checkboxes-cell" tabindex="0"><div class="form-check"><input type="checkbox" class="form-check-input dt-checkboxes"><label class="form-check-label">&nbsp;</label></div></td>
                                            <td class="table-user">
                                                <img src="assets/images/users/user-3.jpg" alt="table-user" class="me-2 rounded-circle">
                                                <a href="javascript:void(0);" class="text-body fw-semibold">Kathryn S. Collier</a>
                                            </td>
                                            <td>
                                                828-216-2190
                                            </td>
                                            <td>
                                                $125.78
                                            </td>
                                            <td>
                                                841
                                            </td>
                                            <td class="sorting_1">November 04 2019 <small class="text-muted">10:29 PM</small></td>
                                            <td>
                                                <span class="badge badge-soft-danger">Blocked</span>
                                            </td>

                                            <td>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                            </td>
                                        </tr><tr class="even">
                                            <td class="dtr-control dt-checkboxes-cell" tabindex="0"><div class="form-check"><input type="checkbox" class="form-check-input dt-checkboxes"><label class="form-check-label">&nbsp;</label></div></td>
                                            <td class="table-user">
                                                <img src="assets/images/users/user-7.jpg" alt="table-user" class="me-2 rounded-circle">
                                                <a href="javascript:void(0);" class="text-body fw-semibold">Jenny C. Gero</a>
                                            </td>
                                            <td>
                                                078 7173 9261
                                            </td>
                                            <td>
                                                $965.20
                                            </td>
                                            <td>
                                                214
                                            </td>
                                            <td class="sorting_1">November 14 2019 <small class="text-muted">07:22 AM</small></td>
                                            <td>
                                                <span class="badge badge-soft-danger">Blocked</span>
                                            </td>

                                            <td>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                            </td>
                                        </tr><tr class="odd">
                                            <td class="dtr-control dt-checkboxes-cell" tabindex="0"><div class="form-check"><input type="checkbox" class="form-check-input dt-checkboxes"><label class="form-check-label">&nbsp;</label></div></td>
                                            <td class="table-user">
                                                <img src="assets/images/users/user-10.jpg" alt="table-user" class="me-2 rounded-circle">
                                                <a href="javascript:void(0);" class="text-body fw-semibold">Dean Smithies</a>
                                            </td>
                                            <td>
                                                077 6157 4248
                                            </td>
                                            <td>
                                                $482.15
                                            </td>
                                            <td>
                                                68
                                            </td>
                                            <td class="sorting_1">October 09 2019 <small class="text-muted">07:22 AM</small></td>
                                            <td>
                                                <span class="badge badge-soft-success">Active</span>
                                            </td>

                                            <td>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                            </td>
                                        </tr><tr class="even">
                                            <td class="dt-checkboxes-cell dtr-control"><div class="form-check"><input type="checkbox" class="form-check-input dt-checkboxes"><label class="form-check-label">&nbsp;</label></div></td>
                                            <td class="table-user">
                                                <img src="assets/images/users/user-1.jpg" alt="table-user" class="me-2 rounded-circle">
                                                <a href="javascript:void(0);" class="text-body fw-semibold">Labeeb Ghali</a>
                                            </td>
                                            <td>
                                                050 414 8778
                                            </td>
                                            <td>
                                                $7852.3
                                            </td>
                                            <td>
                                                475
                                            </td>
                                            <td class="sorting_1">October 27 2019 <small class="text-muted">07:22 AM</small></td>
                                            <td>
                                                <span class="badge badge-soft-success">Active</span>
                                            </td>

                                            <td>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                            </td>
                                        </tr></tbody>
                                    </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="products-datatable_info" role="status" aria-live="polite">Showing customers 1 to 10 of 12</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="products-datatable_paginate"><ul class="pagination pagination-rounded"><li class="paginate_button page-item previous disabled" id="products-datatable_previous"><a href="#" aria-controls="products-datatable" data-dt-idx="0" tabindex="0" class="page-link"><i class="mdi mdi-chevron-left"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="products-datatable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="products-datatable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="products-datatable_next"><a href="#" aria-controls="products-datatable" data-dt-idx="3" tabindex="0" class="page-link"><i class="mdi mdi-chevron-right"></i></a></li></ul></div></div></div></div>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
</div>

@push('scripts')

@endpush
