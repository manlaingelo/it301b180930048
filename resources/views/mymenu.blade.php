
    <ul class="nav navbar-nav">
    @foreach($items as $menu_item)
        <li><a href="{{ $menu_item->link() }}">
            <span class="{{ $menu_item->icon_class }}"style="margin:15px;">
                <span style="margin:15px;">
                {{ $menu_item->title }}
                </span>
            </span>
        </a></li>
    @endforeach
    </ul>
