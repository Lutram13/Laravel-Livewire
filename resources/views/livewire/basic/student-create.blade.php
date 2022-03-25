{{-- Start Form --}}
<div class="row">
    <div class="col-xl-8 mx-auto">
        <div class="card">
            <div class="card-body">
                <div class="border p-3 rounded">
                    <h6 class="mb-0 text-uppercase">Basic Form</h6>
                    <hr>
                    <form wire:submit.prevent="addStudent"class="row g-3">
                        <div class="col-12 mb-2 mt-2">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" wire:model="name" class="form-control @error('name') is-invalid @enderror">
                                @error('name')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-12">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">+ Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
{{-- End Form --}}


