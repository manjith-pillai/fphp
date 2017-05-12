<ul>
    @forelse ($audits as $audit)
    <li>
        @lang('post.updated.metadata', $audit->getMetadata())

        @foreach ($audit->getModified() as $attribute => $modified)
        <ul>
            <li>@lang('post.'.$audit->event.'.modified.'.$attribute, $modified)</li>
        </ul>
        @endforeach
    </li>
    @empty
    <p>@lang('post.unavailable_audits')</p>
    @endforelse
</ul>