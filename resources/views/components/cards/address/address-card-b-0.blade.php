<!-- Region -->
<div class="w-full">
    <x-texts.paragraphs.section-label-title-a :label="__('words.region')" :data="$item->region->name" />
    <x-texts.paragraphs.section-label-title-a :label="__('words.city')" :data="$item->city->name" />
    <x-texts.paragraphs.section-label-title-a :label="__('words.postal_code')" :data="$item->postal_code" />
    <x-texts.paragraphs.section-label-title-a :label="__('words.address')" :data="$item->body" />
</div>
