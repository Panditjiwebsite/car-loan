@extends('admin.layouts.template')

@section('title','Friend List')
@section('page','User')
@section('subpage','Friend List')

@section('content')
                        
<!-- begin:: Content -->
<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
    
    <div class="kt-portlet kt-portlet--mobile">
        
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
                    <div class="kt-datatable" id="tbl_datafriendtable_list"></div>

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
            datatable = $('#tbl_datafriendtable_list').KTDatatable({
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            method: 'GET',
                            url: ADMIN_URL + 'ajaxlistfriend?user_id={{ $id }}&q='+qstring,
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
                    width: 45
                },
                {
                    field: 'created_at',
                    title: 'User Since',
                    width: 130
                },
                {
                    field: 'first_name', 
                    title: 'First Name',
                    width: 80
                },
                 {
                    field: 'last_name', 
                    title: 'Last Name',
                    width: 70
                },
                {
                    field: 'gender',
                    title: 'Gender',
                    width: 50
                },
                {
                    field: 'email',
                    title: 'Email',
                    width: 160
                },
                {
                    field: 'status',
                    title: 'Status',
                    width: 45
                },
               {
                    field: '',
                    width: 110,
                    title: '<span style="text-align:center">Action</span>',
                    sortable: false,
                    overflow: 'visible',
                    template: function (row, index, datatable) {
                        var status = (row.status == 'ACTIVE') ? 'Block This User' : 'Active This User';
                        var dropup = (datatable.getPageSize() - index) <= 4 ? 'dropup' : '';
                        var viewUrl = ADMIN_URL + 'usersdetails/'+row.id;
                        var socialUrl =  ADMIN_URL + 'listfriend/'+row.id;
                        var placevisitUrl =  ADMIN_URL + 'listvisit/'+row.id;
                        
                        return '\
                             <a href="'+viewUrl+'" class="m-portlet__navlink btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill view" title="View Friend Data" data-id="'+row.id+'" data-token="{{ csrf_token() }}">\
                                 <i class="la la-eye"></i>\
                             </a>\<a href="'+socialUrl+'" class="m-portlet__navlink btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill socialfriend" title="Social Friend" data-id="'+row.id+'" data-token="{{ csrf_token() }}">\
                                 <i class="la la-users"></i>\
                                 </a>\<a href="'+placevisitUrl+'" class="m-portlet__navlink btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill visit" title="View Visit Places" data-id="'+row.id+'" data-token="{{ csrf_token() }}">\
                                 <i class="la la-globe"></i>\
                                 </a>\
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

    });
</script>
@stop
