@extends('customer.layout')
@include('customer.header')
@section('content')

<head>
    <style>
        .input_row {
            padding: 10px;
        }
    </style>
</head>

<div class="content-wrapper">
    <div class="col-xl-12 col-md-12 col-sm-12">
        <div class="row">
            <div class="col-xl-3 col-md-3 col-sm-3"></div>
            <div class="col-xl-6 col-md-6 col-sm-6">
                <div class="card" style="margin-top: 20px; margin-bottom: 20px;">
                    <div class="card-header">
                        <h4>Register Customer</h4>
                    </div>
                    <div class="card-content">
                        <form class="form-horizontal" action="" method="post" id="cus_form">
                            {{csrf_field()}}
                            <div class="row" style="padding: 20px; padding-bottom: 0px;">
                                <div class="col-xl-3 col-md-3 col-sm-3">
                                    <select name="pets" id="cus_title" style="width:100px; border-radius: 5px;"
                                        required>
                                        <option hidden="true">--Title--</option>
                                        <option value="mr">Mr</option>
                                        <option value="miss">Miss</option>
                                        <option value="mrs">Mrs</option>
                                    </select>
                                </div>
                                <div class="col-xl-9 col-md-9 col-sm-9"></div>
                            </div>
                            <div class="row" style="padding: 20px;">
                                <div class="col-xl-6 col-md-6 col-sm-6">
                                    <div class="form-outline">
                                        <input type="text" id="fname" name="fname" class="form-control"
                                            autocomplete="off" / required>
                                        <label class="form-label" for="form12">First Name</label>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-sm-6">
                                    <div class="form-outline">
                                        <input type="text" id="lname" name="lname" class="form-control"
                                            autocomplete="off" / required>
                                        <label class="form-label" for="form12">Last Name</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="padding: 20px;">
                                <div class="col-xl-6 col-md-6 col-sm-6">
                                    <div class="form-outline">
                                        <input type="date" id="dob" name="dob" class="form-control" autocomplete="off" /
                                            required>
                                        <label class="form-label" for="form12">Date of Birth</label>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-sm-6">
                                    <div class="form-outline">
                                        <input type="text" id="nic" name="nic" class="form-control" autocomplete="off" /
                                            required>
                                        <label class="form-label" for="form12">NIC</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="padding: 20px;">
                                <div class="col-xl-6 col-md-6 col-sm-6">
                                    <div class="form-outline">
                                        <input type="text" id="add01" name="add01" class="form-control"
                                            autocomplete="off" / required>
                                        <label class="form-label" for="form12">Address Line 01</label>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-sm-6">
                                    <div class="form-outline">
                                        <input type="text" id="add02" name="add02" class="form-control"
                                            autocomplete="off" / required>
                                        <label class="form-label" for="form12">Address Line 02</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="padding: 20px;">
                                <div class="col-xl-6 col-md-6 col-sm-6">
                                    <div class="form-outline">
                                        <input type="text" id="district" name="district" class="form-control"
                                            autocomplete="off" / required>
                                        <label class="form-label" for="form12">District</label>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-sm-6">
                                    <div class="form-outline">
                                        <input type="text" id="zipcode" name="zipcode" class="form-control"
                                            autocomplete="off" / required>
                                        <label class="form-label" for="form12">Zip Code</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="padding: 20px;">
                                <div class="col-xl-6 col-md-6 col-sm-6">
                                    <div class="form-outline">
                                        <input type="number" id="phone" name="phone" class="form-control"
                                            autocomplete="off" / required>
                                        <label class="form-label" for="form12">Phone Number</label>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6 col-sm-6">
                                    <div class="form-outline">
                                        <input type="text" id="email" name="email" class="form-control"
                                            autocomplete="off" / required>
                                        <label class="form-label" for="form12">E-mail</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row" style="padding-bottom:15px">
                        <div class="col-xl-3 col-md-3 col-sm-3"></div>
                        <div class="col-xl-3 col-md-3 col-sm-3" style="padding-left: 45px;">
                            <button type="button" class="btn btn-success" onclick="save_details();">Submit</button>
                        </div>
                        <div class="col-xl-3 col-md-3 col-sm-3" style="padding-left: 40px;">
                            <button type="button" class="btn btn-primary" onclick="cancelform()">Cancel</button>
                        </div>
                        <div class="col-xl-3 col-md-3 col-sm-3"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-3 col-sm-3"></div>
    </div>
</div>
</div>

<script>

    function save_details() {
        
        var cus_title = document.getElementById('cus_title').selectedOptions[0].value;
        var fname = document.getElementById('fname');
        var lname = document.getElementById('lname');
        var dob = document.getElementById('dob');
        var nic = document.getElementById('nic');
        var add01 = document.getElementById('add01');
        var add02 = document.getElementById('add02');
        var district = document.getElementById('district');
        var zipcode = document.getElementById('zipcode');
        var phone = document.getElementById('phone');
        var email = document.getElementById('email');

        $.ajax({
            url: '/save_cus_det',
            type: 'GET',
            data: {
                cus_title: cus_title,
                fname: fname,
                lname: lname,
                dob: dob,
                nic: nic,
                // add01: add01,
                // add02: add02,
                // zipcode: zipcode,
                // phone: phone,
                // email: email,
            },
            success: function (response) {


            }

        });
    }

</script>

<script>
    function cancelform(){
        window.location.reload();
    } 
</script>

@include('customer.footer')
@endsection