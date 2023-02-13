<x-splade-modal class="font-main">
    <h1 class="text-2xl font-bold mb-4">{{trans('tomato-admin::global.crud.edit')}} {{__('CategoriesMeta')}} #{{$model->id}}</h1>

    <x-splade-form class="flex flex-col space-y-4" action="{{route('admin.categories-metas.update', $model->id)}}" method="post" :default="$model">
        
          <x-splade-select label="{{__('category')}}" placeholder="Category id" name="category_id" remote-url="/admin/categories/api" remote-root="model.data" option-label=name option-`value=`"id" choices/>
          
          <x-splade-input label="{{__('Model type')}}" name="model_type" type="text"  placeholder="Model type" />
          <x-splade-input label="{{__('Key')}}" name="key" type="text"  placeholder="Key" />
          

        <x-splade-submit label="{{trans('tomato-admin::global.crud.update')}} {{__('CategoriesMeta')}}" :spinner="true" />
    </x-splade-form>
</x-splade-modal>
