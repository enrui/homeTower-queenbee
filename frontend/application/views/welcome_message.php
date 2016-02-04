
<!DOCTYPE html>

<html>

<head>
  <title>Material Design for Bootstrap</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Mobile support -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Material Design fonts -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Material Design -->
  <link href="assets/css/bootstrap-material-design.css" rel="stylesheet">
  <link href="assets/css/ripples.min.css" rel="stylesheet">

  <!-- Dropdown.js -->
  <link href="//cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.css" rel="stylesheet">

  <!-- Page style -->
  <link href="index.css" rel="stylesheet">

  <!-- jQuery -->
  <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>

</head>
<body>

<a href="https://github.com/FezVrasta/bootstrap-material-design" style="position: absolute; top: 0; left: 0; border: 0; z-index: 10;"><img src="https://s3.amazonaws.com/github/ribbons/forkme_left_darkblue_121621.png" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png"></a>

<div class="header-panel shadow-z-2">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-3">
        <h1>Paper Elements</h1>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid main">
  <div class="row">
    <nav class="col-xs-3 menu">
      <ul>
        <li class="active withripple" data-target="#about">Material Design for Bootstrap</li>
        <li class="withripple" data-target="#getting-started">Getting Started</li>
        <li><a href="bootstrap-elements.html" target="_blank">Bootstrap elements <i class="mdi-action-open-in-new"></i></a>
        </li>
        <li class="withripple" data-target="#checkbox">Checkbox</li>
        <li class="withripple" data-target="#radio-button">Radio Button</li>
        <li class="withripple" data-target="#toggle-button">Toggle Button</li>
        <li class="withripple" data-target="#input">Input</li>
        <li class="withripple" data-target="#fileinput">File Input</li>
        <li class="withripple" data-target="#navbar">Navbar</li>
        <li class="withripple" data-target="#progress-bar">Progress Bar</li>
        <li class="withripple" data-target="#slider">Slider</li>
        <li class="withripple" data-target="#dropdown">Dropdown (Work in progress)</li>
        <li class="withripple" data-target="#dropdown-menu">Dropdown Menu</li>
        <li class="withripple" data-target="#dialog">Dialog</li>
      </ul>
    </nav>
    <div class="pages col-xs-9">
      <div class="row">
        <div class="col-xs-10">
          <div class="well page active" id="about">
            <h1 class="header">Material Design for Bootstrap</h1>

            <p>Material Design for Bootstrap is a theme for Bootstrap 3 which lets you use the new
              <a href="http://www.google.com/design/spec/material-design/" target="_blank">Google Material Design</a> in your favorite front-end framework.
            </p>

            <p>If you like this project you can support me by donating something on Gratipay, starring this repository, or
              <a href="https://github.com/FezVrasta/bootstrap-material-design/issues">reporting bugs and ideas</a>.</p>

            <p>Read more about Material Design for Bootstrap at the
              <a href="https://github.com/FezVrasta/bootstrap-material-design">Github page</a>.</p>

            <br>

            <p>If you want support the development of this project please consider donate something:</p>
            <a href="https://www.gratipay.com/FezVrasta/" target="_blank" class="btn btn-primary">Donate with Gratipay</a>

            <form action="https://www.paypal.com/cgi-bin/webscr" id="paypal" method="post" target="_blank" style="display: inline-block;">
              <input type="hidden" name="cmd" value="_s-xclick">

              <div class="btn btn-primary">
                <select name="hosted_button_id" title="I can't accept less than 5 euro due to accounting troubles">
                  <option value="DAAK965W2DKYE">&euro; 5,00</option>
                  <option value="28PH77JK5QWFE">&euro; 10,00</option>
                  <option value="6B6TJAJ2R99HS">&euro; 15,00</option>
                  <option value="GJCEKCQFMBVHA">&euro; 20,00</option>
                  <option value="U7QXM95C8RJ9W">&euro; 25,00</option>
                  <option value="55S3VBB3U4NAS">&euro; 50,00</option>
                </select>
                <input type="submit" value="DONATE WITH PAYPAL" name="submit">
              </div>
            </form>
            <p>Thanks to all the people that donate me weekly on Gratipay and all the ones which has donated on PayPal! You are great guys!</p>

            <br>

            <p>Would you like to use this theme for commercial projects? Visit
              <a href="http://www.mywebexpression.com">MyWebExpression</a> and contact me using the form on the bottom of the page. Thanks!
            </p>

            <br>

            <div class="cbwrapper">
              <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1673&serve=C6AILKT&placement=fezvrastagithubiobootstrapmateri" id="_carbonads_js"></script>
              <div id="fakecb">Seems like you are using AdBlock to hide banners... Carbon ADS are quite nice and don't take much space, you may consider disabling it on this website.<br>This is the only AD on the entire website.<br><br>Thanks!
              </div>
            </div>

            <br>

            <p>You can get this theme downloading the source from Bower:</p>
            <pre><code>bower install bootstrap-material-design</code></pre>


          </div>
          <div class="well page" id="getting-started">
            <h1 class="header">Getting Started</h1>

            <h3>Download</h3>
            <hr>
            <h4>Install with NPM - Coming Soon</h4>

            <p>You can also install and manage Material Bootstrap using NPM</p>
            <pre><code>npm install</code></pre>
            <h4>Install with Bower</h4>

            <p>You can also install and manage Material Bootstrap using Bower</p>
            <pre><code>bower install bootstrap-material-design</code></pre>
            <h4>Install with Meteor</h4>

            <p>You can also install and manage Material Bootstrap using Meteor</p>
            <pre><code>meteor add fezvrasta:bootstrap-material-design</code></pre>
            <br/>

            <h3>What's included</h3>
            <hr>
            <p>Material Design for Bootstrap is downloadable in a two forms. First, as less/sass source files. Second, as compiled .css files.</p>

            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title">Required Frameworks</h3>
              </div>
              <div class="panel-body">
                <div class="list-group">
                  <div class="list-group-item">
                    <div class="row-action-primary">
                      <i class="mdi-action-settings"></i>
                    </div>
                    <div class="row-content">
                      <h4 class="list-group-item-heading">Bootstrap v3.0+</h4>

                      <p class="list-group-item-text">This theme extends, styles, and modifies Bootstrap's elements and styles. Without Bootstrap this project will not display correctly. To install Bootstrap please go to
                        <a href="http://getbootstrap.com/getting-started/">Get Bootstrap</a></p>
                    </div>
                  </div>
                  <div class="list-group-separator"></div>
                  <div class="list-group-item">
                    <div class="row-action-primary">
                      <i class="mdi-action-settings"></i>
                    </div>
                    <div class="row-content">
                      <h4 class="list-group-item-heading">jQuery 1.9.1+</h4>

                      <p class="list-group-item-text">All JavaScript plugins require jQuery to be included.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <p>If downloading instead of using Bower, once downloaded, unzip the compressed folder to see the structure of (the compiled) Material Design for Bootstrap. You'll see something like this:</p>
            <!-- This code must be aligned this way to render correctly -->
              <pre><code class="language-bash" data-lang="bash">Material/
                ├── css/
                │ ├── bootstrap-material-design.css
                │ ├── bootstrap-material-design.css.map
                │ ├── bootstrap-material-design.min.css
                │ ├── bootstrap-material-design.min.css.map
                │ ├── ripples.css.map
                │ ├── ripples.min.css
                │ ├── ripples.min.css.map
                ├── js/
                │ ├── material.js
                │ ├── material.min.js
                │ ├── material.min.js.map
                │ ├── ripples.js
                │ ├── ripples.min.js
                │ ├── ripples.min.js.map
              </code>
              </pre>
            <p>Just copy the compiled CSS and JS files and the font files from the .zip and add them to your site.</p>
            <br/>

            <p>Once copied you need to initialize the material javascript by adding the following javascript to your site,</p>
            <pre><code>$.material.init()</code></pre>
          </div>

          <div class="well page" id="checkbox">
            <h1 class="header">Checkbox</h1>

            <h2>Default <small>inside a <code>.form-group</code></small></h2>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Notifications
                </label>
              </div>
              <p class="help-block">Notify me about updates to apps or games that I've downloaded</p>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" checked> Auto-updates
                </label>
              </div>
              <p class="help-block">Auto-update apps over wifi only</p>
            </div>

            <h2>Horizontal form with column label variations</h2>
            <form class="form-horizontal">
              <div class="form-group">
                <label class="col-sm-2" for="ch1">Touch sounds</label>
                <div class="col-sm-10">
                  <div class="checkbox">
                    <label>
                      <input id="ch1" type="checkbox" checked>
                    </label>
                  </div>
                  <p class="help-block">This shows the generic label variant.</p>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="ch3">Vibrate on touch</label>
                <div class="col-sm-10">
                  <div class="checkbox">
                    <label>
                      <input id="ch3" type="checkbox">
                    </label>
                  </div>
                  <p class="help-block">This shows the <code>control-label</code> variant.</p>
                </div>
              </div>
            </form>

            <h2>Default <small>outside a <code>.form-group</code></small></h2>
            <div class="checkbox">
              <label>
                <input type="checkbox"> Notifications
              </label>
            </div>
            <p class="help-block">Without a <code>.form-group</code>, <code>.help-block</code> always shows</p>
            <div class="checkbox">
              <label>
                <input type="checkbox" checked> Auto-updates
              </label>
            </div>
            <p class="help-block">Without a <code>.form-group</code>, <code>.help-block</code> sizing is the same as the <code>label</code></p>

          </div>
          <div class="well page" id="radio-button">
            <h1 class="header">Radio buttons</h1>

            <h2>Default <small>outside a <code>.form-group</code></small></h2>
            <div class="radio">
              <label>
                <input type="radio" name="sample1" value="option1" checked="">
                Always
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="sample1" value="option1">
                Only when plugged in
              </label>
            </div>

            <h2>Default inside a <small><code>.form-group</code></small></h2>
            <div class="form-group">
              <div class="radio">
                <label>
                  <input type="radio" name="sample1" value="option1" checked="">
                  Always
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="sample1" value="option1">
                  Only when plugged in
                </label>
              </div>
            </div>

          </div>
          <div class="well page" id="toggle-button">

            <h1 class="header">Toggle Button</h1>

            <div class="togglebutton">
              <label>
                Wi-Fi
                <input type="checkbox" checked>
              </label>
            </div>
            <div class="togglebutton">
              <label>
                Bluetooth
                <input type="checkbox">
              </label>
            </div>
          </div>
          <div class="well page" id="input">
            <h1 class="header">Input
              <small><a href="http://www.google.com/design/spec/components/text-fields.html">specification</a></small>
            </h1>

            <div class="inputs">
              <h2>Input label styles
                <small>default sizing</small>
              </h2>

              <div class="form-group label-static">
                <label for="i2" class="control-label">label-static</label>
                <input type="email" class="form-control" id="i2" placeholder="placeholder attribute">

                <p class="help-block">This is a hint as a <code>p.help-block.hint</code></p>
              </div>

              <div class="form-group label-floating">
                <label for="i5" class="control-label">label-floating</label>
                <input type="email" class="form-control" id="i5">
                <span class="help-block">This is a hint as a <code>span.help-block.hint</code></span>
              </div>

              <div class="form-group label-placeholder">
                <label for="i5p" class="control-label">label-placeholder</label>
                <input type="email" class="form-control" id="i5p">
                <span class="help-block">This is a hint as a <code>span.help-block.hint</code></span>
              </div>

              <form>
                <div class="form-group">
                  <label for="i5ps" class="control-label col-sm-2">Column label</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="i5ps" placeholder="placeholder attribute">
                    <span class="help-block">This is a hint as a <code>span.help-block.hint</code></span>
                  </div>
                </div>
              </form>
              <br/>
              <br/>

              <h2>Input - floating labels
                <small>form-group sizing</small>
              </h2>
              <div class="form-group form-group-sm label-floating">
                <label for="i4" class="control-label">Email address form-group-sm</label>
                <input type="email" class="form-control" id="i4">
                <span class="help-block">Please enter a valid email address</span>
              </div>

              <div class="form-group label-floating">
                <label for="i5i" class="control-label">Email address default size</label>
                <input type="email" class="form-control" id="i5i">
                <span class="help-block">Please enter a valid email address</span>
              </div>

              <div class="form-group form-group-lg label-floating">
                <label for="i6" class="control-label">Email address form-group-lg</label>
                <input type="email" class="form-control" id="i6">
                <span class="help-block">Please enter a valid email address</span>
              </div>

              <h2>Input - static labels
                <small>form-group sizing</small>
              </h2>

              <div class="form-group form-group-sm label-static">
                <label for="si4" class="control-label">Email address form-group-sm</label>
                <input type="email" class="form-control" id="si4" placeholder="Placeholder">
                <span class="help-block">Please enter a valid email address</span>
              </div>

              <div class="form-group label-static">
                <label for="si5i" class="control-label">Email address default size</label>
                <input type="email" class="form-control" id="si5i" placeholder="Placeholder">
                <span class="help-block">Please enter a valid email address</span>
              </div>

              <div class="form-group form-group-lg label-static">
                <label for="si6" class="control-label">Email address form-group-lg</label>
                <input type="email" class="form-control" id="si6" placeholder="Placeholder">
                <span class="help-block">Please enter a valid email address</span>
              </div>

              <h2>Input - no labels
                <small>form-group sizing</small>
              </h2>

              <div class="form-group form-group-sm">
                <label for="si4n" class="control-label">Email address form-group-sm</label>
                <input type="email" class="form-control" id="si4n" placeholder="Placeholder">
                <span class="help-block">Please enter a valid email address</span>
              </div>

              <div class="form-group">
                <label for="si5in" class="control-label">Email address default size</label>
                <input type="email" class="form-control" id="si5in" placeholder="Placeholder">
                <span class="help-block">Please enter a valid email address</span>
              </div>

              <div class="form-group form-group-lg">
                <label for="si6n" class="control-label">Email address form-group-lg</label>
                <input type="email" class="form-control" id="si6n" placeholder="Placeholder">
                <span class="help-block">Please enter a valid email address</span>
              </div>


              <h2>Input -
                <small>floating label feedback variants</small>
              </h2>
              <div class="form-group has-success label-floating">
                <label for="f1" class="control-label">Email address has-success</label>
                <input type="email" class="form-control" id="f1">
                <span class="help-block">Please enter a valid email address</span>
              </div>

              <div class="form-group has-warning label-floating">
                <label for="f2" class="control-label">Email address has-warning</label>
                <input type="email" class="form-control" id="f2">
                <span class="help-block">Please enter a valid email address</span>
              </div>

              <div class="form-group has-error label-floating">
                <label for="f3" class="control-label">Email address has-error</label>
                <input type="email" class="form-control" id="f3">
                <span class="help-block">Please enter a valid email address</span>
              </div>


              <h2>Input - Legacy</h2>
              <!-- Exercise backwards compatibility without form-group -->
              <input type="text" class="form-control floating-label" placeholder="Legacy floating label as placeholder attribute" data-hint="This is a hint using a legacy <code>data-hint</code> attribute on the input">

              <h2>Textarea</h2>

              <div class="form-group label-floating">
                <label for="t1" class="control-label">Floating label</label>
                <textarea id="t1" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <textarea class="form-control" placeholder="placeholder without label"></textarea>
              </div>

              <!-- legacy markup -->
              <textarea class="form-control floating-label" placeholder="legacy floating label as placeholder"></textarea>

              <h2>Validation</h2>

              <div class="form-group label-floating">
                <label for="111" class="control-label">email</label>
                <input type="email" class="form-control" id="111">
              </div>
              <div class="form-group label-floating">
                <label for="222" class="control-label">number</label>
                <input type="number" class="form-control" id="222">
              </div>

              <h2>Disabled</h2>

              <div class="form-group label-floating">
                <label for="333" class="control-label">email</label>
                <input disabled type="text" class="form-control" id="333">
              </div>
              <div class="form-group label-floating">
                <label for="444" class="control-label">number</label>
                <input disabled type="text" class="form-control" id="444">
              </div>

              <h2>Hints</h2>

              <div class="form-group label-floating">
                <label for="555" class="control-label">label</label>
                <input type="text" class="form-control" id="555">

                <p class="help-block">Some helpful hint</p>
              </div>
              <div class="form-group label-floating">
                <label for="676" class="control-label">label</label>
                <input type="email" class="form-control" id="676">

                <p class="help-block">A valid email contains an @ character</p>
              </div>


              <h2>Styling</h2>

              <div class="form-group has-success">
                <input type="text" class="form-control" placeholder="placeholder">
              </div>
              <div class="form-group has-success label-floating">
                <label for="777" class="control-label">floating label</label>
                <input type="text" class="form-control" id="777">
              </div>
            </div>
          </div>
          <div class="well page" id="fileinput">
            <h1 class="header">File Input</h1>

            <div class="form-group">
              <label class="control-label" for="inputFile2">Static label</label>
              <input type="file" id="inputFile2" multiple>
              <input type="text" readonly class="form-control" placeholder="Browse2...">
            </div>

            <div class="form-group">
              <!--<label class="control-label" for="inputFile3">File</label>-->
              <input type="file" id="inputFile3" multiple>
              <input type="text" readonly class="form-control" placeholder="Placeholder only...">
            </div>

            <div class="form-group">
              <input type="file" id="inputFile4" multiple>

              <div class="input-group">
                <input type="text" readonly class="form-control" placeholder="Placeholder w/input-group...">
                <span class="input-group-btn input-group-sm">
                  <button type="button" class="btn btn-fab btn-fab-mini">
                    <i class="mdi-editor-attach-file"></i>
                  </button>
                </span>
              </div>
            </div>
          </div>
          <div class="well page" id="navbar">
            <h1 class="header">Navbar</h1>

            <div class="navbar navbar-default">
              <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="javascript:void(0)">Brand</a>
                </div>
                <div class="navbar-collapse collapse navbar-responsive-collapse">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="javascript:void(0)">Active</a></li>
                    <li><a href="javascript:void(0)">Link</a></li>
                    <li class="dropdown">
                      <a href="http://fezvrasta.github.io/bootstrap-material-design/bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                        <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)">Action</a></li>
                        <li><a href="javascript:void(0)">Another action</a></li>
                        <li><a href="javascript:void(0)">Something else here</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Dropdown header</li>
                        <li><a href="javascript:void(0)">Separated link</a></li>
                        <li><a href="javascript:void(0)">One more separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                  <form class="navbar-form navbar-left">
                    <div class="form-group">
                      <input type="text" class="form-control col-sm-8" placeholder="Search">
                    </div>
                  </form>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="javascript:void(0)">Link</a></li>
                    <li class="dropdown">
                      <a href="http://fezvrasta.github.io/bootstrap-material-design/bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                        <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)">Action</a></li>
                        <li><a href="javascript:void(0)">Another action</a></li>
                        <li><a href="javascript:void(0)">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:void(0)">Separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="navbar navbar-warning">
              <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-warning-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="javascript:void(0)">Brand</a>
                </div>
                <div class="navbar-collapse collapse navbar-warning-collapse">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="javascript:void(0)">Active</a></li>
                    <li><a href="javascript:void(0)">Link</a></li>
                    <li class="dropdown">
                      <a href="index.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                        <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)">Action</a></li>
                        <li><a href="javascript:void(0)">Another action</a></li>
                        <li><a href="javascript:void(0)">Something else here</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Dropdown header</li>
                        <li><a href="javascript:void(0)">Separated link</a></li>
                        <li><a href="javascript:void(0)">One more separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                  <form class="navbar-form navbar-left">
                    <div class="form-group">
                      <input type="text" class="form-control col-sm-8" placeholder="Search">
                    </div>
                  </form>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="javascript:void(0)">Link</a></li>
                    <li class="dropdown">
                      <a href="index.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                        <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)">Action</a></li>
                        <li><a href="javascript:void(0)">Another action</a></li>
                        <li><a href="javascript:void(0)">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:void(0)">Separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="navbar navbar-inverse">
              <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="javascript:void(0)">Brand</a>
                </div>
                <div class="navbar-collapse collapse navbar-inverse-collapse">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="javascript:void(0)">Active</a></li>
                    <li><a href="javascript:void(0)">Link</a></li>
                    <li class="dropdown">
                      <a href="index.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                        <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)">Action</a></li>
                        <li><a href="javascript:void(0)">Another action</a></li>
                        <li><a href="javascript:void(0)">Something else here</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Dropdown header</li>
                        <li><a href="javascript:void(0)">Separated link</a></li>
                        <li><a href="javascript:void(0)">One more separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                  <form class="navbar-form navbar-left">
                    <div class="form-group">
                      <input type="text" class="form-control col-sm-8" placeholder="Search">
                    </div>
                  </form>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="javascript:void(0)">Link</a></li>
                    <li class="dropdown">
                      <a href="index.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                        <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)">Action</a></li>
                        <li><a href="javascript:void(0)">Another action</a></li>
                        <li><a href="javascript:void(0)">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:void(0)">Separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="navbar navbar-material-light-blue-300">
              <div class="container-fluid">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-material-light-blue-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="javascript:void(0)">Brand</a>
                </div>
                <div class="navbar-collapse collapse navbar-material-light-blue-collapse">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="javascript:void(0)">Active</a></li>
                    <li><a href="javascript:void(0)">Link</a></li>
                    <li class="dropdown">
                      <a href="index.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                        <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)">Action</a></li>
                        <li><a href="javascript:void(0)">Another action</a></li>
                        <li><a href="javascript:void(0)">Something else here</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Dropdown header</li>
                        <li><a href="javascript:void(0)">Separated link</a></li>
                        <li><a href="javascript:void(0)">One more separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                  <form class="navbar-form navbar-left">
                    <div class="form-group">
                      <input type="text" class="form-control col-sm-8" placeholder="Search">
                    </div>
                  </form>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="javascript:void(0)">Link</a></li>
                    <li class="dropdown">
                      <a href="index.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                        <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)">Action</a></li>
                        <li><a href="javascript:void(0)">Another action</a></li>
                        <li><a href="javascript:void(0)">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:void(0)">Separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

          </div>
          <div class="well page" id="progress-bar">
            <h1 class="header">Progress Bar</h1>

            <h2>Basic</h2>

            <div class="progress">
              <div class="progress-bar" style="width: 60%;"></div>
            </div>

            <h2>Contextual alternatives</h2>

            <div class="progress">
              <div class="progress-bar progress-bar-info" style="width: 20%"></div>
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-success" style="width: 40%"></div>
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
            </div>
            <div class="progress">
              <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
            </div>

            <h2>Striped</h2>

            <div class="progress progress-striped">
              <div class="progress-bar progress-bar-info" style="width: 20%"></div>
            </div>
            <div class="progress progress-striped">
              <div class="progress-bar progress-bar-success" style="width: 40%"></div>
            </div>
            <div class="progress progress-striped">
              <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
            </div>
            <div class="progress progress-striped">
              <div class="progress-bar progress-bar-danger" style="width: 80%"></div>
            </div>

            <h2>Animated</h2>

            <div class="progress progress-striped active">
              <div class="progress-bar" style="width: 45%"></div>
            </div>

            <h2>Stacked</h2>

            <div class="progress">
              <div class="progress-bar progress-bar-success" style="width: 35%"></div>
              <div class="progress-bar progress-bar-warning" style="width: 20%"></div>
              <div class="progress-bar progress-bar-danger" style="width: 10%"></div>
            </div>
          </div>
          <div class="well page" id="slider">
            <h1 class="header">Slider</h1>

            <div class="sample1">
              <h2>Music, video, games &amp; other media</h2>

              <div class="slider shor slider-material-orange"></div>

              <h2>Notifications</h2>

              <div class="slider shor slider-material-orange"></div>

              <h2>Alarms</h2>

              <div class="slider shor slider-material-orange"></div>
            </div>

            <div class="sample2">
              <div class="slider svert"></div>
              <div class="slider svert"></div>
              <div class="slider svert"></div>
            </div>

            <p>Sliders are powered by <a href="http://refreshless.com/nouislider/" target="_blank">noUiSlider</a></p>
          </div>
          <div class="well page" id="dropdown">
            <h1 class="header">Dropdown</h1>

            <h2>Simple dropdown</h2>
            <span class="dropdown"><i class="mdi-navigation-menu"></i></span>
          </div>
          <div class="well page" id="dropdown-menu">
            <h1 class="header">Dropdown</h1>

            <div class="sample">
              <div class="form-group">
                <label for="s1">Your favorite pastry</label>
                <select id="s1" class="form-control">
                  <option value="Apple fritter">Apple fritter</option>
                  <option value="Croissant">Croissant</option>
                  <option value="Donut">Donut</option>
                  <option value="Financier">Financier</option>
                  <option value="Jello">Jello</option>
                  <option value="Madeleine">Madeleine</option>
                  <option value="Pound cake">Pound cake</option>
                  <option value="Pretzel">Pretzel</option>
                  <option value="Sfogliatelle">Sfogliatelle</option>
                </select>
              </div>
              <br>

              <div class="form-group">
                <label for="s2">Your favorite pastry</label>
                <select id="s2" class="form-control" disabled>
                  <option value="disabled">Disabled</option>
                </select>
              </div>
            </div>
            <br>

            <p>Dropdowns provided by
              <a href="https://github.com/FezVrasta/dropdown.js" target="_blank">Dropdown.js</a></p>

          </div>
          <div class="well page" id="dialog">
            <h1 class="header">Dialog</h1>

            <h2>Simple Dialog</h2>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#simple-dialog">Open dialog</button>

            <h2>Dialog with header and footer</h2>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#complete-dialog">Open dialog</button>
            <!-- dialog samples are at the end of the body to avoid z-index conflicts -->
          </div>
        </div>
        <div class="col-xs-2">
          <button type="button" class="btn btn-fab btn-material-grey-200 opensource">
            <i class="mdi-action-open-in-new"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<!--Modals-->
