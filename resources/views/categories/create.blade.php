<x-splade-modal class="font-main">
    <h1 class="text-2xl font-bold mb-4">{{trans('tomato-admin::global.crud.create')}} {{__('Category')}}</h1>

    <x-splade-form class="flex flex-col space-y-4" action="{{route('admin.categories.store')}}" method="post">

        <x-splade-select label="{{__('For')}}" name="for" type="text"  placeholder="{{__('For')}}" >
            @foreach(config('tomato-category.types') as $key=>$type)
                <option value="{{$key}}">{{__($type)}}</option>
            @endforeach
        </x-splade-select>

          <x-splade-input label="{{__('Name')}}" name="name" type="text"  placeholder="{{__('Name')}}" />
          <x-splade-input label="{{__('Slug')}}" name="slug" type="text"  placeholder="{{__('Slug')}}" />

          <x-splade-select label="{{__('Parent Category')}}" placeholder="{{__('Parent Category')}}" name="parent_id" remote-url="/admin/categories/api" remote-root="model.data" option-label=name option-value="id" choices/>
          <x-splade-textarea label="{{__('Description')}}" name="description" type="text"  placeholder="{{__('Description')}}" />

          <x-splade-checkbox label="{{__('Active')}}" name="activated" label="Activated" />
          <x-splade-checkbox label="{{__('Show On Menu')}}" name="menu" label="Menu" />

        <x-splade-submit label="{{trans('tomato-admin::global.crud.create-new')}} {{__('Category')}}" :spinner="true" />
    </x-splade-form>
</x-splade-modal>
