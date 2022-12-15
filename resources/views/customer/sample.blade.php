@extends('customer.layout')
@include('customer.header')
@section('content')

<body class="cus_body">
    <div class="">
        <div class="row">
            
            <div class="cus_content">
                <h5 class="mt-5" >Customer Registration</h5>
                <br />
                <form action="{{url('store_customer_info')}}" method="POST" name="cus_reg" id="cus_info_form">
                    @csrf
                    <div class="row">
                        <div>
                            <label class=lbl for="cus_title">Title :</label>
                            <select class="cus_select" name="cus_title" id="cus_title" required>
                                <option value="">None</option>
                                <option value="Mr">Mr</option>
                                <option value="Miss">Miss</option>
                                <option value="Mrs">Mrs</option>
                            </select>
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <label class=lbl>Full Name :</label>
                        <div class="col-lg-4">
                            <input type="text" name="firstName" class="form-control" placeholder="First Name"
                                required />
                        </div>
                        <div class="col-lg-4">
                            <input type="text" name="lastName" class="form-control" placeholder="Last Name " />
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-lg-4">
                            <label class=lbl>Date of Birth :</label>
                            <input type="date" name="dob" class="form-control" placeholder=" customer birth date" />
                        </div>

                        <div class="col-lg-4">
                            <label class=lbl>NIC :</label>
                            <input type="text" name="nic" class="form-control" placeholder="Customer NIC Number" />
                        </div>
                    </div>
                    <br />
                    <div class="col-lg-8">
                    <label class=lbl>Customer Address :</label>
                    <div>
                        <input type="text" name="add_line01" class="form-control" placeholder=" Address Line 01" />
                    </div>
                    <br />
                    <div>
                        <input type="text" name="add_line02" class="form-control" placeholder="Address Line 02" />
                    </div>
                </div>
                    <br />
                    <div class="row">
                        <div class="col-lg-4">
                            <label class=lbl>District :</label>
                            <input type="text" name="district" class="form-control" placeholder="District" />
                        </div>
                        <div class="col-lg-4">
                            <label class=lbl>Zip Code :</label>
                            <input type="number" name="zipCode" class="form-control" placeholder="Zip code">
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-lg-4">
                            <label class=lbl>Phone Number :</label>
                            <input type="number" name="phoneNumber" id="phoneNumber" class="form-control"
                                placeholder="ex :-1234567890" required />
                            <!-- <div id="phone_error" class="error hidden">Please enter a valid phone number</div> -->
                        </div>
                        <div class="col-lg-4">
                            <label class=lbl>E-mail :</label>
                            <input type="email" name="email" id="email" class="form-control"
                                placeholder="abc@gmail.com" />
                            <!-- <div id="email_error" class="error hidden">Please enter a valid email address </div> -->
                        </div>
                    </div>
                    <br />
                    <br />

                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">

                        <button class="btn btn-success btn-lg" type="submit">Register</button>

                        <a class="btn btn-primary btn-lg" href="{{url('customer_dashboard')}}"> Cancel</a>

                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    </div>
</body>

<body class="cus_reg_body">
    <div class="container">
        <div class="forms">
            <div class="form register">
                <span class="title">
                    Customer Register
                </span>
                <form action="">
                    <div class="row">
                        <div class="input-field">
                            <label for="">Full Name</label>
                            <div class="col-lg-4">
                                <input type="text" placeholder="Enter First Name">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" placeholder="Enter Last Name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field">
                            <label for="">Date of Birth</label>
                            <div class="col-lg-4">
                                <input type="text" placeholder="Enter Birth of Date">
                            </div>
                            <label for="">NIC</label>
                            <div class="col-lg-4">
                                <input type="text" placeholder="Enter NIC">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field">
                            <label for="">Customer Address</label>
                            <div class="col-lg-4">
                                <input type="text" placeholder="Address Line 01">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" placeholder="Address Line 02">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field">
                            <label for="">District</label>
                            <div class="col-lg-4">
                                <input type="text" placeholder="Enter District">
                            </div>
                            <label for="">Zip Code</label>
                            <div class="col-lg-4">
                                <input type="text" placeholder="Enter Zip Code">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field">
                            <label for="">Phone Number</label>
                            <div class="col-lg-4">
                                <input type="text" placeholder="Enter Phone Number">
                            </div>
                            <label for="">E-mail</label>
                            <div class="col-lg-4">
                                <input type="text" placeholder="Enter E-mail">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field button">
                            <input type="submit" value="Register" />
                        </div>
                        <div class="input-field button">
                            <input type="button" value="Cancel" />
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
@endsection