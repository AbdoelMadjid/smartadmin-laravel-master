@foreach (menus() as $category => $menus)
    @php
        $showCategory = true;
    @endphp
    @foreach ($menus as $mm)
        @can('read ' . $mm->url)
            @if ($showCategory)
                <li class="nav-title">{{ $category }}</li>
                @php
                    $showCategory = false;
                @endphp
            @endif
            <li @class(['active open' => str_contains(request()->path(), $mm->url)])>
                @if (count($mm->subMenus))
                    <a href="#" title="{{ $mm->name }}" data-filter-tags="{{ $mm->name }}">
                        <i class="fal fa-{{ $mm->icon }}"></i>
                        <span class="nav-link-text" data-i18n="nav.{{ Str::slug($mm->name, '_') }}">{{ $mm->name }}</span>
                    </a>
                    <ul @class([
                        'sub-menu',
                        'expand' => str_contains(request()->path(), $mm->url),
                    ])>
                        @foreach ($mm->subMenus as $sm)
                            @can('read ' . $sm->url)
                                <li @class(['active' => str_contains(request()->path(), $sm->url)])>
                                    <a href="{{ url($sm->url) }}" title="{{ $sm->name }}"
                                        data-filter-tags="{{ $sm->name }}">
                                        <span class="nav-link-text"
                                            data-i18n="nav.{{ Str::slug($sm->name, '_') }}">{{ $sm->name }}</span>
                                    </a>
                                    @if (count($sm->subMenus))
                                        <ul>
                                            @foreach ($sm->subMenus as $ssm)
                                                @can('read ' . $ssm->url)
                                                    <li @class(['active' => str_contains(request()->path(), $ssm->url)])>
                                                        <a href="{{ url($ssm->url) }}" title="{{ $ssm->name }}"
                                                            data-filter-tags="{{ $ssm->name }}">
                                                            <span class="nav-link-text"
                                                                data-i18n="nav.{{ Str::slug($ssm->name, '_') }}">{{ $ssm->name }}</span>
                                                        </a>
                                                    </li>
                                                @endcan
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endcan
                        @endforeach
                    </ul>
                @else
                    <a href="{{ url($mm->url) }}" title="{{ $mm->name }}" data-filter-tags="{{ $mm->name }}">
                        <i class="fal fa-{{ $mm->icon }}"></i>
                        <span class="nav-link-text"
                            data-i18n="nav.{{ Str::slug($mm->name, '_') }}">{{ $mm->name }}</span>
                    </a>
                @endif
            </li>
        @endcan
    @endforeach
@endforeach
