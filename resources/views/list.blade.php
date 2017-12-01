@extends('layouts.app')

@section('title')
ホーム
@endsection

@section('content')

<div class="bs-docs-section clearfix">
    <div class="row">
      <div class="col-lg-12">
        <div class="card-columns">

          @for ($i = 0; $i < 30; $i++)

            <?php $ran = rand(1,3); ?>

            @if( $ran % 3 == 0 )

              @include('items.card-ana')

            @elseif( $ran % 3 == 1 )

              @include('items.card-pal')

            @elseif( $ran % 3 == 2 )
              
              @include('items.card-mis')
            
            @endif
          
          @endfor

        </div>

        <div>
            <ul class="pagination pagination-sm">
              <li class="page-item disabled">
                <a class="page-link" href="#">&laquo;</a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">4</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">5</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">&raquo;</a>
              </li>
            </ul>
        </div>
        
      </div>
  </div>
</div>
@endsection