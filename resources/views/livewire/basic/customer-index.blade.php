<div>
    @if (session()->has('message'))
        <div class="alert alert-dismissible fade show py-2 bg-success">
            <div class="d-flex align-items-center">
                <div class="fs-3 text-white">
                    <ion-icon name="checkmark-circle-sharp" role="img" class="md hydrated"
                        aria-label="checkmark circle sharp"></ion-icon>
                </div>
                <div class="ms-3">
                    <div class="text-white">{{ session('message') }}</div>
                </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>        
    @endif

    {{-- Start Table --}}
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center mb-2">
                <h5 class="mb-0">Customer Details</h5>
                <div class="ms-auto position-relative">
                    <div class="d-grid">
                        <button wire:click="create()" type="submit" class="btn btn-primary">+ Add</button>
                    </div>
                </div>
                @if($isModalOpen)
                @include('livewire.basic.customer-create')
                @endif
                {{-- <button wire:click="create()"
                        class="my-4 inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base font-bold text-white shadow-sm hover:bg-red-700">
                        Create customer
                </button> --}}
            </div>
            
            <div class="table-responsive mt-3">
                <table class="table align-middle">
                    <thead class="table-secondary">
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        @foreach($customers as $customer)

                        <tr>
                            <td>{{ $i }} <?php $i++ ?></td>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->mobile }}</td>
                            <td>
                                <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                    <a wire:click="edit({{ $customer->id }})"
                                        class="text-warning" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" title="" data-bs-original-title="Edit"
                                        aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                    <a wire:click="delete({{ $customer->id }})" 
                                        class="text-danger" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" title="" data-bs-original-title="Delete"
                                        aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>       
        </div>
    </div>
    {{-- End Table --}}
</div>

