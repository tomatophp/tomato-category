<x-tomato-admin-layout>
    <x-slot:header>
        {{ __('Type') }}
    </x-slot:header>
    <x-slot:icon>
        bx bxs-check-circle
    </x-slot:icon>
    <x-slot:buttons>
        <x-tomato-admin-button modal :href="route('admin.types.create')">
            {{trans('tomato-admin::global.crud.create-new')}} {{__('Type')}}
        </x-tomato-admin-button>
    </x-slot:buttons>


    <div class="pb-12" v-cloak>
        <div class="mx-auto">
            <x-splade-table :for="$table" striped>
                <x-splade-cell icon>
                    <x-tomato-admin-row type="icon" table :value="$item->icon" />
                </x-splade-cell>
                <x-splade-cell color>
                    <x-tomato-admin-row type="color" table :value="$item->color" />
                </x-splade-cell>
                <x-splade-cell actions>
                    <div class="flex justify-start">
                        <x-tomato-admin-button type="icon" success modal title="{{trans('tomato-admin::global.crud.view')}}" href="{{ route('admin.types.show', $item->id) }}">
                            <x-heroicon-s-eye class="h-6 w-6"/>
                        </x-tomato-admin-button>
                        <x-tomato-admin-button type="icon" warning modal title="{{trans('tomato-admin::global.crud.edit')}}" href="{{ route('admin.types.edit', $item->id) }}">
                            <x-heroicon-s-pencil class="h-6 w-6"/>
                        </x-tomato-admin-button>

                        <x-tomato-admin-button type="icon" title="{{trans('tomato-admin::global.crud.delete')}}" href="{{ route('admin.types.destroy', $item->id) }}"
                                               confirm="{{trans('tomato-admin::global.crud.delete-confirm')}}"
                                               confirm-text="{{trans('tomato-admin::global.crud.delete-confirm-text')}}"
                                               confirm-button="{{trans('tomato-admin::global.crud.delete-confirm-button')}}"
                                               cancel-button="{{trans('tomato-admin::global.crud.delete-confirm-cancel-button')}}"
                                               class="px-2 text-red-500"
                                               method="delete"

                        >
                            <x-heroicon-s-trash class="h-6 w-6"/>
                        </x-tomato-admin-button>
                    </div>
                </x-splade-cell>
            </x-splade-table>
        </div>
    </div>
</x-tomato-admin-layout>
