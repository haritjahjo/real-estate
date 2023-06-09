<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            Hari<span>TJAHJO</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">RealEstate</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#propertiTipe" role="button" aria-expanded="false"
                    aria-controls="propertiTipe">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Property Type</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="propertiTipe">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('admin.property-types.index') }}" class="nav-link">All Type</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.property-types.create') }}" class="nav-link">Add Type</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.property-types.index') }}" class="nav-link">Accordion</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.property-types.create') }} " class="nav-link">Alerts</a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#kelengkapan" role="button" aria-expanded="false"
                    aria-controls="kelengkapan">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Amenities</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="kelengkapan">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('admin.amenities.index') }}" class="nav-link">Amenities</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.amenities.create') }}" class="nav-link">Add Amenity</a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#propertinya" role="button" aria-expanded="false"
                    aria-controls="propertinya">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Properties</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="propertinya">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('admin.properties.index') }}" class="nav-link">Properties</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.properties.create') }}" class="nav-link">Add Property</a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a href="pages/apps/chat.html" class="nav-link">
                    <i class="link-icon" data-feather="message-square"></i>
                    <span class="link-title">Chat</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/apps/calendar.html" class="nav-link">
                    <i class="link-icon" data-feather="calendar"></i>
                    <span class="link-title">Calendar</span>
                </a>
            </li>
            <li class="nav-item nav-category">Components</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button"
                    aria-expanded="false" aria-controls="uiComponents">
                    <i class="link-icon" data-feather="feather"></i>
                    <span class="link-title">UI Kit</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="uiComponents">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="pages/ui-components/accordion.html" class="nav-link">Accordion</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/ui-components/alerts.html" class="nav-link">Alerts</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#advancedUI" role="button"
                    aria-expanded="false" aria-controls="advancedUI">
                    <i class="link-icon" data-feather="anchor"></i>
                    <span class="link-title">Advanced UI</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="advancedUI">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="pages/advanced-ui/cropper.html" class="nav-link">Cropper</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/advanced-ui/owl-carousel.html" class="nav-link">Owl carousel</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item nav-category">Docs</li>
            <li class="nav-item">
                <a href="#" target="_blank" class="nav-link">
                    <i class="link-icon" data-feather="hash"></i>
                    <span class="link-title">Documentation</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
