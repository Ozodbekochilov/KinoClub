<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laptops</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        #ozod {
            border: 3px solid black;
            border-radius: 10px;
            width: 500px;
            text-align: center;


        }

        #iu:hover {
            width: 250px;
        }

        #iu {
            color: white;
        }


        h1:hover {
            color: red
        }

        a:hover {
            text-decoration: none;
            color: white;
        }

        a {
            color: white;
        }



        th {
            color: red;
        }

        td {
            color: white;
        }
    </style>
</head>

<body style="background-image: url(asset/foto19.jpg);background-repeat: no-repeat; background-size: cover;">
    <br>
    <div style="padding-left:450px;">

        <div id="ozod">
            <br>
            <h1 style="font-size:40px; color:white;">Laptops</h1>

            <br>
            <form action="/laptop" method="POST">
                @csrf
                <label class="label" style="font-size:20px; color:white;" for=""> Name</label>
                <br>
                <input id="iu" class="btn" style="border: 1px solid black" type="text" name="name">

                <br>
                <br>

                <label class="label" style="font-size:20px; color:white;" class="label" for="">
                    Manufacturer</label>
                <br>
                <input id="iu" class="btn" style="border: 1px solid black" type="text" name="manufacturer">

                <br>
                <br>

                <label class="label" style="font-size:20px; color:white;" class="label" for=""> Os</label>
                <br>
                <input id="iu" class="btn " style="border: 1px solid black;" type="text" name="os">

                <br>
                <br>

                <label class="label" style="font-size:20px; color:white;" class="label" for=""> Ram</label>
                <br>
                <input id="iu" class="btn " style="border: 1px solid black;" type="text" name="ram">

                <br>
                <br>

                <label class="label" style="font-size:20px; color:white;" class="label" for=""> Type</label>
                <br>
                <input id="iu" class="btn " style="border: 1px solid black;" type="text" name="type">

                <br>
                <br>

                <label class="label" style="font-size:20px; color:white;" class="label" for=""> Date</label>
                <br>
                <input id="iu" class="btn " style="border: 1px solid black; color:white;" type="date"
                    name="date">


                <br>
                <br>
                <button id="rtt" class="btn btn-primary" type="submit">OK</button>
                <button id="rt" class="btn btn-danger" type="submit"><a
                        href="http://kino.loc/animal">Animal</a></button>
            </form>
            <br>
        </div>
    </div>
    <br>

    <div class="container">

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Ccal</th>
                    <th>Type</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($laptops as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->manufacturer }}</td>
                        <td>{{ $item->os }}</td>
                        <td>{{ $item->ram }}</td>
                        <td>{{ $item->type }}</td>
                        <td>{{ $item->date }}</td>
                        <td><a href="/delete/{{ $item->id }}"><button class="btn btn-danger">Delete</button> </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
