
    <ul class="nav navbar-nav">
    @foreach($items as $menu_item)
        <li><a href="{{ $menu_item->link() }}">
            <span class="{{ $menu_item->icon_class }}">
                <span style="margin:5px;">
                {{ $menu_item->title }}
                </span>
            </span>
        </a></li>
    @endforeach
    </ul>
