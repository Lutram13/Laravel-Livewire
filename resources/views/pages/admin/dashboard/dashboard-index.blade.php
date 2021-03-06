@extends('layouts.admin.app')

@section('title', 'Dasboard')
@section('subtitle', 'Dasboard')

@section('contents')    


{{-- Start Form --}}
<div class="row">
    <div class="col-xl-8 mx-auto">

        <div class="card">
            <div class="card-body">
                <div class="border p-3 rounded">
                    <h6 class="mb-0 text-uppercase">Basic Form</h6>
                    <hr>
                    <form class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Email ID</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Password</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-12">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
{{-- End Form --}}

{{-- Start Table --}}
<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-center">
            <h5 class="mb-0">Customer Details</h5>
            <form class="ms-auto position-relative">
                <div class="position-absolute top-50 translate-middle-y search-icon px-3">
                    <ion-icon name="search-sharp"></ion-icon>
                </div>
                <input class="form-control ps-5" type="text" placeholder="search">
            </form>
        </div>
        <div class="table-responsive mt-3">
            <table class="table align-middle">
                <thead class="table-secondary">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Pin Code</th>
                        <th>Country</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <div class="d-flex align-items-center gap-3 cursor-pointer">
                                <img src="https://via.placeholder.com/110X110/212529/fff" class="rounded-circle"
                                    width="44" height="44" alt="">
                                <div class="">
                                    <p class="mb-0">Thomas Hardy</p>
                                </div>
                            </div>
                        </td>
                        <td>89 Chicago UK</td>
                        <td>Chicago</td>
                        <td>8574201</td>
                        <td>United Kingdom</td>
                        <td>
                            <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="" data-bs-original-title="Views"
                                    aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="" data-bs-original-title="Edit"
                                    aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="" data-bs-original-title="Delete"
                                    aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            <div class="d-flex align-items-center gap-3 cursor-pointer">
                                <img src="https://via.placeholder.com/110X110/212529/fff" class="rounded-circle"
                                    width="44" height="44" alt="">
                                <div class="">
                                    <p class="mb-0">Victoria Hardy</p>
                                </div>
                            </div>
                        </td>
                        <td>77 New York UK</td>
                        <td>New York</td>
                        <td>8956370</td>
                        <td>United Kingdom</td>
                        <td>
                            <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="" data-bs-original-title="Views"
                                    aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="" data-bs-original-title="Edit"
                                    aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="" data-bs-original-title="Delete"
                                    aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            <div class="d-flex align-items-center gap-3 cursor-pointer">
                                <img src="https://via.placeholder.com/110X110/212529/fff" class="rounded-circle"
                                    width="44" height="44" alt="">
                                <div class="">
                                    <p class="mb-0">Maria Anders</p>
                                </div>
                            </div>
                        </td>
                        <td>56 Poland UK</td>
                        <td>Poland</td>
                        <td>3265840</td>
                        <td>United Kingdom</td>
                        <td>
                            <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="" data-bs-original-title="Views"
                                    aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="" data-bs-original-title="Edit"
                                    aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="" data-bs-original-title="Delete"
                                    aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>
                            <div class="d-flex align-items-center gap-3 cursor-pointer">
                                <img src="https://via.placeholder.com/110X110/212529/fff" class="rounded-circle"
                                    width="44" height="44" alt="">
                                <div class="">
                                    <p class="mb-0">Maria Anders</p>
                                </div>
                            </div>
                        </td>
                        <td>47-A Delhi India</td>
                        <td>Delhi</td>
                        <td>6535420</td>
                        <td>India</td>
                        <td>
                            <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="" data-bs-original-title="Views"
                                    aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="" data-bs-original-title="Edit"
                                    aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="" data-bs-original-title="Delete"
                                    aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>
                            <div class="d-flex align-items-center gap-3 cursor-pointer">
                                <img src="https://via.placeholder.com/110X110/212529/fff" class="rounded-circle"
                                    width="44" height="44" alt="">
                                <div class="">
                                    <p class="mb-0">Martin Loother</p>
                                </div>
                            </div>
                        </td>
                        <td>37 B Columbo Shri Lanka</td>
                        <td>Columbo</td>
                        <td>9645230</td>
                        <td>Shri Lanka</td>
                        <td>
                            <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="" data-bs-original-title="Views"
                                    aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="" data-bs-original-title="Edit"
                                    aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="" data-bs-original-title="Delete"
                                    aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>
                            <div class="d-flex align-items-center gap-3 cursor-pointer">
                                <img src="https://via.placeholder.com/110X110/212529/fff" class="rounded-circle"
                                    width="44" height="44" alt="">
                                <div class="">
                                    <p class="mb-0">Martin Loother</p>
                                </div>
                            </div>
                        </td>
                        <td>68 New York UK</td>
                        <td>New York</td>
                        <td>7854230</td>
                        <td>United Kingdom</td>
                        <td>
                            <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="" data-bs-original-title="Views"
                                    aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="" data-bs-original-title="Edit"
                                    aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom" title="" data-bs-original-title="Delete"
                                    aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
{{-- End Table --}}





@endsection