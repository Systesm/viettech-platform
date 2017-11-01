<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <ol class="breadcrumb pull-right">
                <?php $segments = ''; ?>
                @foreach(Request::segments() as $segment)
                    <?php $segments .= '/'.$segment; ?>
                    <li>
                        <a href="{{ $segments }}">{{ ucfirst($segment) }}</a>
                    </li>
                @endforeach
            </ol>
            <h4 class="page-title">{{ ucfirst(collect(request()->segments())->last()) }}</h4>
        </div>
    </div>
</div>