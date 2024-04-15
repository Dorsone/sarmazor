<ul id="menu-primary-menu" class="menu">
    <li class="menu-item menu-item-has-children @if(request()->path() == '/') current-menu-item @endif">
        <a href="{{ route('client.home') }}">HOME</a>
    </li>
    <li class="menu-item menu-item-has-children @if(request()->path() == 'about-us') current-menu-item @endif">
        <a href="{{ route('client.about') }}">ABOUT US </a>
    </li>
    <li class="menu-item menu-item-has-children @if(request()->path() == 'services') current-menu-item @endif">
        <a href="{{ route('client.services') }}">SERVICES</a>
    </li>
    <li class="menu-item menu-item-has-children @if(request()->path() == 'projects') current-menu-item @endif">
        <a href="{{ route('client.projects') }}">PROJECTS</a>
    </li>
    <li class="menu-item menu-item-has-children @if(Str::startsWith(request()->path(), 'blog')) current-menu-item @endif">
        <a href="{{ route('client.blog') }}">BLOG</a>
    </li>
    <li class="menu-item menu-item-has-children @if(request()->path() == 'contact') current-menu-item @endif">
        <a href="{{ route('client.contact') }}">CONTACT</a>
    </li>
</ul>