<div id="simple-dialog" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <p>E dolore commodo, id anim aute sint cupidatat eu est anim tamen ad possumus,
          legam officia firmissimum. Eram deserunt domesticarum, iis ita praetermissum,
          nam aliquip quo probant, incididunt et occaecat an nam enim exquisitaque a
          nescius velit admodum, non ad cohaerescant, probant o nulla tempor. Aute aut te
          quis arbitror ubi ne aliqua consequat aliquip. Ad sunt laborum senserit, de do
          quem possumus. Sint tractavissent cupidatat aute possumus ita elit ad cupidatat.
          Arbitror ab fabulas o eu e veniam pariatur. Non voluptate comprehenderit ad nisi
          id voluptate. Quis distinguantur quibusdam quae mentitum o si minim illum nisi
          mandaremus.</p>
      </div>
    </div>
  </div>
</div>

<div id="complete-dialog" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Dialog</h4>
      </div>
      <div class="modal-body">
        <p>Fore aut non quem incididunt, varias reprehenderit deserunt quem offendit,
          cillum proident ne reprehenderit, quem ad laborum, quo possumus praetermissum,
          si ne illustriora, hic appellat coniunctione, do labore aliqua quo probant. In
          probant voluptatibus quo mentitum est laboris. Quorum mandaremus graviterque.
          Mentitum id velit, dolor aut litteris, ea varias illustriora, ita commodo ita
          ingeniis, iis nulla appellat incurreret, aut irure amet summis pariatur ita ubi
          quis dolore veniam proident, consequat sed ingeniis.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Dismiss</button>
      </div>
    </div>
  </div>
