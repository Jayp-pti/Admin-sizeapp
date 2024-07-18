<div class="dropdown-menu notes-menu dropdown-menu-end show"
    style="position: absolute; inset: auto 0px 0px auto; margin: 0px; transform: translate(-40px, -644.444px);"
    data-popper-placement="top-end" data-popper-reference-hidden="">
    <a href="{{ $data['link'] ?? '' }}" class="dropdown-item"><span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                </path>
                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                </path>
            </svg></span>Edit</a>
    <a href="#" class="dropdown-item {{ $data['delete_templates'] }}" data-id="{{ $data['tempid'] ?? '' }}"
        data-bs-toggle="modal" data-bs-target="#{{ $data['delete_target'] }}"><span><svg
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-trash-2">
                <polyline points="3 6 5 6 21 6"></polyline>
                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                </path>
                <line x1="10" y1="11" x2="10" y2="17"></line>
                <line x1="14" y1="11" x2="14" y2="17"></line>
            </svg></span>Delete</a>
    <a href="#" class="dropdown-item {{ $data['view_templates'] }}" data-id="{{ $data['tempid'] ?? '' }}"
        data-bs-toggle="modal" data-bs-target="#{{ $data['target'] }}"><span><svg xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                </path>
                <circle cx="12" cy="12" r="3">
                </circle>
            </svg></span>View</a>
</div>