<x-splade-modal class="font-main">
    <h1 class="text-2xl font-bold mb-4">{{trans('tomato-admin::global.crud.create')}} {{__('Type')}}</h1>

    <x-splade-form class="flex flex-col space-y-4" action="{{route('admin.types.store')}}" method="post">
        
          <x-splade-input label="{{__('Name')}}" name="name" type="text"  placeholder="Name" />
          <x-splade-input label="{{__('Key')}}" name="key" type="text"  placeholder="Key" />
          <x-splade-input label="{{__('Description')}}" name="description" type="text"  placeholder="Description" />
          
          

        <x-splade-submit label="{{trans('tomato-admin::global.crud.create-new')}} {{__('Type')}}" :spinner="true" />
    </x-splade-form>
</x-splade-modal>
