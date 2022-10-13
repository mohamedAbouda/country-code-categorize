<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
</head>

<body class="antialiased">
    <div style="margin: 40px;">
        <form class="form-inline">
            <div class="form-group">
                <label for="exampleInputName2">Select Country</label>
                <select class="form-control" name="country_code">
                    <option disabled selected>Please Select Country</option>
                    <option value="+237">Cameroon</option>
                    <option value="+251">Ethiopia</option>
                    <option value="+212">Morocco</option>
                    <option value="+258">Mozambique</option>
                    <option value="+256">Uganda</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail2">Valid</label>
                <select class="form-control" name="valid">
                    <option disabled selected>Please Select status</option>
                    <option value="1">Valid</option>
                    <option value="0">Invalid</option>
                </select>
            </div>
            <button type="submit" class="btn btn-default">Filter</button>
            <button type="button" onclick="window.location = window.location.pathname"
                class="btn btn-danger">Reset</button>
        </form>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Country</th>
                <th>State</th>
                <th>Country Code</th>
                <th>Phone Number</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <th>{{ $customer->country }}</th>
                    <td>{{ $customer->is_valid ? 'valid' : 'not valid' }}</td>
                    <td>{{ $customer->code }}</td>
                    <td>{{ $customer->phone_number }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $customers->appends(request()->input())->links() }}
</body>

</html>
