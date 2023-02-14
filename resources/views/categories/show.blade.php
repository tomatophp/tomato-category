<x-splade-modal class="font-main">
    <h1 class="text-2xl font-bold mb-4">{{trans('tomato-admin::global.crud.view')}} {{ __('Category') }} #{{$model->id}}</h1>

    <div class="flex flex-col space-y-4">

        @if( $model->parent)
          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      {{__('Parent')}}
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->parent->name}}
                  </h3>
              </div>
          </div>
        @endif

          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      {{__('Name')}}
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->name}}
                  </h3>
              </div>
          </div>

          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      {{__('Slug')}}
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      {{ $model->slug}}
                  </h3>
              </div>
          </div>

          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      {{__('Description')}}
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      @if($model->description)
                          {{$model->description}}
                      @else
                          -
                      @endif
                  </h3>
              </div>
          </div>



          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      {{__('Activated')}}
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      @if($model->activated)
                          <x-heroicon-s-check-circle class="text-green-600 h-8 w-8 ltr:mr-2 rtl:ml-2"/>
                      @else
                          <x-heroicon-s-x-circle class="text-red-600 h-8 w-8 ltr:mr-2 rtl:ml-2"/>
                      @endif
                  </h3>
              </div>
          </div>

          <div class="flex justify-between">
              <div>
                  <h3 class="text-lg font-bold">
                      {{__('Show On Menu')}}
                  </h3>
              </div>
              <div>
                  <h3 class="text-lg">
                      @if($model->menu)
                          <x-heroicon-s-check-circle class="text-green-600 h-8 w-8 ltr:mr-2 rtl:ml-2"/>
                      @else
                          <x-heroicon-s-x-circle class="text-red-600 h-8 w-8 ltr:mr-2 rtl:ml-2"/>
                      @endif
                  </h3>
              </div>
          </div>

    </div>
</x-splade-modal>
