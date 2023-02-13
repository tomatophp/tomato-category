<x-splade-modal class="font-main">
    <h1 class="text-2xl font-bold mb-4">{{trans('tomato-admin::global.crud.edit')}} {{__('Status')}} #{{$model->id}}</h1>

    <x-splade-form class="flex flex-col space-y-4" action="{{route('admin.status.update', $model->id)}}" method="post" :default="$model">
        
          <x-splade-input label="{{__('Name')}}" name="name" type="text"  placeholder="Name" />
          <x-splade-input label="{{__('Description')}}" name="description" type="text"  placeholder="Description" />
          
          

        <x-splade-submit label="{{trans('tomato-admin::global.crud.update')}} {{__('Status')}}" :spinner="true" />
    </x-splade-form>
</x-splade-modal>
