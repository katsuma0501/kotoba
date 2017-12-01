@extends('layouts.app')

@section('title')
ホーム
@endsection

@section('content')


<div class="bs-docs-section clearfix">
  <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <h1 id="forms">アナグラム投稿</h1>
        </div>
      </div>
  </div>
  <div class="row">
     <div class="col-lg-12">
     @if (count($errors) > 0)
      <div class="alert alert-danger">
        
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        
      </div>
    @endif

      <div class="jumbotron">
        <form action="" method="POST" >
          {{ csrf_field() }}
              <div class="form-group">
                <label for="org_word">原文</label>
                <input type="text" name="org_word" class="form-control" id="org_word" placeholder="原文を入力">
              </div>
              <div class="form-group">
                <label for="anagram_word">アナグラム</label>
                <input type="text" name="anagram_word" class="form-control" id="anagram_word" placeholder="アナグラム">
              </div>
              <div class="form-group">
                <label for="comment">コメント（任意）</label>
                <textarea class="form-control" name="comment" id="comment" rows="5">自由入力</textarea>
              </div>
              <div class="text-xs-right">
                <button type="submit" class="btn btn-primary">投稿</button>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection