<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
</head>
<body>
    <div>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-6 mx-auto d-grid gap-2">
                <form action="{{ url('student')}}" method="POST">
                @csrf
        <div class="form-group mb-3">
            <label class="form-label">First Name</label>
            <input type="text" name="fname" class="form-control"/>
            @error('fname')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label class="form-label">Last Name</label>
            <input type="text" name="lname" class="form-control"/>
            @error('lname')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control"/>
            @error('email')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label class="form-label">Phone Number</label>
            <input type="text" name="phone" class="form-control"/>
            @error('phone')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label class="form-label">Address</label>
            <input type="text" name="address" class="form-control"/>
            @error('address')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label class="form-label">City</label>
            <input type="text" name="city" class="form-control"/>
            @error('city')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label class="form-label">Province</label>
            <input type="text" name="province" class="form-control"/>
            @error('province')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label class="form-label">Zip Code</label>
            <input type="text" name="zip" class="form-control"/>
            @error('zip')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label class="form-label">Birthday</label>
            <input type="date" name="birthday" class="form-control"/>
            @error('birthday')
                <div>{{ $message }}</div>
            @enderror
        </div>

    <div class="form-group mb-3">
        <button class="btn btn-primary">Save</button>
    </div>

    @if(session('success'))
        <div>{{ session('success')}}</div>
    @endif



    </form>
                </div>

            </div>

        </div>
    </div>

</body>
</html>