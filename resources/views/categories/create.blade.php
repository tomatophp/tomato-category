<x-splade-modal class="font-main">
    <h1 class="text-2xl font-bold mb-4">{{trans('tomato-admin::global.crud.create')}} {{__('Category')}}</h1>

    <x-splade-form class="flex flex-col space-y-4" action="{{route('admin.categories.store')}}" method="post">

          <x-splade-select label="{{__('parent')}}" placeholder="Parent" name="parent_id" remote-url="/admin/categories/api" remote-root="model.data" option-label=name option-value="id" choices/>
          <x-splade-input label="{{__('Name')}}" name="name" type="text"  placeholder="Name" />
          <x-splade-input label="{{__('Slug')}}" name="slug" type="text"  placeholder="Slug" />
          <x-splade-input label="{{__('Description')}}" name="description" type="text"  placeholder="Description" />


          <x-splade-checkbox label="{{__('Activated')}}" name="activated" label="Activated" />
          <x-splade-checkbox label="{{__('Menu')}}" name="menu" label="Menu" />

        <x-splade-submit label="{{trans('tomato-admin::global.crud.create-new')}} {{__('Category')}}" :spinner="true" />
    </x-splade-form>
</x-splade-modal>
