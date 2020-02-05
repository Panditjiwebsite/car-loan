<?php
    $theme = config('constants.ADMIN_THEME');
?>
@extends('admin.layouts.'. $theme .'.template')

@section('title', 'Users')

@section('content')
<?php $adminURL = config('constants.ADMIN_URL'); ?>

<?php
    $breadcrumb = array(
        'listPromoBanner' => 'Subscription',
        'javascript:void(0)' => 'Subscription List'
    );
?>
                        
                        <!-- begin:: Content -->
                        <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
                            
                            <div class="kt-portlet kt-portlet--mobile">
                                <div class="kt-portlet__head kt-portlet__head--lg">
                                    <div class="kt-portlet__head-label">
                                        <span class="kt-portlet__head-icon">
                                            <i class="kt-font-brand flaticon2-line-chart"></i>
                                        </span>
                                        <h3 class="kt-portlet__head-title">
                                            Users
                                        </h3>
                                    </div>
                                    <div class="kt-portlet__head-toolbar">
                                        <div class="kt-portlet__head-wrapper">
                                            
                                            <div class="dropdown dropdown-inline">
                                                
                                                <?php $export = 'admin/listusers/ExportCSV' ?>
                                                 <a href="{{ url($export) }}" class="btn btn-brand m-btn--custom m-btn--icon m-btn--air ">
                                                    <span>
                                                        <i class="la la-download"></i>
                                                        <span>
                                                            Export
                                                        </span>
                                                    </span>
                                                </a>  
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>

                           

                          
                                <div class="kt-portlet__body">

                                    <!--begin: Search Form -->
                                    
                                        <div class="row align-items-center">
                                            
                                            <div class="col-xl-4 order-1 order-xl-2 kt-align-right">
                                                
                                                @if(session('success_msg'))
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
                                                @endif
                                                <!--div class="kt-separator kt-separator--border-dashed kt-separator--space-lg d-xl-none"></div-->
                                            </div>
                                        </div>
                                    

                                    <!--begin: Search Form -->
                                    <div class="kt-form kt-form--label-right kt-margin-b-10">
                                        <div class="row align-items-center">
                                            <div class="col-xl-8 order-2 order-xl-1">
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
                                            <div class="col-xl-4 order-1 order-xl-2 kt-align-right">
                                                <a href="#" class="btn btn-default kt-hidden">
                                                    <i class="la la-cart-plus"></i> Users
                                                </a>
                                                <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg d-xl-none"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--end: Search Form -->
                                </div>
                                <div class="kt-portlet__body kt-portlet__body--fit">
                                    <input type="hidden" value="{{ csrf_token() }}" id="token">
                                    <!--begin: Datatable -->
                                    <div class="m_datatable_user" id="tbl_datatable_list"></div>

                                    <!--end: Datatable -->
                                </div>
                            </div>
                        </div>

                        <!-- end:: Content -->

 <style>
        #tbl_contact_list table tr th:first-child{cursor: default !important;}
        #tbl_contact_list table tr th:last-child{cursor: default !important;}
</style>
@stop





@section('js_footer_after_content')
<script type="text/javascript">
function datatableCounter(datatable, index) {
    return ((datatable.API.params.pagination.page -1 ) * datatable.API.params.pagination.perpage) + (index+1);
    }   
    var datatable;

    var AjaxBasedDatatables = function() {
        //== Private functions
        //alert('hello');
        var qstring = "";
        
        var companyInit = function() {
            //alert('Hell');
            datatable = $('#tbl_datatable_list').KTDatatable({
                // datasource definition
                //alert(665566);
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            method: 'GET',
                            url: ADMIN_URL + 'ajaxListusers?q='+qstring,
                            map: function(raw) {
                                //console.log(raw);
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
                    width: 50
                },
                {
                    field: 'created_at',
                    title: 'User Since',
                    width: 80
                },
                {
                    field: 'first_name', 
                    title: 'Name',
                    width: 70
                },
                {
                    field: 'user_type',
                    title: 'Members',
                    width: 80
                },
                {
                    field: 'subscription_title',
                    title: 'Subscription',
                    width: 80
                },{
                    field: 'revenue',
                    title: 'Revenue',
                    width: 80
                },{
                    field: 'end_date',
                    title: 'Last Renewed on',
                    width: 80
                },{
                    field: 'status',
                    title: 'Status',
                    width: 80
                },
                       
                
               {
                    field: '',
                    width: 200,
                    title: 'Action',
                    sortable: false,
                    overflow: 'visible',
                    template: function (row, index, datatable) {
                        var dropup = (datatable.getPageSize() - index) <= 4 ? 'dropup' : '';
                        
                        return '\
                        <a href="'+ ADMIN_URL +'userdetails/'+ row.id +'" class="m-portlet__nav-link btn m-btn m-btn--hover-info m-btn--icon m-btn--icon-only m-btn--pill" title="View"><i class="la la-eye"></i>\
                        </a>\
                            <a href="'+ ADMIN_URL +'users_edit/'+ row.id +'" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit">\
                                 <i class="la la-edit"></i>\
                             </a>\
                             <a href="javascript:void(0)" class="m-portlet__navlink btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill delete" title="Delete" data-id="'+row.id+'" data-token="{{ csrf_token() }}">\
                                 <i class="la la-trash"></i>\
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
    

    jQuery(document).ready(function() {
         
        AjaxBasedDatatables.init();

        $('.m_datatable_user').on('click', '.delete', function(e){
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
                            url: ADMIN_URL + "deleteUsers",
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
       
    });

    


</script>
@stop
