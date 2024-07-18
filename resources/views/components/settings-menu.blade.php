<div class="card settings-tab">
    <div class="card-body pb-0">
        <div class="settings-menu">
            <ul class="nav">
                <li>
                    <a href="{{ Route('icons.create') }}" class="{{ Route::is('icons.index') ? 'active' : '' }}">
                        <i class="ti ti-settings-cog"></i> Upload Icons
                    </a>
                </li>
                <li>
                    <a href="{{ Route('categories.create') }}"
                        class="{{ Route::is('categories.create') ? 'active' : '' }}">
                        <i class="ti ti-world-cog"></i> create category
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
