<div class="my-10">
    <label for="{{ $name }}">
        {{ isset($label) ? $label : null }}
    </label>
    <select class="mt-2 w-full border gypna-v2-border-mid-green rounded-md gypna-v2-bg-white-green gypna-v2-text-mid-green auth-input" 
        name="userable_type" id="{{ $name }}"
        x-model="profile_type">
        @foreach ( config('user.profile') as $type)
            <option value="{{ $type['model'] }}">{{ __('words.' . $type['identifier']) }}</option>
        @endforeach
    </select>
</div>