@foreach($menuItems as $menuItem)
<li class="dd-item" data-id="{{ $menuItem->id }}">
    <div class="dd-handle">
        {{ $menuItem->name }}
        @if($menuItem->icon)
        <span class="text-muted" style="margin-left: 10px;">({{ $menuItem->icon }})</span>
        @endif
        <span class="menu-item-actions">
            <button class="btn btn-sm btn-primary" onclick="showEditItemModal({{ $menuItem->id }})">
                <i class="ti ti-pencil"></i>
            </button>
            <button class="btn btn-sm btn-danger" onclick="deleteItem({{ $menuItem->id }})">
                <i class="ti ti-trash"></i>
            </button>
        </span>
    </div>
    @if($menuItem->children->count() > 0)
    <ol class="dd-list">
        @include('backend.menus.partials.menu-item', ['menuItems' => $menuItem->children])
    </ol>
    @endif
</li>
@endforeach
