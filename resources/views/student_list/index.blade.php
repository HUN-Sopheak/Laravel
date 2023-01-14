<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Screen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container-fluid">
        <div class="display-1 text-uppercase text-danger">Student table</div>
        <div class="float-end my-3">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fa-solid fa-plus"></i>
                Add
            </button>
        </div>
        <div class="search-bar mt-5">
            <input type="search" class="form-control w-25" placeholder="Search Here">
        </div>
        <table class="table mt-2 table-hover table-bordered text-center">
            <thead class="text-capitalize ">
                <th>ID</th>
                <th>Action</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>gender</th>
                <th>address</th>
                <th>phone</th>
                <th>email</th>

            </thead>
            <tbody>
                {{-- <tr>
                    <td>1</td>
                    <td>
                        <button class="btn btn-success">
                            <i class="fa-solid fa-pen-to-square"></i>&nbsp;
                            Edit</button>
                        <button class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i>&nbsp;
                            Delete</button>
                    </td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr> --}}
            </tbody>
        </table>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Student</h1>

                </div>
                <div class="modal-body">
                    <form action="">
                        <label for="" class="form-label">First Name *</label>
                        <input type="text" class="form-control my-2" placeholder="First Name">
                        <label for="" class="form-label">Last Name *</label>
                        <input type="text" class="form-control my-2" placeholder="Last Name">
                        <label for="" class="form-label">Gender *</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Please Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <label for="" class="form-label">Address *</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Please Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <label for="" class="form-label">Phone *</label>
                        <input type="tel" class="form-control my-2" placeholder="Phone">
                        <label for="" class="form-label">Email *</label>
                        <input type="email" class="form-control my-2" placeholder="Email">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
