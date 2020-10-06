<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container mt-5">
    <form action="{{route('apply-now.store')}}" method="post">
        @csrf

        <div class="form-row">
            <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <label for="inputEmail4">First Name</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="first name" name="first_name">
            </div>
            <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <label for="inputPassword4">Last Name</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="last name" name="last_name">
            </div>
            <div class="form-group  col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <label for="inputPassword4">Father Name</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="last name" name="father_name">
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <label for="inputPassword4">CNIC</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="12345-1234567-1" name="cnic">
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <label for="inputPassword4">Phone No</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="+92 300-XXXXXXX" name="phone_number">
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <label for="inputPassword4">Email</label>
                <input type="email" class="form-control" id="inputPassword4" placeholder="testing@testing.com" name="email">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress2">Street Address</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="street_address">
        </div>
        <div class="form-row">
            <div class="form-group col-xs-12 col-sm-12 col-md-2">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity" name="city_name">
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-4">
                <label for="inputState">State</label>
                <select id="inputState" class="form-control" name="state">
                    <option value="">Select your state</option>
                    <option value="islamabad">Islamabad Capital Territory</option>
                    <option value="kpk">Khyber Pakhtunkhwa</option>
                    <option value="punjab">Punjab</option>
                    <option value="sindh">Sindh</option>
                </select>
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-4">
                <label for="inputState">Country</label>
                <select id="inputState" class="form-control" name="country">
                    <option value="">Select your Country</option>
                    <option value="pakistan">Pakistan</option>
                </select>
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip" name="zip">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Apply Now</button>
    </form>
</div>


</body>
</html>
