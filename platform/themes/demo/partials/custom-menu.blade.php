{{-- @if ($menu_nodes->has_child)
<ul {!! $options !!} class="navbar-nav">
@endif --}}

<ul  {!! BaseHelper::clean($options) !!} class="navbar-nav">
    @foreach ($menu_nodes as $key => $row)
        <li class="{{ $row->css_class }} @if ($row->url == Request::url()) current @endif">
            <a href="{{ $row->url }}" target="{{ $row->target }}" class="nav-link">
                <i class='{{ trim($row->icon_font) }}'></i> <span>{{ $row->name }}</span>
            </a>
            @if ($row->has_child)
                {!! Menu::generateMenu([
    'slug' => $menu->slug,
    'parent_id' => $row->id,
    // 'options'    => ['class' => 'sub-menu'],
]) !!}
            @endif
        </li>
    @endforeach
</ul>

