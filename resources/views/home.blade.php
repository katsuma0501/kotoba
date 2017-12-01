@extends('layouts.app')

@section('title')
ホーム
@endsection

@section('content')


  <div class="page-header" id="banner">
    <div class="row">
      <div class="col-lg-8 col-md-7 col-sm-6">
        <h1>{{ env('APP_NAME') }}</h1>
        <p class="lead">kotobaは言葉遊びを楽しめるサイトです。</p>
      </div>
      <div class="col-lg-4 col-md-5 col-sm-6">
        <aside class="card">
          <h4 class="card-header">ユーザ登録</h4>
          <div class="card-block">
            <p class="card-text">新規登録またはログイン</p>
            <button type="button" class="btn btn-primary">Twiiter</button>
            <hr>
            <p class="card-text">言葉遊びする</p>
            <button type="button" class="btn btn-primary">今すぐ投稿</button>
          </div>​​
        </aside>
      </div>
      {{--
      <div class="col-lg-4 col-md-5 col-sm-6">
        <aside class="card">
          <h4 class="card-header">游ゴシックの有効・無効切り替え</h4>
          <div class="card-block">
            <p class="card-text">v3.3.5から<code>&lt;body&gt;</code>に<code>.no-thank-yu</code>を指定することで游ゴシックを使わないようにすることができるようになりました。</p>
            <p id="anti-yu-gothic-message" class="card-text">現在デモページは游ゴシックの指定が<span class="text-primary">有効</span>になっています。</p>
            <div class="card-link"><button id="anti-yu-gothic-button" class="btn btn-danger btn-block">游ゴシックを無効にする</button></div>
          </div>
        </aside>
      </div>
      --}}
    </div>
  </div>

  <div class="bs-docs-section clearfix">
    <div class="row">
      <div class="col-lg-12">
        <div class="card-columns">
          
            <button type="button" style="display:block;" class="card btn btn-outline-danger">アナグラム一覧を見る</button>
            <button type="button" style="display:block;" class="card btn btn-outline-primary">回文一覧を見る</button>
            <button type="button" style="display:block;" class="card btn btn-outline-success">誤変換一覧を見る</button>
        
          
        </div>
      </div>
    </div>
  </div>

  <div class="bs-docs-section clearfix">
    <div class="row">
      <div class="col-lg-12">

        <div class="card-columns">

          @for ($i = 0; $i < 10; $i++)

            <?php $ran = rand(1,3); ?>

            @if( $ran % 3 == 0 )

              @include('items.card-ana')

            @elseif( $ran % 3 == 1 )

              @include('items.card-pal')

            @elseif( $ran % 3 == 2 )
              
              @include('items.card-mis')
            
            @endif
          
          @endfor
            

{{--
              <div class="card">
                <div class="card-block">
                <h4 class="card-title">Card title that wraps to a new line</h4>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
            <div class="card p-3">
                <blockquote class="card-block card-blockquote">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer>
                    <small class="text-muted">
                    Someone famous in <cite title="Source Title">Source Title</cite>
                    </small>
                </footer>
                </blockquote>
            </div>
            <div class="card">
                <div class="card-block">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card bg-primary text-white p-3 text-center">
                <blockquote class="card-blockquote">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
                <footer>
                    <small>
                    Someone famous in <cite title="Source Title">Source Title</cite>
                    </small>
                </footer>
                </blockquote>
            </div>
            <div class="card text-center">
                <div class="card-block">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card p-3 text-right">
                <blockquote class="card-blockquote">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer>
                    <small class="text-muted">
                    Someone famous in <cite title="Source Title">Source Title</cite>
                    </small>
                </footer>
                </blockquote>
            </div>
            <div class="card">
                <div class="card-block">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
--}}

        </div>

      </div>
    </div>
  </div>


