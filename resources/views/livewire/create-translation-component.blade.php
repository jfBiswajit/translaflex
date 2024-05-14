<div>
    <form class="container w-50 mt-5" wire:submit.prevent="handleSubmission">
        <div class="row mb-3">
            <div class="col">
                <label class="form-label"><b>Group</b></label>
                <input required wire:model='group' type="text" class="form-control">
            </div>
            <div class="col">
                <label class="form-label"><b>Key</b></label>
                <input required wire:model='key' type="text" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label class="form-label"><b>English</b></label>
                <input required wire:model='en' type="text" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label class="form-label"><b>Bangla</b></label>
                <input required wire:model='bn' type="text" class="form-control">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <button class="btn btn-secondary w-100 rounded-pill">ADD TRANSLATION</button>
            </div>
        </div>
    </form>
</div>
