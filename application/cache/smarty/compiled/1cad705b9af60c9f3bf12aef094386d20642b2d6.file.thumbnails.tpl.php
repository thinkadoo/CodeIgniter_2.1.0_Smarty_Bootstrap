<?php /* Smarty version Smarty-3.1.8, created on 2012-03-26 16:15:42
         compiled from "application/views/bootstrap/components/thumbnails.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11460658824f7070cf32f3f2-93449821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cad705b9af60c9f3bf12aef094386d20642b2d6' => 
    array (
      0 => 'application/views/bootstrap/components/thumbnails.tpl',
      1 => 1332769614,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11460658824f7070cf32f3f2-93449821',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f7070cf345081_10920213',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f7070cf345081_10920213')) {function content_4f7070cf345081_10920213($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <!-- Masthead
   ================================================== -->
    <header class="jumbotron subhead" id="overview">
        <h1>Components</h1>
        <p class="lead">Dozens of reusable components are built into Bootstrap to provide navigation, alerts, popovers, and much more.</p>
        <div class="subnav">
            <ul class="nav nav-pills">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Buttons <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="buttons/#buttonGroups">Button groups</a></li>
                        <li><a href="buttons/#buttonDropdowns">Button dropdowns</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Navigation <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="navigation/#navs">Nav, tabs, pills</a></li>
                        <li><a href="navigation/#navbar">Navbar</a></li>
                        <li><a href="navigation/#breadcrumbs">Breadcrumbs</a></li>
                        <li><a href="navigation/#pagination">Pagination</a></li>
                    </ul>
                </li>
                <li><a href="labels">Labels</a></li>
                <li><a href="thumbnails">Thumbnails</a></li>
                <li><a href="alerts">Alerts</a></li>
                <li><a href="progress">Progress bars</a></li>
                <li><a href="misc">Miscellaneous</a></li>
            </ul>
        </div>
    </header>



<!-- Thumbnails
================================================== -->
<section id="thumbnails">
    <div class="page-header">
        <h1>Thumbnails <small>Grids of images, videos, text, and more</small></h1>
    </div>

    <div class="row">
        <div class="span6">
            <h2>Default thumbnails</h2>
            <p>By default, Bootstrap's thumbnails are designed to showcase linked images with minimal required markup.</p>
            <ul class="thumbnails">
                <li class="span3">
                    <a href="#" class="thumbnail">
                        <img src="http://placehold.it/260x180" alt="">
                    </a>
                </li>
                <li class="span3">
                    <a href="#" class="thumbnail">
                        <img src="http://placehold.it/260x180" alt="">
                    </a>
                </li>
                <li class="span3">
                    <a href="#" class="thumbnail">
                        <img src="http://placehold.it/260x180" alt="">
                    </a>
                </li>
                <li class="span3">
                    <a href="#" class="thumbnail">
                        <img src="http://placehold.it/260x180" alt="">
                    </a>
                </li>
            </ul>
        </div>
        <div class="span6">
            <h2>Highly customizable</h2>
            <p>With a bit of extra markup, it's possible to add any kind of HTML content like headings, paragraphs, or buttons into thumbnails.</p>
            <ul class="thumbnails">
                <li class="span3">
                    <div class="thumbnail">
                        <img src="http://placehold.it/260x180" alt="">
                        <div class="caption">
                            <h5>Thumbnail label</h5>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a href="#" class="btn primary">Action</a> <a href="#" class="btn">Action</a></p>
                        </div>
                    </div>
                </li>
                <li class="span3">
                    <div class="thumbnail">
                        <img src="http://placehold.it/260x180" alt="">
                        <div class="caption">
                            <h5>Thumbnail label</h5>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a href="#" class="btn primary">Action</a> <a href="#" class="btn">Action</a></p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="span4">
            <h3>Why use thumbnails</h3>
            <p>Thumbnails (previously <code>.media-grid</code> up until v1.4) are great for grids of photos or videos, image search results, retail products, portfolios, and much more. They can be links or static content.</p>
        </div>
        <div class="span4">
            <h3>Simple, flexible markup</h3>
            <p>Thumbnail markup is simple&mdash;a <code>ul</code> with any number of <code>li</code> elements is all that is required. It's also super flexible, allowing for any type of content with just a bit more markup to wrap your contents.</p>
        </div>
        <div class="span4">
            <h3>Uses grid column sizes</h3>
            <p>Lastly, the thumbnails component uses existing grid system classes&mdash;like <code>.span2</code> or <code>.span3</code>&mdash;for control of thumbnail dimensions.</p>
        </div>
    </div>

    <div class="row">
        <div class="span6">
            <h2>The markup</h2>
            <p>As mentioned previously, the required markup for thumbnails is light and straightforward. Here's a look at the default setup <strong>for linked images</strong>:</p>
<pre class="prettyprint linenums">
&lt;ul class="thumbnails"&gt;
  &lt;li class="span3"&gt;
    &lt;a href="#" class="thumbnail"&gt;
      &lt;img src="http://placehold.it/260x180" alt=""&gt;
    &lt;/a&gt;
  &lt;/li&gt;
  ...
&lt;/ul&gt;
</pre>
            <p>For custom HTML content in thumbnails, the markup changes slightly. To allow block level content anywhere, we swap the <code>&lt;a&gt;</code> for a <code>&lt;div&gt;</code> like so:</p>
<pre class="prettyprint linenums">
&lt;ul class="thumbnails"&gt;
  &lt;li class="span3"&gt;
    &lt;div class="thumbnail"&gt;
      &lt;img src="http://placehold.it/260x180" alt=""&gt;
      &lt;h5&gt;Thumbnail label&lt;/h5&gt;
      &lt;p&gt;Thumbnail caption right here...&lt;/p&gt;
    &lt;/div&gt;
  &lt;/li&gt;
  ...
&lt;/ul&gt;
</pre>
        </div>
        <div class="span6">
            <h2>More examples</h2>
            <p>Explore all your options with the various grid classes available to you. You can also mix and match different sizes.</p>
            <ul class="thumbnails">
                <li class="span4">
                    <a href="#" class="thumbnail">
                        <img src="http://placehold.it/360x268" alt="">
                    </a>
                </li>
                <li class="span2">
                    <a href="#" class="thumbnail">
                        <img src="http://placehold.it/160x120" alt="">
                    </a>
                </li>
                <li class="span2">
                    <a href="#" class="thumbnail">
                        <img src="http://placehold.it/160x120" alt="">
                    </a>
                </li>
                <li class="span2">
                    <a href="#" class="thumbnail">
                        <img src="http://placehold.it/160x120" alt="">
                    </a>
                </li>
                <li class="span2">
                    <a href="#" class="thumbnail">
                        <img src="http://placehold.it/160x120" alt="">
                    </a>
                </li>
                <li class="span2">
                    <a href="#" class="thumbnail">
                        <img src="http://placehold.it/160x120" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </div>

</section>

<?php echo $_smarty_tpl->getSubTemplate ("bootstrap/site/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>