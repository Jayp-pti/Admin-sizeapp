<div class="card settings-tab">
    <div class="card-body pb-0">
        <div class="settings-menu">
            <ul class="nav">
                <li>
                    <a href="{{ Route('subcategories.create') }}"
                        class="{{ Route::is('subcategories.create') ? 'active' : '' }}">
                        <i class="ti ti-settings-cog"></i> create-subcategory
                    </a>
                </li>
                <li>
                    <a href="{{ Route('categories.create') }}" class="{{ Route::is('categories.create') ? 'active' : '' }}">
                        <i class="ti ti-world-cog"></i> create category
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
