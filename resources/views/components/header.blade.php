<div {{ $attributes->merge(['class' => 'container py-5']) }}>
    <div class="row g-5 py-lg-5 {{ $attributes->get('align', 'align-items-center') }}">
        <div class="col-lg-6">
            @isset($sup)
                <span class="text-primary mb-3 d-block text-uppercase fw-semibold ls-xl">{{ $sup }}</span>
            @endisset

            <h1 class="display-5 fw-bold text-body-emphasis mb-4">{!!  $title !!}</h1>

            @isset($description)
                <p class="lead mb-4 pe-5">
                    {!!  $description !!}
                </p>
            @endisset

            @isset($actions)
                <div class="d-grid gap-3 d-md-flex justify-content-md-start">
                    {!! $actions !!}
                </div>
            @endisset
        </div>
        <div class="col-12 col-sm-8 col-lg-6">
            @isset($content)
                {!! $content !!}
            @else
                <img src="{{ $attributes->get('image', '/img/sign.svg') }}" alt="{{ strip_tags($title) }}"
                     class="d-block mx-lg-auto img-fluid pe-none" width="700" height="500" loading="lazy">
            @endisset
        </div>
    </div>
</div>