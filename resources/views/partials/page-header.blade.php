<div class="page-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-3" data-cursor="-opaque">{{ $title }}</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('nav.home') }}</a></li>
                            @if (!empty($parent))
                                <li class="breadcrumb-item"><a href="{{ $parent['url'] }}">{{ $parent['label'] }}</a></li>
                            @endif
                            <li class="breadcrumb-item active" aria-current="page">{{ $breadcrumb ?? $title }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
