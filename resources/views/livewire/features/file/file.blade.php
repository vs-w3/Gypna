<div>

    <div class="h-0 aspect-w-16 aspect-h-12">
        <img src="{{ asset($singleFile['old']) }}">
    </div>
    <label for="file_upload_ID_selector"><i class="far fa-image"></i></label>
    <input type="file" wire:model="singleFile.new" id="file_upload_ID_selector" hidden>

    <br>
</div>
