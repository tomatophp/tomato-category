<x-tomato-admin-container :label="isset($item) ? __('Update') . ' ' . $label  : __('Add') . ' ' . $label ">
<x-splade-form class="grid grid-cols-2 gap-4" method="POST" action="{{route('admin.types.'.$for.'.'.$type.'.store')}}" :default="$item ?? []">
    <x-splade-input label="{{__('Name [AR]')}}" placeholder="{{__('Name [AR]')}}" name="name.ar" />
    <x-splade-input label="{{__('Name [EN]')}}" placeholder="{{__('Name [EN]')}}" name="name.en" />
    <x-splade-input class="col-span-2" label="{{__('Key')}}" placeholder="{{__('Key')}}" name="key" />
    <div class="flex justify-between gap-4 col-span-2">
        <x-tomato-admin-icon class="w-full" label="{{__('Icon')}}" placeholder="{{__('Icon')}}" name="icon" />
        <x-tomato-admin-color  label="{{__('Color')}}" placeholder="{{__('Color')}}" name="color" />
    </div>

    <div class="flex justify-start gap-4">
        <x-tomato-admin-submit spinner :label="__('Save')" />
        <x-tomato-admin-button secondary @click.prevent="modal.close" :label="__('Cancel')" />
    </div>
    </x-splade-form>
</x-tomato-admin-container>
