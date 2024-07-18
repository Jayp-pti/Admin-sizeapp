 <!-- Favicon -->
 <link rel="shortcut icon" type="image/x-icon" href="{{ url('/build/img/favicon.png') }}">

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="{{ url('/build/css/bootstrap.min.css') }}">

 <!-- Tabler Icon CSS -->
 <link rel="stylesheet" href="{{ url('/build/plugins/tabler-icons/tabler-icons.css') }}">

 @if (Route::is(['audio-call', 'bank-accounts', 'blog', 'ui-nav-tabs', 'video-call']))
     <!-- Feathericon CSS -->
     <link rel="stylesheet" href="{{ url('/build/css/feather.css') }}">
 @endif

 @if (Route::is(['chat']))
     <!-- Summernote CSS -->
     <link rel="stylesheet" href="{{ url('/build/plugins/summernote/summernote-bs4.min.css') }}">
 @endif

 @if (Route::is(['chat']))
     <!-- Mobile CSS-->
     <link rel="stylesheet" href="{{ url('/build/plugins/intltelinput/css/intlTelInput.css') }}">
     <link rel="stylesheet" href="{{ url('/build/plugins/intltelinput/css/demo.css') }}">
 @endif

 @if (Route::is(['calendar']))
     <!-- Full Calander CSS -->
     <link rel="stylesheet" href="{{ url('/build/plugins/fullcalendar/fullcalendar.min.css') }}">
 @endif

 @if (Route::is(['audio-call', 'call-history', 'video-call', 'chat']))
     <!-- Boxicons CSS -->
     <link rel="stylesheet" href="{{ url('/build/plugins/boxicons/css/boxicons.min.css') }}">
 @endif

 @if (Route::is(['audio-call', 'video-call', 'notes', 'file-manager']))
     <!-- Owl Carousel CSS -->
     <link rel="stylesheet" href="{{ url('/build/plugins/owlcarousel/owl.carousel.min.css') }}">
     <link rel="stylesheet" href="{{ url('/build/plugins/owlcarousel/owl.theme.default.min.css') }}">
 @endif

 @if (Route::is(['file-manager']))
     <link rel="stylesheet" href="{{ url('/build/css/plyr.css') }}">
 @endif

 <!-- Datatable CSS -->
 <link rel="stylesheet" href="{{ url('/build/css/dataTables.bootstrap5.min.css') }}">

 @if (Route::is([
         'audio-call',
         'calendar',
         'call-history',
         'video-call',
         'chart-apex',
         'chart-c3',
         'chart-flot',
         'chart-js',
         'chart-morris',
         'chart-peity',
         'chat',
         'contacts',
         'ui-nav-tabs',
     ]))
     <!-- animation CSS -->
     <link rel="stylesheet" href="{{ url('/build/css/animate.css') }}">
 @endif

 @if (Route::is(['chat']))
     <!-- Fancybox -->
     <link rel="stylesheet" href="{{ url('/build/plugins/fancybox/jquery.fancybox.min.css') }}">
 @endif

 <!-- Fontawesome CSS -->
 <link rel="stylesheet" href="{{ url('/build/plugins/fontawesome/css/fontawesome.min.css') }}">
 <link rel="stylesheet" href="{{ url('/build/plugins/fontawesome/css/all.min.css') }}">

 <!-- Datetimepicker CSS -->
 @if (Route::is([
         'activities',
         'activity-calls',
         'activity-mail',
         'activity-meeting',
         'activity-task',
         'analytics',
         'campaign',
         'todo',
         'tickets',
         'campaign-archieve',
         'campaign-complete',
         'chat',
         'cities',
         'companies-grid',
         'companies',
         'company-details',
         'company-reports',
         'contact-details',
         'contact-grid',
         'contact-messages',
         'contact-reports',
         'contacts',
         'countries',
         'deals-reports',
         'deals-details',
         'deals-kanban',
         'deals',
         'delete-request',
         'faq',
         'file-manager',
         'testimonials',
         'tasks',
         'tasks-important',
         'tasks-completed',
         'task-reports',
         'states',
         'sources',
         'roles-permissions',
         'projects',
         'project-reports',
         'project-grid',
         'project-details',
         'project-dashboard',
         'pipeline',
         'premission',
         'pages',
         'pages-list',
         'notes',
         'membership-transactions',
         'membership-addons',
         'membership-plans',
         'manage-users',
         'leads-kanban',
         'leads-details',
         'leads-reports',
         'leads-dashboard',
         'dashboard',
         'leads',
         'lead-reports',
         'language-web',
         'language',
     ]))
     <link rel="stylesheet" href="{{ url('/build/css/bootstrap-datetimepicker.min.css') }}">
 @endif

 @if (Route::is([
         'activities',
         'activity-calls',
         'activity-mail',
         'activity-meeting',
         'activity-task',
         'analytics',
         'audio-call',
         'call-history',
         'video-call',
         'campaign',
         'campaign-archieve',
         'campaign-complete',
         'chat',
         'cities',
         'companies-grid',
         'companies',
         'company-details',
         'company-reports',
         'company-settings',
         'contact-details',
         'contact-grid',
         'contact-messages',
         'contact-reports',
         'contacts',
         'countries',
         'custom-fields',
         'deal-reports',
         'deals-details',
         'deals-kanban',
         'deals',
         'delete-request',
         'faq',
         'file-manager',
         'gdpr-cookies',
         'invoice-settings',
         'todo',
         'tickets',
         'testimonials',
         'tasks',
         'tasks-important',
         'tasks-completed',
         'task-reports',
         'states',
         'sources',
         'roles-permissions',
         'projects',
         'project-reports',
         'project-grid',
         'project-details',
         'project-dashboard',
         'printers',
         'prefixes',
         'preference',
         'pipeline',
         'premission',
         'pages',
         'pages-list',
         'notes',
         'membership-transactions',
         'membership-addons',
         'membership-plans',
         'manage-users',
         'localization',
         'leads-kanban',
         'leads-details',
         'leads-reports',
         'leads-dashboard',
         'dashboard',
         'leads',
         'lead-reports',
         'language-web',
         'language',
         'appearance',
         'form-select2',
         'form-vertical',
         'form-horizontal',
     ]))
     <!-- Select2 CSS -->
     <link rel="stylesheet" href="{{ url('/build/plugins/select2/css/select2.min.css') }}">
 @endif

 @if (Route::is([
         'activities',
         'activity-calls',
         'activity-mail',
         'activity-meeting',
         'activity-task',
         'analytics',
         'ui-text-editor',
         'campaign',
         'campaign-archieve',
         'campaign-complete',
         'companies-grid',
         'companies',
         'company-details',
         'contact-details',
         'contact-grid',
         'contact-messages',
         'contacts',
         'deals-details',
         'deals-kanban',
         'deals',
         'contact-details',
         'deals',
         'delete-request',
         'gdpr-cookies',
         'invoice-settings',
         'leads-details',
         'membership-transactions',
         'membership-addons',
         'membership-plans',
         'manage-users',
         'pipeline',
         'premission',
         'roles-permissions',
         'projects',
         'project-grid',
         'project-details',
         'tickets',
         'tasks',
         'tasks-important',
         'tasks-completed',
         'todo',
         'notes',
         'file-manager',
     ]))
     <!-- Summernote CSS -->
     <link rel="stylesheet" href="{{ url('/build/plugins/summernote/summernote-lite.min.css') }}">
 @endif

 @if (Route::is([
         'activities',
         'activity-cally',
         'activity-mail',
         'activity-meeting',
         'activity-task',
         'analytics',
         'campaign',
         'campaign-archieve',
         'campaign-complete',
         'cities',
         'companies-grid',
         'companies',
         'company-details',
         'company-reports',
         'contact-details',
         'contact-grid',
         'contact-messages',
         'contact-reports',
         'contacts',
         'countries',
         'deal-reports',
         'deals-details',
         'deals-kanban',
         'deals',
         'delete-request',
         'faq',
         'tickets',
         'testimonials',
         'tasks',
         'tasks-important',
         'tasks-completed',
         'task-reports',
         'states',
         'sources',
         'roles-permissions',
         'projects',
         'project-reports',
         'project-grid',
         'project-details',
         'project-dashboard',
         'pipeline',
         'premission',
         'pages',
         'pages-list',
         'membership-transactions',
         'membership-addons',
         'membership-plans',
         'manage-users',
         'leads-kanban',
         'leads-details',
         'leads-reports',
         'leads-dashboard',
         'dashboard',
     ]))
     <!-- Bootstrap Tagsinput CSS -->
     <link rel="stylesheet" href="{{ url('/build/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">
 @endif

 @if (Route::is(['video-call', 'chat']))
     <!-- Swiper CSS -->
     <link rel="stylesheet" href="{{ url('/build/plugins/swiper/swiper.min.css') }}">
 @endif

 @if (Route::is(['ui-toasts']))
     <!-- Toatr CSS -->
     <link rel="stylesheet" href="{{ url('/build/plugins/toastr/toatr.css') }}">
 @endif

 @if (Route::is(['ui-rangeslider', 'ui-rating']))
     <!-- Rangeslider CSS -->
     <link rel="stylesheet" href="{{ url('/build/plugins/ion-rangeslider/css/ion.rangeSlider.min.css') }}">
 @endif

 @if (Route::is(['ui-lightbox']))
     <!-- Lightbox CSS -->
     <link rel="stylesheet" href="{{ url('/build/plugins/lightbox/glightbox.min.css') }}">
 @endif

 @if (Route::is(['ui-clipboard', 'ui-drag-drop']))
     <!-- Dragula CSS -->
     <link rel="stylesheet" href="{{ url('/build/plugins/dragula/css/dragula.min.css') }}">
 @endif

 @if (Route::is(['ui-stickynote']))
     <!-- Sticky CSS -->
     <link rel="stylesheet" href="{{ url('/build/plugins/stickynote/sticky.css') }}">
 @endif

 @if (Route::is(['ui-scrollbar']))
     <link rel="stylesheet" href="{{ url('/build/plugins/scrollbar/scroll.min.css') }}">
 @endif

 @if (Route::is(['form-wizard']))
     <!-- Wizard CSS -->
     <link rel="stylesheet" href="{{ URL::asset('/build/plugins/twitter-bootstrap-wizard/form-wizard.css') }}">
 @endif

 @if (Route::is(['icon-flag']))
     <!-- Pe7 CSS -->
     <link rel="stylesheet" href="{{ URL::asset('/build/plugins/icons/flags/flags.css') }}">
 @endif

 @if (Route::is(['icon-feather']))
     <!-- Feather CSS -->
     <link rel="stylesheet" href="{{ URL::asset('/build/plugins/icons/feather/feather.css') }}">
 @endif

 @if (Route::is(['icon-ionic']))
     <!-- Ionic CSS -->
     <link rel="stylesheet" href="{{ URL::asset('/build/plugins/icons/ionic/ionicons.css') }}">
 @endif

 @if (Route::is(['icon-material']))
     <!-- Material CSS -->
     <link rel="stylesheet" href="{{ URL::asset('/build/plugins/material/materialdesignicons.css') }}">
 @endif

 @if (Route::is(['icon-pe7']))
     <!-- Pe7 CSS -->
     <link rel="stylesheet" href="{{ URL::asset('/build/plugins/icons/pe7/pe-icon-7.css') }}">
 @endif

 @if (Route::is(['icon-simpleline']))
     <!-- Material CSS -->
     <link rel="stylesheet" href="{{ URL::asset('/build/plugins/simpleline/simple-line-icons.css') }}">
 @endif

 @if (Route::is(['icon-themify']))
     <!-- Pe7 CSS -->
     <link rel="stylesheet" href="{{ URL::asset('/build/plugins/icons/themify/themify.css') }}">
 @endif

 @if (Route::is(['icon-typicon']))
     <!-- Pe7 CSS -->
     <link rel="stylesheet" href="{{ URL::asset('/build/plugins/icons/typicons/typicons.css') }}">
 @endif

 @if (Route::is(['icon-weather']))
     <!-- Pe7 CSS -->
     <link rel="stylesheet" href="{{ URL::asset('/build/plugins/icons/weather/weathericons.css') }}">
 @endif

 <!-- Daterangepicker CSS -->
 <link rel="stylesheet" href="{{ url('/build/plugins/daterangepicker/daterangepicker.css') }}">

 <!-- Main CSS -->
 <link rel="stylesheet" href="{{ url('/build/css/style.css') }}">
