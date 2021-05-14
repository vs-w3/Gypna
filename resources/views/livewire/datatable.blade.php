<div>
    <table class="border">
        <thead>
            <tr class="border-b">
                @if (config('datatable.' . $setting . '.columns.actions'))
                    <th colspan="2"class="p-3 font-bold text-xl">
                        Actions
                    </th>
                @endif

                @foreach (config('datatable.' . $setting . '.columns.data') as $item)
                    <th class="px-3 font-bold text-xl">
                        {{ $item['title'] }}
                    </th>
                @endforeach

                @if (config('datatable.' . $setting . '.columns.flags.lan'))
                    @foreach (config('datatable.speciality.columns.flags.lan') as $lan)
                        <th class="p-3 font-bold text-xl">
                            {{ $lan['title'] }}
                        </th>
                    @endforeach
                @endif
            </tr>
        </thead>

        <!-- DATA -->
        <tbody>
            @foreach ($collection as $data)
                <tr>
                    <!-- Actions -->
                    @if (config('datatable.' . $setting . '.columns.actions'))
                        @foreach (config('datatable.' . $setting . '.columns.actions') as $item)
                            <td class="px-3 font-bold border-b">
                                <a href="{{ url($item['uri'] . $data->id) }}">
                                    <i class="{{ config('datatable.design.icon.' . $item['action'] )}}"></i> 
                                </a>
                            </td>
                        @endforeach
                    @endif

                    <!-- Data -->
                    @foreach (config('datatable.' . $setting . '.columns.data') as $item)
                        <td class="py-2 px-5 font-semibold border">
                            {{ $data->{$item['attribute']} }}
                        </td>
                    @endforeach

                    <!-- Flags -->
                    @if (config('datatable.' . $setting . '.columns.flags.lan'))
                        @foreach (config('datatable.speciality.columns.flags.lan') as $lan)
                        <td class="p-3 border-b font-bold text-xl">
                            @if ($data->hasTranslation($lan["code"]))
                                <i class="{{ config('datatable.design.icon.complete') }} text-nt-14"></i>
                            @else
                                <i class="{{ config('datatable.design.icon.uncomplete') }}"></i>
                            @endif
                        </td>
                        @endforeach
                    @endif
                </tr>  
            @endforeach
        </tbody>
        </table>
</div>
