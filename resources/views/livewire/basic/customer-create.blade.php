<div class="modal fade show" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: block;"
    aria-modal="true" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button wire:click="closeModalPopover()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3">
                    <div class="col-12">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="Enter Name" wire:model="name">
                        @error('name') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="col-12">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" placeholder="Enter Email" wire:model="email">
                        @error('email') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="col-12">
                        <label class="form-label">Mobile</label>
                        <input type="text" class="form-control" placeholder="Enter Mobile" wire:model="mobile">
                        @error('mobile') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                </form>                
            </div>
            <div class="modal-footer">
                <button wire:click="closeModalPopover()" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button wire:click.prevent="store()" type="button" class="btn btn-primary">Store</button>
            </div>
        </div>
    </div>
</div>