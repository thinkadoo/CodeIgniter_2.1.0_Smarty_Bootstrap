<?php /* Smarty version Smarty-3.1.8, created on 2012-03-26 23:02:04
         compiled from "application/views/bootstrap/javascript/scrollspy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16723986654f70815b07cc49-00759878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85d5d60617ba7843a36460edd69d9bc8473a6305' => 
    array (
      0 => 'application/views/bootstrap/javascript/scrollspy.tpl',
      1 => 1332795721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16723986654f70815b07cc49-00759878',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f70815b097564_52353716',
  'variables' => 
  array (
    'site_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f70815b097564_52353716')) {function content_4f70815b097564_52353716($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<!-- Masthead
================================================== -->
<header class="jumbotron subhead" id="overview">
    <h1>Javascript for Bootstrap</h1>
    <p class="lead">Bring Bootstrap's components to life&mdash;now with 12 custom <a href="http://jquery.com/" target="_blank">jQuery</a> plugins.
    <div class="subnav">
        <ul class="nav nav-pills">
            <li><a href="modals">Modal</a></li>
            <li><a href="dropdowns">Dropdown</a></li>
            <li><a href="scrollspy">Scrollspy</a></li>
            <li><a href="tabs">Tab</a></li>
            <li><a href="tooltips">Tooltip</a></li>
            <li><a href="popovers">Popover</a></li>
            <li><a href="alerts">Alert</a></li>
            <li><a href="buttons">Button</a></li>
            <li><a href="collapse">Collapse</a></li>
            <li><a href="carousel">Carousel</a></li>
            <li><a href="typeahead">Typeahead</a></li>
        </ul>
    </div>
</header>



<!-- ScrollSpy
================================================== -->
<section id="scrollspy">
    <div class="page-header">
        <h1>ScrollSpy <small>bootstrap-scrollspy.js</small></h1>
    </div>
    <div class="row">
        <div class="span3 columns">
            <p>The ScrollSpy plugin is for automatically updating nav targets based on scroll position.</p>
            <a href="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
assets/js/bootstrap-scrollspy.js" target="_blank" class="btn">Download file</a>
        </div>
        <div class="span9 columns">
            <h2>Example navbar with scrollspy</h2>
            <p>Scroll the area below and watch the navigation update. The dropdown sub items will be highlighted as well. Try it!</p>
            <div id="navbarExample" class="navbar navbar-static">
                <div class="navbar-inner">
                    <div class="container" style="width: auto;">
                        <a class="brand" href="#">Project Name</a>
                        <ul class="nav">
                            <li><a href="#fat">@fat</a></li>
                            <li><a href="#mdo">@mdo</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#one">one</a></li>
                                    <li><a href="#two">two</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#three">three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div data-spy="scroll" data-target="#navbarExample" data-offset="0" class="scrollspy-example">
                <h4 id="fat">@fat</h4>
                <p>
                    Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.
                </p>
                <h4 id="mdo">@mdo</h4>
                <p>
                    Veniam marfa mustache skateboard, adipisicing fugiat velit pitchfork beard. Freegan beard aliqua cupidatat mcsweeney's vero. Cupidatat four loko nisi, ea helvetica nulla carles. Tattooed cosby sweater food truck, mcsweeney's quis non freegan vinyl. Lo-fi wes anderson +1 sartorial. Carles non aesthetic exercitation quis gentrify. Brooklyn adipisicing craft beer vice keytar deserunt.
                </p>
                <h4 id="one">one</h4>
                <p>
                    Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next level locavore single-origin coffee in magna veniam. High life id vinyl, echo park consequat quis aliquip banh mi pitchfork. Vero VHS est adipisicing. Consectetur nisi DIY minim messenger bag. Cred ex in, sustainable delectus consectetur fanny pack iphone.
                </p>
                <h4 id="two">two</h4>
                <p>
                    In incididunt echo park, officia deserunt mcsweeney's proident master cleanse thundercats sapiente veniam. Excepteur VHS elit, proident shoreditch +1 biodiesel laborum craft beer. Single-origin coffee wayfarers irure four loko, cupidatat terry richardson master cleanse. Assumenda you probably haven't heard of them art party fanny pack, tattooed nulla cardigan tempor ad. Proident wolf nesciunt sartorial keffiyeh eu banh mi sustainable. Elit wolf voluptate, lo-fi ea portland before they sold out four loko. Locavore enim nostrud mlkshk brooklyn nesciunt.
                </p>
                <h4 id="three">three</h4>
                <p>
                    Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle rights whatever. Anim keffiyeh carles cardigan. Velit seitan mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean shorts, williamsburg hoodie minim qui you probably haven't heard of them et cardigan trust fund culpa biodiesel wes anderson aesthetic. Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan ullamco consequat.
                </p>
                <p>Keytar twee blog, culpa messenger bag marfa whatever delectus food truck. Sapiente synth id assumenda. Locavore sed helvetica cliche irony, thundercats you probably haven't heard of them consequat hoodie gluten-free lo-fi fap aliquip. Labore elit placeat before they sold out, terry richardson proident brunch nesciunt quis cosby sweater pariatur keffiyeh ut helvetica artisan. Cardigan craft beer seitan readymade velit. VHS chambray laboris tempor veniam. Anim mollit minim commodo ullamco thundercats.
                </p>
            </div>
            <hr>
            <h2>Using bootstrap-scrollspy.js</h2>
            <p>Call the scrollspy via javascript:</p>
            <pre class="prettyprint linenums">$('#navbar').scrollspy()</pre>
            <h3>Markup</h3>
            <p>To easily add scrollspy behavior to your topbar navigation, just add <code>data-spy="scroll"</code> to the element you want to spy on (most typically this would be the body).</p>
            <pre class="prettyprint linenums">&lt;body data-spy="scroll" &gt;...&lt;/body&gt;</pre>
            <div class="alert alert-info">
                <strong>Heads up!</strong>
                Navbar links must have resolvable id targets. For example, a <code>&lt;a href="#home"&gt;home&lt;/a&gt;</code> must correspond to something in the dom like <code>&lt;div id="home"&gt;&lt;/div&gt;</code>.
            </div>
            <h3>Options</h3>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th style="width: 100px;">Name</th>
                    <th style="width: 100px;">type</th>
                    <th style="width: 50px;">default</th>
                    <th>description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>offset</td>
                    <td>number</td>
                    <td>10</td>
                    <td>Pixels to offset from top when calculating position of scroll.</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>