</div>

<div id="source-modal" class="modal fade" tabindex="-1">
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


<!-- Open source code -->
<script>
  window.page = window.location.hash || "#about";

  $(document).ready(function () {
    if (window.page != "#about") {
      $(".menu").find("li[data-target=" + window.page + "]").trigger("click");
    }
  });

  $(window).on("resize", function () {
    $("html, body").height($(window).height());
    $(".main, .menu").height($(window).height() - $(".header-panel").outerHeight());
    $(".pages").height($(window).height());
  }).trigger("resize");

  $(".menu li").click(function () {
    // Menu
    if (!$(this).data("target")) return;
    if ($(this).is(".active")) return;
    $(".menu li").not($(this)).removeClass("active");
    $(".page").not(page).removeClass("active").hide();
    window.page = $(this).data("target");
    var page = $(window.page);
    window.location.hash = window.page;
    $(this).addClass("active");


    page.show();

    var totop = setInterval(function () {
      $(".pages").animate({scrollTop: 0}, 0);
    }, 1);

    setTimeout(function () {
      page.addClass("active");
      setTimeout(function () {
        clearInterval(totop);
      }, 1000);
    }, 100);
  });

  function cleanSource(html) {
    var lines = html.split(/\n/);

    lines.shift();
    lines.splice(-1, 1);

    var indentSize = lines[0].length - lines[0].trim().length,
        re = new RegExp(" {" + indentSize + "}");

    lines = lines.map(function (line) {
      if (line.match(re)) {
        line = line.substring(indentSize);
      }

      return line;
    });

    lines = lines.join("\n");

    return lines;
  }

  $("#opensource").click(function () {
    $.get(window.location.href, function (data) {
      var html = $(data).find(window.page).html();
      html = cleanSource(html);
      $("#source-modal pre").text(html);
      $("#source-modal").modal();
    });
  });
</script>

<!-- Twitter Bootstrap -->
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- Material Design for Bootstrap -->
<script src="dist/js/material.js"></script>
<script src="dist/js/ripples.min.js"></script>
<script>
  $.material.init();
</script>


<!-- Sliders -->
<script src="//cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>
<script>
  $(function () {
    $.material.init();
    $(".shor").noUiSlider({
      start: 40,
      connect: "lower",
      range: {
        min: 0,
        max: 100
      }
    });

    $(".svert").noUiSlider({
      orientation: "vertical",
      start: 40,
      connect: "lower",
      range: {
        min: 0,
        max: 100
      }
    });
  });
</script>

<!-- Dropdown.js -->
<script src="https://cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.js"></script>
<script>
  $("#dropdown-menu select").dropdown();
</script>

</body>
</html>
