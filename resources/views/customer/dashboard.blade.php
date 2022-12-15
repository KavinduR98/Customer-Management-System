@extends('customer.layout')
@include('customer.header')
@section('content')

<head>
</head>


<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <h5 class="mt-3">Customer Dashboard</h5>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4"></div>
            <div class="col-lg-2 col-md-2 col-sm-2">
                <div style="padding-top:10px; float: right;">
                    <button type="button" class="btn btn-success" onclick="window.location='{{ url("customer_register")
                        }}'">Add Customer</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 10px">
                <table id="cus_table" class="table table-bordered yajra-datatable" cellspacing="0"
                    width="100% !important">
                    <thead style="background-color: #9cc1ea;">
                        <tr>
                            <th class="text-center">
                                Title
                            </th>
                            <th class="text-center">
                                First Name
                            </th>
                            <th class="text-center">
                                NIC
                            </th>
                            <th class="text-center">
                                Address Line 01
                            </th>
                            <th class="text-center">
                                Address Line 02
                            </th>
                            <th class="text-center">
                                District
                            </th>
                            <th class="text-center">
                                Phone Number
                            </th>
                            <th class="text-center">
                                E-mail
                            </th>
                            <th class="text-center">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</body>

<script type="text/javascript">
    
    $(function () {
  
  $(".yajra-datatable").dataTable().fnDestroy();
  
  $('.yajra-datatable').DataTable({
      "processing": true,
      "ajax": {
          "url": "get_all_cus_data",
          "type": "GET",
      },
      "columns": [
          {"data": "id"},
          {"data": "cus_title"},
          {"data": "firstName"},
          {"data": "lastName"},
          {"data": "dob"},
          {"data": "nic"},
          {"data": "add_line01"},
          {"data": "add_line02"},
          {"data": "district"},
          {"data": "zipCode"},
          {"data": "phoneNumber"},
          {"data": "email"},
           
          //add "Edit" button
          
          {
              sortable: false,
              "render": function (data, type, full, meta) {
                  var id = ""+full.id;
                  return '<a style="color:#000000" href="cus_edit/'+id+'"  role="button" class="text-center"><button type="button" class="btn btn-primary">Edit</button></a>';
              }
          },
             
      ],
      "columnDefs": [
          { className: "text-center", "targets": [0 ,1,2]}
      ],
      "order": [[ 1, "desc" ]],
      "pageLength": 5,
      
  
  });
     
      
    });
  </script>

@endsection
@include('customer.footer')
