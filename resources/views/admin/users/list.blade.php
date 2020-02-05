@extends('admin.layouts.template')

@section('title','Users List')
@section('page','User')
@section('subpage','List')

@section('content')
                        
<!-- begin:: Content -->
<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
    
    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                    
                </span>
                <h3 class="kt-portlet__head-title">
                   
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
                    
                    <!--<div class="dropdown dropdown-inline">
                        
                        <?php $export = 'admin/listusers/exportcsv' ?>
                         <a href="{{ url($export) }}" class="btn btn-brand m-btn--custom m-btn--icon m-btn--air ">
                            <span>
                                <i class="la la-download"></i>
                                <span>
                                    Export
                                </span>
                            </span>
                        </a>  
                        
                    </div>-->
                </div>
            </div>
        </div>
        <div class="kt-portlet__body">

            <!--begin: Search Form -->
                 @if(session('success_msg'))
                <div class="row align-items-center">
                    
                    <div class="col-xl-4 order-1 order-xl-2 kt-align-right">
                        
                       
                            <div class="m-form__content">
                                <div class="m-alert m-alert--icon alert alert-success" role="alert">
                                    <div class="m-alert__icon">
                                        <i class="la la-check"></i>
                                    </div>
                                    <div class="m-alert__text">
                                        {{ session('success_msg') }}
                                    </div>
                                    <div class="m-alert__close">
                                        <button type="button" class="close" data-close="alert" aria-label="Close"></button>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                </div>
                @endif
            <!--begin: Search Form -->
            <div class="kt-form kt-form--label-right kt-margin-b-10">
                <div class="row align-items-center">
                    <div class="col-xl-12 order-2 order-xl-1">
                        <div class="row align-items-center">
                            <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                                <div class="kt-input-icon kt-input-icon--left mb-3">
                                    Filter:
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                                <div class="kt-input-icon kt-input-icon--left">
                                    <input type="text" class="form-control" placeholder="Search..." id="generalSearch">
                                    <span class="kt-input-icon__icon kt-input-icon__icon--left">
                                        <span><i class="la la-search"></i></span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                                <div class="kt-form__group kt-form__group--inline">
                                    <div class="kt-form__label">
                                        <label>Status:</label>
                                    </div>
                                    <div class="kt-form__control">
                                        <select class="form-control bootstrap-select" id="kt_form_status">
                                            <option value="">All Status</option>
                                            <option value="ACTIVE">ACTIVE</option>
                                            <option value="INACTIVE">INACTIVE</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                         
                            
                        </div>
                    </div>
                    
                </div>
            </div>

            <!--end: Search Form -->
        </div>
        
        <div class="col-xl-12 order-lg-2 order-xl-1">
            <div class="kt-portlet kt-portlet--height-fluid kt-portlet--mobile ">
                
                <div class="kt-portlet__body kt-portlet__body--fit">

                    <!--begin: Datatable -->
                    <div class="kt-datatable" id="tbl_datatable_list"></div>

                    <!--end: Datatable -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end:: Content -->

<style>
.btn{ padding: 0.65rem 0.3rem !important; }
</style>
@stop
@section('script_after_footer')
<script src="{{ asset(env('ASSETS_PATH').'assets/vendors/general/sweetalert2/dist/sweetalert2.min.js') }}"></script>
<script type="text/javascript">

function datatableCounter(datatable, index) {
    return ((datatable.API.params.pagination.page -1 ) * datatable.API.params.pagination.perpage) + (index+1);
    }
    var datatable;
    var AjaxBasedDatatables = function() {
        var qstring = "";
        var companyInit = function() {
            datatable = $('#tbl_datatable_list').KTDatatable({
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            method: 'GET',
                            url: ADMIN_URL + 'ajaxListusers?q='+qstring,
                            map: function(raw) {
                                var dataSet = raw;
                                if (typeof raw.data !== 'undefined') {
                                    dataSet = raw.data;
                                
                                    
                                }
                                return dataSet;
                            },
                        },
                    },
                    pageSize: 10,
                    serverPaging: true,
                    serverFiltering: true,
                    serverSorting: true,
                },


                // layout definition
                layout: {
                    scroll: false,
                    footer: false
                },

                // column sorting
                sortable: true,

                pagination: true,

                toolbar: {
                    // toolbar items
                    items: {
                        // pagination
                        pagination: {
                            // page size select
                            pageSizeSelect: [10, 20, 30, 50, 100]
                        },
                    },
                },

                search: {
                    input: $('#generalSearch'),
                },

                rows: {
                    // auto hide columns, if rows overflow
                    autoHide: false
                },

                // columns definition
                columns: [
                
                {
                    field: 'id',
                    title: 'User ID',
                    width: 40
                },
                {
                    field: 'created_at',
                    title: 'User Since',
                    width: 120
                },
                {
                    field: 'first_name', 
                    title: 'First Name',
                    width: 75
                },
                 {
                    field: 'last_name', 
                    title: 'Last Name',
                    width: 70
                },
                
                {
                    field: 'email',
                    title: 'Email',
                    width: 150
                },
               
                {
                    field: 'status',
                    title: 'Status',
                    width: 45
                },
               {
                    field: '',
                    width: 50,
                    title: '<span style="text-align:center">Action</span>',
                    sortable: false,
                    overflow: 'visible',
                    template: function (row, index, datatable) {
                        var status = (row.status == 'ACTIVE') ? 'Inactive This User' : 'Active This User';
                        var dropup = (datatable.getPageSize() - index) <= 4 ? 'dropup' : '';
                        var viewUrl =  ADMIN_URL + 'usersdetails/'+row.id;
                      
                        
                        return '\
                             <a href="'+viewUrl+'" class="m-portlet__navlink btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill view" title="View" data-id="'+row.id+'" data-token="{{ csrf_token() }}">\
                                 <i class="la la-eye"></i>\
                             </a>\
                                \
                             ';
                    }, 
                } 
                ],
            });

            $('#kt_form_status').on('change', function() {
                
                datatable.search($(this).val(), 'status');
            });

            $('#kt_form_status').selectpicker();

           
        };

        return {
            // public functions
            init: function() {
                companyInit();
            },
        };
    }();
    

    $(document).ready(function() {
         
        AjaxBasedDatatables.init();

        $('#tbl_datatable_list').on('click', '.delete', function(e){
            var id = $(this).attr('data-id');    
            var token = $(this).attr('data-token');     
            var ths = $(this);
            swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!'
            }).then(function (result) {
                if (result.value) {
                    if (id != '') {
                        $.ajax({
                            type: 'post',
                            url: ADMIN_URL + "deleteusers",
                            data: 'id=' + id + '&_token=' + token,
                            success: function (data) {
                                datatable.reload();
                                
                            }
                        })
                    }
                    swal.fire(
                        'Deleted!',
                        'User has been deactivated permanently.',
                        'success'
                    )
                }
            });
        });
       

        $('#tbl_datatable_list').on('click', '.status', function(e){
            var id = $(this).attr('data-id');    
            var token = $(this).attr('data-token');     
            var ths = $(this);
            swal.fire({
                title: 'Are you sure?',
                text: "You will changing the status of user!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, Change it!'
            }).then(function (result) {
                if (result.value) {
                    if (id != '') {
                        $.ajax({
                            type: 'post',
                            url: ADMIN_URL + "updatestatus",
                            data: 'id=' + id + '&_token=' + token,
                            success: function (data) {
                                datatable.reload();
                                
                            }
                        })
                    }
                    swal.fire(
                        'Changed!',
                        'Status has been Changed Successfully.',
                        'success'
                    )
                }
            });
        });
    });
</script>
@stop
