@extends('admin.layout.template')
<div class="row mx-2">
    <div class="col-md-2">
        <div class="me-3">
            <div class="dataTables_length" id="DataTables_Table_0_length">
                <label>
                    <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </label>
            </div>
        </div>
    </div>
    <div class="col-md-10">
        <div class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-end flex-md-row flex-column mb-3 mb-md-0">
            <div id="DataTables_Table_0_filter" class="dataTables_filter">
                <label>
                    <input type="search" class="form-control" placeholder="Search.." aria-controls="DataTables_Table_0">
                </label>
            </div>
            <div class="dt-buttons">
                <button class="dt-button buttons-collection dropdown-toggle btn btn-label-secondary mx-3" tabindex="0" aria-controls="DataTables_Table_0" type="button" aria-haspopup="dialog" aria-expanded="false">
                    <span>
                        <i class="bx bx-export me-1"></i>Export
                    </span>
                    <span class="dt-down-arrow">▼
                    </span>
                </button> 
                <div class="dt-button-collection" aria-modal="true" role="dialog" style="top: 53.4896px; left: 708.552px;">
                    <div role="menu">    
                        <button class="dt-button buttons-print dropdown-item" tabindex="0" aria-controls="DataTables_Table_0" type="button">
                            <span>
                                <i class="bx bx-printer me-2"></i>Print
                            </span>
                        </button>
                        <button class="dt-button buttons-csv buttons-html5 dropdown-item" tabindex="0" aria-controls="DataTables_Table_0" type="button">
                            <span>
                                <i class="bx bx-file me-2"></i>Csv
                            </span>
                        </button> 
                        <button class="dt-button buttons-pdf buttons-html5 dropdown-item" tabindex="0" aria-controls="DataTables_Table_0" type="button">
                            <span>
                                <i class="bx bxs-file-pdf me-2"></i>Pdf
                            </span>
                        </button> 
                        <button class="dt-button buttons-copy buttons-html5 dropdown-item" tabindex="0" aria-controls="DataTables_Table_0" type="button">
                            <span><i class="bx bx-copy me-2"></i>Copy
                            </span>
                        </button> 
                    </div>
                </div>
                <button class="dt-button add-new btn btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser">
                    <span>
                        <i class="bx bx-plus me-0 me-sm-1"></i>
                        <span class="d-none d-sm-inline-block">Add New User</span>
                    </span>
                </button> 
            </div>
        </div>
    </div>
    <tr class="odd">
        <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
        <td class="sorting_1"><div class="d-flex justify-content-start align-items-center user-name">
            <div class="avatar-wrapper">
                <div class="avatar avatar-sm me-3">
                    <img src="../../assets/img/avatars/2.png" alt="Avatar" class="rounded-circle">
                </div>
            </div>
            <div class="d-flex flex-column">
                <a href="app-user-view-account.html" class="text-body text-truncate">
                    <span class="fw-medium">Zsazsa McCleverty</span>
                </a>
                <small class="text-muted">zmcclevertye@soundcloud.com</small>
            </div>
        </div>
        </td>
        <td>
            <span class="text-truncate d-flex align-items-center">
                <span class="badge badge-center rounded-pill bg-label-primary w-px-30 h-px-30 me-2">
                    <i class="bx bx-pie-chart-alt bx-xs"></i>
                </span>
                Maintainer
            </span>
        </td>
        <td>
            <span class="fw-medium">Enterprise</span>
        </td>
        <td>Auto Debit</td>
        <td>
            <span class="badge bg-label-success">Active
            </span>
        </td>
        <td class="" style="">
            <div class="d-inline-block text-nowrap">
                <button class="btn btn-sm btn-icon">
                    <i class="bx bx-edit"></i>
                </button>
                <button class="btn btn-sm btn-icon delete-record">
                    <i class="bx bx-trash"></i>
                </button>
            </div>
        </td>
    </tr>
</div>