{{--

  <!-- Navbar
  ================================================== -->
  <div class="bs-docs-section clearfix">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <h1 id="navbars">Navbars</h1>
        </div>

        <div class="bs-component">
          <nav class="navbar navbar-dark bg-primary">
            <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive2" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="container collapse navbar-toggleable-md" id="navbarResponsive2">
              <a class="navbar-brand" href="#">Brand</a>
              <ul class="nav navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">ホーム <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">リンク</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">リンク</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="http://example.com" id="supportedContentDropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">メニュー</a>
                  <div class="dropdown-menu" aria-labelledby="supportedContentDropdown2">
                    <a class="dropdown-item" href="#">高坂 穂乃果</a>
                    <a class="dropdown-item" href="#">南 ことり</a>
                    <a class="dropdown-item" href="#">園田 海未</a>
                  </div>
                </li>
              </ul>
              <form class="form-inline float-lg-right">
                <input class="form-control" type="text" placeholder="Search">
                <button class="btn btn-secondary" type="submit">検索</button>
              </form>
            </div>
          </nav>
        </div>

        <div class="bs-component">
          <nav class="navbar navbar-dark bg-inverse">
            <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive3" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="container collapse navbar-toggleable-md" id="navbarResponsive3">
              <a class="navbar-brand" href="#">Brand</a>
              <ul class="nav navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">ホーム <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">リンク</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">リンク</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="http://example.com" id="supportedContentDropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">メニュー</a>
                  <div class="dropdown-menu" aria-labelledby="supportedContentDropdown2">
                    <a class="dropdown-item" href="#">高坂 穂乃果</a>
                    <a class="dropdown-item" href="#">南 ことり</a>
                    <a class="dropdown-item" href="#">園田 海未</a>
                  </div>
                </li>
              </ul>
              <form class="form-inline float-lg-right">
                <input class="form-control" type="text" placeholder="Search">
                <button class="btn btn-primary" type="submit">検索</button>
              </form>
            </div>
          </nav>
        </div>

      </div>
    </div>
  </div>


  <!-- Buttons
  ================================================== -->
  <div class="bs-docs-section">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-12">
          <h1 id="buttons">Buttons</h1>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-7">

        <p class="bs-component">
          <button type="button" class="btn btn-primary">Primary</button>
          <button type="button" class="btn btn-secondary">Secondary</button>
          <button type="button" class="btn btn-success">Success</button>
          <button type="button" class="btn btn-info">Info</button>
          <button type="button" class="btn btn-warning">Warning</button>
          <button type="button" class="btn btn-danger">Danger</button>
          <button type="button" class="btn btn-link">Link</button>
        </p>

        <p class="bs-component">
          <button type="button" class="btn btn-primary disabled">Primary</button>
          <button type="button" class="btn btn-secondary disabled">Secondary</button>
          <button type="button" class="btn btn-success disabled">Success</button>
          <button type="button" class="btn btn-info disabled">Info</button>
          <button type="button" class="btn btn-warning disabled">Warning</button>
          <button type="button" class="btn btn-danger disabled">Danger</button>
          <button type="button" class="btn btn-link disabled">Link</button>
        </p>

        <p class="bs-component">
          <button type="button" class="btn btn-outline-primary">Primary</button>
          <button type="button" class="btn btn-outline-secondary">Secondary</button>
          <button type="button" class="btn btn-outline-success">Success</button>
          <button type="button" class="btn btn-outline-info">Info</button>
          <button type="button" class="btn btn-outline-warning">Warning</button>
          <button type="button" class="btn btn-outline-danger">Danger</button>
        </p>

        <div class="bs-component">
          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            <button type="button" class="btn btn-primary">Primary</button>
            <div class="btn-group" role="group">
              <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
              <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                <a class="dropdown-item" href="#">Dropdown link</a>
                <a class="dropdown-item" href="#">Dropdown link</a>
              </div>
            </div>
          </div>

          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            <button type="button" class="btn btn-success">Success</button>
            <div class="btn-group" role="group">
              <button id="btnGroupDrop2" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
              <div class="dropdown-menu" aria-labelledby="btnGroupDrop2">
                <a class="dropdown-item" href="#">Dropdown link</a>
                <a class="dropdown-item" href="#">Dropdown link</a>
              </div>
            </div>
          </div>

          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            <button type="button" class="btn btn-info">Info</button>
            <div class="btn-group" role="group">
              <button id="btnGroupDrop3" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
              <div class="dropdown-menu" aria-labelledby="btnGroupDrop3">
                <a class="dropdown-item" href="#">Dropdown link</a>
                <a class="dropdown-item" href="#">Dropdown link</a>
              </div>
            </div>
          </div>

          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            <button type="button" class="btn btn-danger">Danger</button>
            <div class="btn-group" role="group">
              <button id="btnGroupDrop4" type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
              <div class="dropdown-menu" aria-labelledby="btnGroupDrop4">
                <a class="dropdown-item" href="#">Dropdown link</a>
                <a class="dropdown-item" href="#">Dropdown link</a>
              </div>
            </div>
          </div>
        </div>

        <div class="bs-component">
          <button type="button" class="btn btn-primary btn-lg">Large button</button>
          <button type="button" class="btn btn-primary">Default button</button>
          <button type="button" class="btn btn-primary btn-sm">Small button</button>
        </div>

      </div>
      <div class="col-lg-5">

        <p class="bs-component">
          <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
        </p>

        <div class="bs-component" style="margin-bottom: 15px;">
          <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-primary active">
              <input type="checkbox" checked> Checkbox 1
            </label>
            <label class="btn btn-primary">
              <input type="checkbox"> Checkbox 2
            </label>
            <label class="btn btn-primary">
              <input type="checkbox"> Checkbox 3
            </label>
          </div>
        </div>

        <div class="bs-component" style="margin-bottom: 15px;">
          <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-primary active">
              <input type="radio" name="options" id="option1" checked> Radio 1
            </label>
            <label class="btn btn-primary">
              <input type="radio" name="options" id="option2"> Radio 2
            </label>
            <label class="btn btn-primary">
              <input type="radio" name="options" id="option3"> Radio 3
            </label>
          </div>
        </div>

        <div class="bs-component">
          <div class="btn-group-vertical" data-toggle="buttons">
            <label class="btn btn-primary active">
              <input type="radio" name="options" id="option4" checked> Radio 1
            </label>
            <label class="btn btn-primary">
              <input type="radio" name="options" id="option5"> Radio 2
            </label>
            <label class="btn btn-primary">
              <input type="radio" name="options" id="option6"> Radio 3
            </label>
          </div>
        </div>

        <div class="bs-component" style="margin-bottom: 15px;">
          <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-secondary">Left</button>
            <button type="button" class="btn btn-secondary">Middle</button>
            <button type="button" class="btn btn-secondary">Right</button>
          </div>
        </div>

        <div class="bs-component" style="margin-bottom: 15px;">
          <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group" role="group" aria-label="First group">
              <button type="button" class="btn btn-secondary">1</button>
              <button type="button" class="btn btn-secondary">2</button>
              <button type="button" class="btn btn-secondary">3</button>
              <button type="button" class="btn btn-secondary">4</button>
            </div>
            <div class="btn-group" role="group" aria-label="Second group">
              <button type="button" class="btn btn-secondary">5</button>
              <button type="button" class="btn btn-secondary">6</button>
              <button type="button" class="btn btn-secondary">7</button>
            </div>
            <div class="btn-group" role="group" aria-label="Third group">
              <button type="button" class="btn btn-secondary">8</button>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Typography
  ================================================== -->
  <div class="bs-docs-section">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <h1 id="typography">Typography</h1>
        </div>
      </div>
    </div>

    <!-- Headings -->

    <div class="row">
      <div class="col-lg-4">
        <div class="bs-component">
          <h1>見出し 1</h1>
          <h2>見出し 2</h2>
          <h3>見出し 3</h3>
          <h4>見出し 4</h4>
          <h5>見出し 5</h5>
          <h6>見出し 6</h6>
          <h3>
            見出し
            <small class="text-muted">副タイトル</small>
          </h3>
          <p class="lead">色は匂へど散りぬるを 我が世誰そ常ならむ。</p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="bs-component">
          <h2>Example body text</h2>
          <p>グスコーブドリは、<a href="#">イーハトーヴ</a>の大きな森のなかに生まれました。おとうさんは、グスコーナドリという名高い木こりで、どんな大きな木でも、まるで赤ん坊を寝かしつけるようにわけなく切ってしまう人でした。</p>
          <p><small>テキストのこの行は、細字として扱われることを意味します。</small></p>
          <p>テキストの次のコードは、 <strong>太字のテキストとしてレンダリングされます</strong>。</p>
          <p>テキストの次のコードは、 <em>斜体のテキストとしてレンダリングされます</em>。</p>
          <p><abbr title="Nippon Telegraph and Telephone Corporation">NTT</abbr>の日本語名称は「日本電信電話」です。</p>
        </div>

      </div>
      <div class="col-lg-4">
        <div class="bs-component">
          <h2>Emphasis classes</h2>
          <p class="text-muted">春はあけぼの。やうやう白くなりゆく山際、少しあかりて、紫だちたる雲の細くたなびきたる。</p>
          <p class="text-primary">夏は夜。月の頃はさらなり。闇もなほ、蛍のおほく飛びちがひたる。</p>
          <p class="text-warning">また、ただ一つ二つなど、ほのかにうち光りて行くもをかし。雨など降るもをかし。</p>
          <p class="text-danger">秋は夕暮れ。夕日のさして山の端いと近うなりたるに、烏の、寝どころへ行くとて、三つ四つ、二つ三つなど飛び急ぐさへあはれなり。</p>
          <p class="text-success">まいて、雁などのつらねたるが、いと小さく見ゆるは、いとをかし。 </p>
          <p class="text-info">日入り果てて、風の音、虫の音など、はた言ふべきにあらず。</p>
        </div>

      </div>
    </div>

    <!-- Blockquotes -->

    <div class="row">
      <div class="col-lg-12">
        <h2 id="type-blockquotes">Blockquotes</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="bs-component">
          <blockquote class="blockquote">
            <p>BootstrapはWebサイトやWebアプリケーションを作成するフリーソフトウェアツール集である。タイポグラフィ、フォーム、ボタン、ナビゲーション、その他構成要素やJavaScript用拡張などがHTML及びCSSベースのデザインテンプレートとして用意されている。</p>
            <footer class="blockquote-footer">出典 <cite title="Source Title">Bootstrap - Wikipedia</cite></footer>
          </blockquote>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="bs-component">
          <blockquote class="blockquote blockquote-reverse">
            <p>BootstrapはWebサイトやWebアプリケーションを作成するフリーソフトウェアツール集である。タイポグラフィ、フォーム、ボタン、ナビゲーション、その他構成要素やJavaScript用拡張などがHTML及びCSSベースのデザインテンプレートとして用意されている。</p>
            <footer class="blockquote-footer">出典 <cite title="Source Title">Bootstrap - Wikipedia</cite></footer>
          </blockquote>
        </div>
      </div>
    </div>
  </div>

  <!-- Tables
  ================================================== -->
  <div class="bs-docs-section">

    <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <h1 id="tables">Tables</h1>
        </div>

        <div class="bs-component">
          <table class="table table-striped table-hover table-bordered">
            <thead class="thead-inverse">
              <tr>
                <th>#</th>
                <th>タイトル</th>
                <th>タイトル</th>
                <th>タイトル</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>カラムの内容</td>
                <td>カラムの内容</td>
                <td>カラムの内容</td>
              </tr>
              <tr>
                <td>2</td>
                <td>カラムの内容</td>
                <td>カラムの内容</td>
                <td>カラムの内容</td>
              </tr>
              <tr class="table-info">
                <td>3</td>
                <td>カラムの内容</td>
                <td>カラムの内容</td>
                <td>カラムの内容</td>
              </tr>
              <tr class="table-success">
                <td>4</td>
                <td>カラムの内容</td>
                <td>カラムの内容</td>
                <td>カラムの内容</td>
              </tr>
              <tr class="table-danger">
                <td>5</td>
                <td>カラムの内容</td>
                <td>カラムの内容</td>
                <td>カラムの内容</td>
              </tr>
              <tr class="table-warning">
                <td>6</td>
                <td>カラムの内容</td>
                <td>カラムの内容</td>
                <td>カラムの内容</td>
              </tr>
              <tr class="table-active">
                <td>7</td>
                <td>カラムの内容</td>
                <td>カラムの内容</td>
                <td>カラムの内容</td>
              </tr>
            </tbody>
          </table>
        </div><!-- /example -->
      </div>
    </div>
  </div>

  <!-- Forms
  ================================================== -->
  <div class="bs-docs-section">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <h1 id="forms">Forms</h1>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <div class="bs-component">
          <form>
            <fieldset>
              <legend>Legend</legend>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">入力したメールアドレスは公開されません</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="exampleSelect1">Example select</label>
                <select class="form-control" id="exampleSelect1">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleSelect2">Example multiple select</label>
                <select multiple class="form-control" id="exampleSelect2">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleTextarea">Example textarea</label>
                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                <small id="fileHelp" class="form-text text-muted">ここには上の入力フォームのヘルプとなるテキストが表示される場所です。長いテキストの場合は折り返されます。</small>
              </div>
              <fieldset class="form-group">
                <legend>Radio buttons</legend>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    このオプションが自動で選択されているはずです
                  </label>
                </div>
                <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                    このオプションを選択すると上の選択が解除されてこっちが選択された状態になるはずです
                  </label>
                </div>
                <div class="form-check disabled">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                    このオプションは無効化されています
                  </label>
                </div>
              </fieldset>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input">
                  チェックボタン
                </label>
              </div>
              <button type="submit" class="btn btn-primary">決定</button>
            </fieldset>
          </form>
        </div>
      </div>
      <div class="col-lg-4 col-lg-offset-1">

          <form class="bs-component">

            <div class="form-group">
              <fieldset disabled>
                <label class="control-label" for="disabledInput">Disabled input</label>
                <input class="form-control" id="disabledInput" type="text" placeholder="無効化された入力欄" disabled="">
              </fieldset>
            </div>

            <div class="form-group">
              <fieldset>
                <label class="control-label" for="readOnlyInput">Readonly input</label>
                <input class="form-control" id="readOnlyInput" type="text" placeholder="読み込み専用の入力欄" readonly>
              </fieldset>
            </div>

            <div class="form-group has-success">
              <label class="form-control-label" for="inputSuccess1">Input with success</label>
              <input type="text" class="form-control form-control-success" id="inputSuccess1">
              <div class="form-control-feedback">成功！</div>
            </div>

            <div class="form-group has-warning">
              <label class="form-control-label" for="inputWarning1">Input with warning</label>
              <input type="text" class="form-control form-control-warning" id="inputWarning1">
              <div class="form-control-feedback">もう一度やり直してください</div>
            </div>

            <div class="form-group has-danger">
              <label class="form-control-label" for="inputDanger1">Input with danger</label>
              <input type="text" class="form-control form-control-danger" id="inputDanger1">
              <div class="form-control-feedback">そのユーザー名は既に使用されています</div>
            </div>

            <div class="form-group">
              <label class="col-form-label col-form-label-lg" for="inputLarge">Large input</label>
              <input class="form-control form-control-lg" type="text" id="inputLarge">
            </div>

            <div class="form-group">
              <label class="col-form-label" for="inputDefault">Default input</label>
              <input type="text" class="form-control" id="inputDefault">
            </div>

            <div class="form-group">
              <label class="col-form-label col-form-label-sm" for="inputSmall">Small input</label>
              <input class="form-control form-control-sm" type="text" id="inputSmall">
            </div>

            <div class="form-group">
              <label class="control-label">Input addons</label>
              <div class="form-group">
                <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                <div class="input-group">
                  <div class="input-group-addon">$</div>
                  <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
                  <div class="input-group-addon">.00</div>
                </div>
              </div>
            </div>
          </form>

      </div>
    </div>
  </div>

  <!-- Navs
  ================================================== -->
  <div class="bs-docs-section">

    <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <h1 id="navs">Navs</h1>
        </div>
      </div>
    </div>

    <div class="row" style="margin-bottom: 2rem;">
      <div class="col-lg-6">
        <h2 id="nav-tabs">Tabs</h2>
        <div class="bs-component">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#home">坊っちゃん</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#profile">愚見数則</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">無効タブ</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </li>
          </ul>
          <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="home">
              <p>親讓りの無鐵砲で小供の時から損ばかりして居る。小學校に居る時分學校の二階から飛び降りて一週間程腰を拔かした事がある。なぜそんな無闇（むやみ）をしたと聞く人があるかも知れぬ。別段深い理由でもない。新築の二階から首を出して居たら、同級生の一人が冗談に、いくら威張つても、そこから飛び降りる事は出來まい。弱虫やーい。と囃（はや）したからである。小使（こづかひ）に負ぶさつて歸つて來た時、おやぢが大きな眼をして二階位（にかいぐらゐ）から飛び降りて腰を拔かす奴があるかと云つたから、此次（このつぎ）は拔かさずに飛んで見せますと答へた。</p>
            </div>
            <div class="tab-pane fade" id="profile">
              <p>昔しの書生は、笈を負ひて四方に遊歴し、此人ならばと思ふ先生の許に落付く、故に先生を敬ふ事、父兄に過ぎたり、先生も亦弟子に対する事、真の子の如し、是でなくては真の教育といふ事は出来ぬなり、今の書生は学校を旅屋の如く思ふ、金を出して暫らく逗留するに過ぎず、厭になればすぐに宿を移す、かゝる生徒に対する校長は、宿屋の主人の如く、教師は番頭丁稚なり、主人たる校長すら、時には御客の機嫌を取らねばならず、況んや番頭丁稚をや、薫陶所か解雇されざるを以て幸福と思ふ位なり、生徒の増長し教員の下落するは当前の事なり。</p>
            </div>
            <div class="tab-pane fade" id="dropdown1">
              <p>雨ニモマケズ 風ニモマケズ 雪ニモ夏ノ暑サニモマケヌ 丈夫ナカラダヲモチ 慾ハナク 決シテ瞋ラズ イツモシズカニワラッテイル 一日ニ玄米四合ト 味噌ト少シノ野菜ヲタベ アラユルコトヲ ジブンヲカンジョウニ入レズニ ヨクミキキシワカリ ソシテワスレズ</p>
            </div>
            <div class="tab-pane fade" id="dropdown2">
              <p>わたくしといふ現象は 假定された有機交流電燈の ひとつの青い照明です （あらゆる透明な幽霊の複合体） 風景やみんなといっしょに せはしくせはしく明滅しながら いかにもたしかにともりつづける 因果交流電燈の ひとつの青い照明です （ひかりはたもち、その電燈は失はれ）</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <h2 id="nav-pills">Pills</h2>
        <div class="bs-component">
          <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link active" href="#">Active</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
        </div>
        <br>
        <div class="bs-component">
          <ul class="nav nav-pills nav-stacked">
            <li class="nav-item">
              <a class="nav-link active" href="#">Active</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <h2 id="nav-breadcrumbs">Breadcrumbs</h2>
        <div class="bs-component">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active">Home</li>
          </ol>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Library</li>
          </ol>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Library</a></li>
            <li class="breadcrumb-item active">Data</li>
          </ol>
        </div>
      </div>

      <div class="col-lg-6">
        <h2 id="pagination">Pagination</h2>
        <div class="bs-component">
          <div>
            <ul class="pagination">
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

          <div>
            <ul class="pagination pagination-lg">
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
  </div>

  <!-- Indicators
  ================================================== -->
  <div class="bs-docs-section">

    <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <h1 id="indicators">Indicators</h1>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <h2>Alerts</h2>
        <div class="bs-component">
          <div class="alert alert-dismissible alert-warning">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4>Warning!</h4>
            <p>要求された処理は正常に完了できませんでした。このエラーについての詳細は<a href="#" class="alert-link">こちらのドキュメントを参照してください</a>。</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="bs-component">
          <div class="alert alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>エラー</strong> <a href="#" class="alert-link">タイトルを入力し</a>、再度投稿を行って下さい。
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="bs-component">
          <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>完了</strong> 記事「<a href="#" class="alert-link">国立音ノ木坂学院について</a>」を公開しました。
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="bs-component">
          <div class="alert alert-dismissible alert-info">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Tips</strong> この<a href="#" class="alert-link">アラートは気にする必要がありますが</a>、そんなに重要ではありません。
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <h2>Tags</h2>
        <div class="bs-component" style="margin-bottom: 40px;">
          <span class="tag tag-default">Default</span>
          <span class="tag tag-primary">Primary</span>
          <span class="tag tag-success">Success</span>
          <span class="tag tag-warning">Warning</span>
          <span class="tag tag-danger">Danger</span>
          <span class="tag tag-info">Info</span>
        </div>
        <div class="bs-component">
          <span class="tag tag-pill tag-default">Default</span>
          <span class="tag tag-pill tag-primary">Primary</span>
          <span class="tag tag-pill tag-success">Success</span>
          <span class="tag tag-pill tag-warning">Warning</span>
          <span class="tag tag-pill tag-danger">Danger</span>
          <span class="tag tag-pill tag-info">Info</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Progress
  ================================================== -->
  <div class="bs-docs-section">

    <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <h1 id="progress">Progress</h1>
        </div>

        <h3 id="progress-basic">Basic</h3>
        <div class="bs-component">
          <progress class="progress" value="50" max="100" ></progress>
        </div>

        <h3 id="progress-alternatives">Contextual alternatives</h3>
        <div class="bs-component">
          <progress class="progress progress-success" value="25" max="100" ></progress>
          <progress class="progress progress-info" value="50" max="100" ></progress>
          <progress class="progress progress-warning" value="75" max="100" ></progress>
          <progress class="progress progress-danger" value="100" max="100" ></progress>
        </div>

        <h3 id="progress-striped">Striped</h3>
        <div class="bs-component">
          <progress class="progress progress-striped" value="10" max="100"></progress>
          <progress class="progress progress-striped progress-success" value="25" max="100"></progress>
          <progress class="progress progress-striped progress-info" value="50" max="100"></progress>
          <progress class="progress progress-striped progress-warning" value="75" max="100"></progress>
          <progress class="progress progress-striped progress-danger" value="100" max="100"></progress>
        </div>

        <h3 id="progress-animated">Animated</h3>
        <div class="bs-component">
          <progress class="progress progress-striped progress-animated" value="25" max="100"></progress>
        </div>
      </div>
    </div>
  </div>

  <!-- Containers
  ================================================== -->
  <div class="bs-docs-section">

    <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <h1 id="containers">Containers</h1>
        </div>
        <div class="bs-component">
          <div class="jumbotron">
            <h1 class="display-3">ラブライブ！</h1>
            <p>東京都千代田区にある、ごくありふれた女子高校の「音ノ木坂学院（おとのきざかがくいん）」。地域の人々の想い出に育まれた歴史と伝統あるこの学院も時代の流れには勝てず、3年後に迫る学校統廃合の危機に瀕していた。そんな中、9人の生徒が立ち上がる。彼女たちは、自らがアイドルとして活動し、学校の名を世に広め、入学希望者を増やそうと考えたのだ。今、少女たちと、まだ見ぬファンのみんなで叶える物語＝スクールアイドルプロジェクトが始まった。</p>
            <p><a class="btn btn-primary btn-lg" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-lg-12">
        <h2>List groups</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="bs-component">
          <ul class="list-group">
            <li class="list-group-item">
              <span class="tag tag-default tag-pill float-xs-right">14</span>
              僕らは今のなかで
            </li>
            <li class="list-group-item">
              <span class="tag tag-default tag-pill float-xs-right">2</span>
              WILD STARS
            </li>
            <li class="list-group-item">
              <span class="tag tag-default tag-pill float-xs-right">1</span>
              きっと青春が聞こえる
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="bs-component">
          <div class="list-group">
            <a href="#" class="list-group-item  list-group-item-action active">
              輝夜の城で踊りたい
            </a>
            <a href="#" class="list-group-item list-group-item-action">ススメ→トゥモロウ
            </a>
            <a href="#" class="list-group-item list-group-item-action disabled">START:DASH!!
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="bs-component">
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active">
              <h4 class="list-group-item-heading">園田 海未</h4>
              <p class="list-group-item-text">穂乃果の幼なじみ。文武両道の大和撫子。趣味は読書と書道。</p>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <h4 class="list-group-item-heading">南 ことり</h4>
              <p class="list-group-item-text">穂乃果の幼なじみ。おっとりした性格。</p>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <h2>Cards</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="bs-component">
          <div class="card card-inverse card-primary text-xs-center">
            <div class="card-block">
              <blockquote class="card-blockquote">
                <p>生徒会長。才色兼備のロシア系クォーター。</p>
                <footer>絢瀬 絵里 <cite title="Source Title">CV. 南條愛乃</cite></footer>
              </blockquote>
            </div>
          </div>
          <div class="card card-inverse card-success text-xs-center">
            <div class="card-block">
              <blockquote class="card-blockquote">
                <p>凛の幼なじみ。内気でおとなしいが、アイドルに憧れを抱いている。</p>
                <footer>小泉 花陽 <cite title="Source Title">CV. 久保ユリカ</cite></footer>
              </blockquote>
            </div>
          </div>
          <div class="card card-inverse card-info text-xs-center">
            <div class="card-block">
              <blockquote class="card-blockquote">
                <p>生徒会副会長。関西弁でしゃべるスピリチュアル好きの少女。</p>
                <footer>東條 希 <cite title="Source Title">CV. 楠田亜衣奈</cite></footer>
              </blockquote>
            </div>
          </div>
          <div class="card card-inverse card-warning text-xs-center">
            <div class="card-block">
              <blockquote class="card-blockquote">
                <p>μ'sの発起人。いつも笑顔で、行動力に満ちている。</p>
                <footer>高坂 穂乃果 <cite title="Source Title">CV. 新田恵海</cite></footer>
              </blockquote>
            </div>
          </div>
          <div class="card card-inverse card-danger text-xs-center">
            <div class="card-block">
              <blockquote class="card-blockquote">
                <p>歌やピアノが得意なお嬢様。父は西木野総合病院医院長。</p>
                <footer>西木野 真姫 <cite title="Source Title">CV. Pile</cite></footer>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="bs-component">
          <div class="card card-outline-primary text-xs-center">
            <div class="card-block">
              <blockquote class="card-blockquote">
                <p>生徒会長。才色兼備のロシア系クォーター。</p>
                <footer>絢瀬 絵里 <cite title="Source Title">CV. 南條愛乃</cite></footer>
              </blockquote>
            </div>
          </div>
          <div class="card card-outline-success text-xs-center">
            <div class="card-block">
              <blockquote class="card-blockquote">
                <p>凛の幼なじみ。内気でおとなしいが、アイドルに憧れを抱いている。</p>
                <footer>小泉 花陽 <cite title="Source Title">CV. 久保ユリカ</cite></footer>
              </blockquote>
            </div>
          </div>
          <div class="card card-outline-info text-xs-center">
            <div class="card-block">
              <blockquote class="card-blockquote">
                <p>生徒会副会長。関西弁でしゃべるスピリチュアル好きの少女。</p>
                <footer>東條 希 <cite title="Source Title">CV. 楠田亜衣奈</cite></footer>
              </blockquote>
            </div>
          </div>
          <div class="card card-outline-warning text-xs-center">
            <div class="card-block">
              <blockquote class="card-blockquote">
                <p>μ'sの発起人。いつも笑顔で、行動力に満ちている。</p>
                <footer>高坂 穂乃果 <cite title="Source Title">CV. 新田恵海</cite></footer>
              </blockquote>
            </div>
          </div>
          <div class="card card-outline-danger text-xs-center">
            <div class="card-block">
              <blockquote class="card-blockquote">
                <p>歌やピアノが得意なお嬢様。父は西木野総合病院医院長。</p>
                <footer>西木野 真姫 <cite title="Source Title">CV. Pile</cite></footer>
              </blockquote>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="bs-component">
          <div class="card">
            <h3 class="card-header">矢澤 にこ</h3>
            <div class="card-block">
              <h5 class="card-title">キャラクター説明</h5>
              <h6 class="card-subtitle text-muted">サブタイトル</h6>
            </div>
            <img style="height: 200px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_158bd1d28ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_158bd1d28ef%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22129.359375%22%20y%3D%2297.35%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image">
            <div class="card-block">
              <p class="card-text">「にっこにっこにー」を合言葉に、キャラ造りを欠かさないアイドル志望者。</p>
              <a href="#" class="card-link">こころ</a>
              <a href="#" class="card-link">ここあ</a>
            </div>
            <div class="card-footer text-muted text-xs-center">
              2 days ago
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Dialogs
  ================================================== -->
  <div class="bs-docs-section">

    <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <h1 id="dialogs">Dialogs</h1>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <h2>Modals</h2>
        <div class="bs-component">
          <div class="modal">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h4 class="modal-title">タイトル</h4>
                </div>
                <div class="modal-body">
                  <p>ここに本文が入ります</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <h2>Popovers</h2>
        <div class="bs-component" style="margin-bottom: 3em;">
          <button type="button" class="btn btn-secondary" title="Popover Title" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Left</button>

          <button type="button" class="btn btn-secondary" title="Popover Title" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Top</button>

          <button type="button" class="btn btn-secondary" title="Popover Title" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
          sagittis lacus vel augue laoreet rutrum faucibus.">Bottom</button>

          <button type="button" class="btn btn-secondary" title="Popover Title" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Right</button>
        </div>
        <h2>Tooltips</h2>
        <div class="bs-component">
          <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Left</button>

          <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Top</button>

          <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Bottom</button>

          <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Right</button>
        </div>
      </div>
    </div>
  </div>

  <div id="source-modal" class="modal fade">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Source Code</h4>
        </div>
        <div class="modal-body">
          <pre></pre>
        </div>
      </div>
    </div>
  </div>

--}}

@endsection