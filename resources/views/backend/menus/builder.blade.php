@extends('backend.layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Menu Builder</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- Menu Group Selector -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Menu Groups</h5>
                            </div>
                            <div class="card-body pt-0 pb-1">
                                <div class="d-flex gap-2 mb-3">
                                    <select class="form-control" id="menuGroupSelect" onchange="changeMenuGroup()">
                                        @foreach($menuGroups as $group)
                                        <option value="{{ $group->id }}" {{ $selectedMenuGroup == $group->id ? 'selected' : '' }}>
                                            {{ $group->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                     <button class="btn btn-success btn-sm w-100" onclick="showAddGroupModal()">
                                        <i class="ti ti-plus"></i> Create New Group
                                    </button>
                                </div>
                                <div class="mb-3">
                                   
                                </div>                                
                                <div class="d-flex gap-2 mb-3">
                                    <button class="btn btn-primary w-100" onclick="showAddItemModal()">
                                        <i class="ti ti-plus"></i> Add Menu Item
                                    </button>
                                    <button class="btn btn-light w-100" onclick="saveMenuOrder()">
                                        <i class="ti ti-menu-order"></i> Save Order
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Menu Items -->
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h5>Menu Items</h5>
                            </div>
                            <div class="card-body">
                                <div id="menuTree" class="dd">
                                    <ol class="dd-list" id="menuItemsList">
                                        @include('backend.menus.partials.menu-item', ['menuItems' => $menuItems])
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add/Edit Menu Group Modal -->
<div class="modal fade" id="menuGroupModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="menuGroupModalTitle">Add Menu Group</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="menuGroupForm">
                @csrf
                <input type="hidden" id="groupId">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="groupName" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Slug <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="groupSlug" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" id="groupDescription" rows="2"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-control" id="groupStatus">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Add/Edit Menu Item Modal -->
<div class="modal fade" id="menuItemModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="menuItemModalTitle">Add Menu Item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="menuItemForm">
                @csrf
                <input type="hidden" id="itemId">
                <input type="hidden" id="itemMenuGroupId" value="{{ $selectedMenuGroup }}">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="itemName" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">URL <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="itemUrl" required placeholder="https://example.com">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Icon (Optional)</label>
                        <input type="text" class="form-control" id="itemIcon" placeholder="ti ti-home">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-control" id="itemStatus">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- CSS for Nestable -->
<style>
    .dd {
        position: relative;
        display: block;
        margin: 0;
        padding: 0;
        max-width: 600px;
        list-style: none;
        font-size: 13px;
        line-height: 20px;
    }

    .dd-list {
        display: block;
        position: relative;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .dd-list .dd-list {
        padding-left: 30px;
    }

    .dd-collapsed .dd-list {
        display: none;
    }

    .dd-item,
    .dd-empty,
    .dd-placeholder {
        display: block;
        position: relative;
        margin: 0;
        padding: 0;
        min-height: 20px;
        font-size: 13px;
        line-height: 20px;
    }

    .dd-handle {
        display: block;
        height: 30px;
        margin: 5px 0;
        padding: 5px 10px;
        color: #333;
        text-decoration: none;
        font-weight: bold;
        border: 1px solid #ccc;
        background: #fafafa;
        background: -webkit-linear-gradient(top, #fafafa 0%, #eee 100%);
        background: -moz-linear-gradient(top, #fafafa 0%, #eee 100%);
        background: linear-gradient(top, #fafafa 0%, #eee 100%);
        border-radius: 3px;
        box-sizing: border-box;
        cursor: move;
    }

    .dd-handle:hover {
        color: #2ea8e5;
        background: #fff;
    }

    .dd-item > button {
        display: block;
        position: relative;
        cursor: pointer;
        float: left;
        width: 25px;
        height: 20px;
        margin: 5px 0;
        padding: 0;
        text-indent: 100%;
        white-space: nowrap;
        overflow: hidden;
        border: 0;
        background: transparent;
        font-size: 12px;
        line-height: 1;
        text-align: center;
        font-weight: bold;
    }

    .dd-item > button:before {
        content: '+';
        display: block;
        position: absolute;
        width: 100%;
        text-align: center;
        text-indent: 0;
    }

    .dd-item > button[data-action="collapse"]:before {
        content: '-';
    }

    .dd-placeholder,
    .dd-empty {
        margin: 5px 0;
        padding: 0;
        min-height: 30px;
        background: #f2fbff;
        border: 1px dashed #b6bcbf;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }

    .dd-empty {
        border: 1px dashed #bbb;
        min-height: 100px;
        background-color: #e5e5e5;
        background-image: -webkit-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff),
            -webkit-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff);
        background-image: -moz-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff),
            -moz-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff);
        background-image: linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff),
            linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff);
        background-size: 60px 60px;
        background-position: 0 0, 30px 30px;
    }

    .dd-dragel {
        position: absolute;
        pointer-events: none;
        z-index: 9999;
    }

    .dd-dragel > .dd-item .dd-handle {
        margin-top: 0;
    }

    .dd-dragel .dd-handle {
        box-shadow: 2px 4px 6px 0 rgba(0, 0, 0, .1);
    }

    .menu-item-actions {
        float: right;
        margin-top: -25px;
    }

    .menu-item-actions button {
        margin-left: 5px;
        padding: 2px 8px;
        font-size: 12px;
    }
</style>

<!-- Nestable JS Library -->
<script src="https://cdn.jsdelivr.net/npm/nestable2@1.6.0/jquery.nestable.min.js"></script>

<script>
    let nestable;

    $(document).ready(function() {
        initializeNestable();
        setupFormSubmissions();
    });

    function initializeNestable() {
        nestable = $('#menuTree').nestable({
            group: 1,
            maxDepth: 10
        });
    }

    function setupFormSubmissions() {
        // Menu Group Form
        $('#menuGroupForm').submit(function(e) {
            e.preventDefault();
            saveMenuGroup();
        });

        // Menu Item Form
        $('#menuItemForm').submit(function(e) {
            e.preventDefault();
            saveMenuItem();
        });
    }

    function changeMenuGroup() {
        const menuGroupId = $('#menuGroupSelect').val();
        window.location.href = '{{ route("backend.menus") }}?group=' + menuGroupId;
    }

    function showAddGroupModal() {
        $('#menuGroupModalTitle').text('Add Menu Group');
        $('#groupId').val('');
        $('#groupName').val('');
        $('#groupSlug').val('');
        $('#groupDescription').val('');
        $('#groupStatus').val(1);
        $('#menuGroupModal').modal('show');
    }

    function showEditGroupModal(groupId) {
        // Fetch group data and populate modal
        $.ajax({
            url: '{{ route("backend.menus.group.save") }}',
            method: 'POST',
            data: {
                id: groupId
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                if (response.success) {
                    const group = response.menu_group;
                    $('#menuGroupModalTitle').text('Edit Menu Group');
                    $('#groupId').val(group.id);
                    $('#groupName').val(group.name);
                    $('#groupSlug').val(group.slug);
                    $('#groupDescription').val(group.description);
                    $('#groupStatus').val(group.status ? 1 : 0);
                    $('#menuGroupModal').modal('show');
                }
            }
        });
    }

    function saveMenuGroup() {
        const data = {
            id: $('#groupId').val(),
            name: $('#groupName').val(),
            slug: $('#groupSlug').val(),
            description: $('#groupDescription').val(),
            status: $('#groupStatus').val()
        };

        $.ajax({
            url: '{{ route("backend.menus.group.save") }}',
            method: 'POST',
            data: data,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                if (response.success) {
                    $('#menuGroupModal').modal('hide');
                    toastr.success('Menu group saved successfully');
                    setTimeout(function() {
                        window.location.reload();
                    }, 500);
                }
            },
            error: function(xhr) {
                const errors = xhr.responseJSON?.errors;
                if (errors) {
                    $.each(errors, function(field, messages) {
                        toastr.error(messages[0]);
                    });
                }
            }
        });
    }

    function showAddItemModal() {
        $('#menuItemModalTitle').text('Add Menu Item');
        $('#itemId').val('');
        $('#itemName').val('');
        $('#itemUrl').val('');
        $('#itemIcon').val('');
        $('#itemStatus').val(1);
        $('#itemMenuGroupId').val($('#menuGroupSelect').val());
        $('#menuItemModal').modal('show');
    }

    function showEditItemModal(itemId) {
        $.ajax({
            url: '{{ route("backend.menus.item.save") }}',
            method: 'POST',
            data: {
                id: itemId
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                if (response.success) {
                    const item = response.menu_item;
                    $('#menuItemModalTitle').text('Edit Menu Item');
                    $('#itemId').val(item.id);
                    $('#itemName').val(item.name);
                    $('#itemUrl').val(item.url);
                    $('#itemIcon').val(item.icon);
                    $('#itemStatus').val(item.status ? 1 : 0);
                    $('#itemMenuGroupId').val(item.menu_group_id);
                    $('#menuItemModal').modal('show');
                }
            }
        });
    }

    function saveMenuItem() {
        const data = {
            id: $('#itemId').val(),
            menu_group_id: $('#itemMenuGroupId').val(),
            name: $('#itemName').val(),
            url: $('#itemUrl').val(),
            icon: $('#itemIcon').val(),
            status: $('#itemStatus').val()
        };

        $.ajax({
            url: '{{ route("backend.menus.item.save") }}',
            method: 'POST',
            data: data,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                if (response.success) {
                    $('#menuItemModal').modal('hide');
                    toastr.success('Menu item saved successfully');
                    setTimeout(function() {
                        window.location.reload();
                    }, 500);
                }
            },
            error: function(xhr) {
                const errors = xhr.responseJSON?.errors;
                if (errors) {
                    $.each(errors, function(field, messages) {
                        toastr.error(messages[0]);
                    });
                }
            }
        });
    }

    function deleteItem(itemId) {
        if (confirm('Are you sure you want to delete this menu item?')) {
            $.ajax({
                url: '{{ route("backend.menus.item.delete") }}',
                method: 'POST',
                data: {
                    id: itemId
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.success) {
                        toastr.success('Menu item deleted successfully');
                        setTimeout(function() {
                            window.location.reload();
                        }, 500);
                    }
                }
            });
        }
    }

    function saveMenuOrder() {
        const menuGroupId = $('#menuGroupSelect').val();
        const items = $('#menuTree').nestable('serialize');

        $.ajax({
            url: '{{ route("backend.menus.save-order") }}',
            method: 'POST',
            data: {
                menu_group_id: menuGroupId,
                items: items
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                if (response.success) {
                    toastr.success(response.message);
                }
            },
            error: function(xhr) {
                const errors = xhr.responseJSON?.errors;
                if (errors) {
                    $.each(errors, function(field, messages) {
                        toastr.error(messages[0]);
                    });
                }
            }
        });
    }
</script>
@endsection
