<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <!-- Title for the breadcrumb page -->
                <h1>{{ $breadcrumb->title }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    @forelse ($breadcrumb->list as $key => $value)
                        <!-- Check if it's the last breadcrumb item -->
                        @if($key == count($breadcrumb->list) - 1)
                            <li class="breadcrumb-item active">{{ $value }}</li>
                        @else
                            <li class="breadcrumb-item">{{ $value }}</li>
                        @endif
                    @empty
                        <!-- Handle the case when breadcrumb list is empty -->
                        <li class="breadcrumb-item active">No Breadcrumbs</li>
                    @endforelse
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
