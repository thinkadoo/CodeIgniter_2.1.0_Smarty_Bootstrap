{include file="bootstrap/site/header.tpl"}

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
                    <li><a href="../buttons/#buttonGroups">Button groups</a></li>
                    <li><a href="../buttons/#buttonDropdowns">Button dropdowns</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Navigation <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#navs">Nav, tabs, pills</a></li>
                    <li><a href="#navbar">Navbar</a></li>
                    <li><a href="#breadcrumbs">Breadcrumbs</a></li>
                    <li><a href="#pagination">Pagination</a></li>
                </ul>
            </li>
            <li><a href="../labels">Labels</a></li>
            <li><a href="../thumbnails">Thumbnails</a></li>
            <li><a href="../alerts">Alerts</a></li>
            <li><a href="../progress">Progress bars</a></li>
            <li><a href="../misc">Miscellaneous</a></li>
        </ul>
    </div>
</header>



<!-- Nav, Tabs, & Pills
================================================== -->
<section id="navs">
<div class="page-header">
    <h1>Nav, tabs, and pills <small>Highly customizable list-style navigation</small></h1>
</div>

<h2>Lightweight defaults <small>Same markup, different classes</small></h2>
<div class="row">
    <div class="span4">
        <h3>Powerful base class</h3>
        <p>All nav components here&mdash;tabs, pills, and lists&mdash;<strong>share the same base markup and styles</strong> through the <code>.nav</code> class.</p>
        <h3>Why tabs and pills</h3>
        <p>Tabs and pills in Bootstrap are built on a <code>&lt;ul&gt;</code> with the same core HTML, a list of links. Swap between tabs or pills with only a class.</p>
        <p>Both options are great for sub-sections of content or navigating between pages of related content.</p>
    </div>
    <div class="span4">
        <h3>Basic tabs</h3>
        <p>Take a regular <code>&lt;ul&gt;</code> of links and add <code>.nav-tabs</code>:</p>
        <ul class="nav nav-tabs">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Messages</a></li>
        </ul>
<pre class="prettyprint linenums">
&lt;ul class="nav nav-tabs"&gt;
  &lt;li class="active"&gt;
    &lt;a href="#"&gt;Home&lt;/a&gt;
  &lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</pre>
    </div>
    <div class="span4">
        <h3>Basic pills</h3>
        <p>Take that same HTML, but use <code>.nav-pills</code> instead:</p>
        <ul class="nav nav-pills">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Messages</a></li>
        </ul>
<pre class="prettyprint linenums">
&lt;ul class="nav nav-pills"&gt;
  &lt;li class="active"&gt;
    &lt;a href="#"&gt;Home&lt;/a&gt;
  &lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;...&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</pre>
    </div>
</div>

<h2>Stackable <small>Make tabs or pills vertical</small></h2>
<div class="row">
    <div class="span4">
        <h3>How to stack 'em</h3>
        <p>As tabs and pills are horizontal by default, just add a second class, <code>.nav-stacked</code>, to make them appear vertically stacked.</p>
    </div>
    <div class="span4">
        <h3>Stacked tabs</h3>
        <ul class="nav nav-tabs nav-stacked">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Messages</a></li>
        </ul>
<pre class="prettyprint linenums">
&lt;ul class="nav nav-tabs nav-stacked"&gt;
  ...
&lt;/ul&gt;
</pre>
    </div>
    <div class="span4">
        <h3>Stacked pills</h3>
        <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Messages</a></li>
        </ul>
<pre class="prettyprint linenums">
&lt;ul class="nav nav-pills nav-stacked"&gt;
  ...
&lt;/ul&gt;
</pre>
    </div>
</div>

<h2>Dropdowns <small>For advanced nav components</small></h2>
<div class="row">
    <div class="span4">
        <h3>Rich menus made easy</h3>
        <p>Dropdown menus in Bootstrap tabs and pills are super easy and require only a little extra HTML and a lightweight jQuery plugin.</p>
        <p>Head over to the Javascript page to read the docs on <a href="./javascript.html#tabs">initializing dropdowns</a> in Bootstrap.</p>
    </div>
    <div class="span4">
        <h3>Tabs with dropdowns</h3>
        <ul class="nav nav-tabs">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Profile</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </li>
        </ul>
<pre class="prettyprint linenums">
&lt;ul class="nav nav-tabs"&gt;
  &lt;li class="dropdown"&gt;
    &lt;a class="dropdown-toggle"
       data-toggle="dropdown"
       href="#"&gt;
        Dropdown
        &lt;b class="caret"&gt;&lt;/b&gt;
      &lt;/a&gt;
    &lt;ul class="dropdown-menu"&gt;
      &lt;!-- links --&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
&lt;/ul&gt;
</pre>
    </div>
    <div class="span4">
        <h3>Pills with dropdowns</h3>
        <ul class="nav nav-pills">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Profile</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </li>
        </ul>
<pre class="prettyprint linenums">
&lt;ul class="nav nav-pills"&gt;
  &lt;li class="dropdown"&gt;
    &lt;a class="dropdown-toggle"
       data-toggle="dropdown"
       href="#"&gt;
        Dropdown
        &lt;b class="caret"&gt;&lt;/b&gt;
      &lt;/a&gt;
    &lt;ul class="dropdown-menu"&gt;
      &lt;!-- links --&gt;
    &lt;/ul&gt;
  &lt;/li&gt;
&lt;/ul&gt;
</pre>
    </div>
</div>

<h2>Nav lists <small>Build simple stacked navs, great for sidebars</small></h2>
<div class="row">
    <div class="span4">
        <h3>Application-style navigation</h3>
        <p>Nav lists provide a simple and easy way to build groups of nav links with optional headers. They're best used in sidebars like the Finder in OS X.</p>
        <p>Structurally, they're built on the same core nav styles as tabs and pills, so usage and customization are straightforward.</p>
        <h4>With icons</h4>
        <p>Nav lists are also easy to equip with icons. Add the proper <code>&lt;i&gt;</code> tag with class and you're set.</p>
    </div>
    <div class="span4">
        <h3>Example nav list</h3>
        <p>Take a list of links and add <code>class="nav nav-list"</code>:</p>
        <div class="well" style="padding: 8px 0;">
            <ul class="nav nav-list">
                <li class="nav-header">List header</li>
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Library</a></li>
                <li><a href="#">Applications</a></li>
                <li class="nav-header">Another list header</li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Help</a></li>
            </ul>
        </div> <!-- /well -->
<pre class="prettyprint linenums">
&lt;ul class="nav nav-list"&gt;
  &lt;li class="nav-header"&gt;
    List header
  &lt;/li&gt;
  &lt;li class="active"&gt;
    &lt;a href="#"&gt;Home&lt;/a&gt;
  &lt;/li&gt;
  &lt;li&gt;
    &lt;a href="#"&gt;Library&lt;/a&gt;
  &lt;/li&gt;
  ...
&lt;/ul&gt;
</pre>
    </div>
    <div class="span4">
        <h3>Example with icons</h3>
        <p>Same example, but with <code>&lt;i&gt;</code> tags for icons.</p>
        <div class="well" style="padding: 8px 0;">
            <ul class="nav nav-list">
                <li class="nav-header">List header</li>
                <li class="active"><a href="#"><i class="icon-white icon-home"></i> Home</a></li>
                <li><a href="#"><i class="icon-book"></i> Library</a></li>
                <li><a href="#"><i class="icon-pencil"></i> Applications</a></li>
                <li class="nav-header">Another list header</li>
                <li><a href="#"><i class="icon-user"></i> Profile</a></li>
                <li><a href="#"><i class="icon-cog"></i> Settings</a></li>
                <li><a href="#"><i class="icon-flag"></i> Help</a></li>
            </ul>
        </div> <!-- /well -->
<pre class="prettyprint linenums">
&lt;ul class="nav nav-list"&gt;
  ...
  &lt;li&gt;
    &lt;a href="#"&gt;
      &lt;i class="icon-book"&gt;&lt;/i&gt;
      Library
    &lt;/a&gt;
  &lt;/li&gt;
  ...
&lt;/ul&gt;
</pre>
    </div>
</div>


<h2>Tabbable nav <small>Bring tabs to life via javascript</small></h2>
<div class="row">
    <div class="span4">
        <h3>What's included</h3>
        <p>Bring your tabs to life with a simple plugin to toggle between content via tabs. Bootstrap integrates tabbable tabs in four styles: top (default), right, bottom, and left.</p>
        <p>Changing between them is easy and only requires changing very little markup.</p>
    </div>
    <div class="span4">
        <h3>Tabbable example</h3>
        <p>To make tabs tabbable, wrap the <code>.nav-tabs</code> in another div with class <code>.tabbable</code>.</p>
        <div class="tabbable" style="margin-bottom: 9px;">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#1" data-toggle="tab">Section 1</a></li>
                <li><a href="#2" data-toggle="tab">Section 2</a></li>
                <li><a href="#3" data-toggle="tab">Section 3</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="1">
                    <p>I'm in Section 1.</p>
                </div>
                <div class="tab-pane" id="2">
                    <p>Howdy, I'm in Section 2.</p>
                </div>
                <div class="tab-pane" id="3">
                    <p>What up girl, this is Section 3.</p>
                </div>
            </div>
        </div> <!-- /tabbable -->
    </div>
    <div class="span4">
        <h3>Custom jQuery plugin</h3>
        <p>All tabbable tabs are powered by our lightweight jQuery plugin. Read more about how to bring tabbable tabs to life on the javascript docs page.</p>
        <p><a class="btn" href="./javascript.html/#tabs">Get the javascript &rarr;</a></p>
    </div>
</div>

<h3>Straightforward markup</h3>
<p>Using tabbable tabs requires a wrapping div, a set of tabs, and a set of tabbable panes of content.</p>
<pre class="prettyprint linenums">
&lt;div class="tabbable"&gt;
  &lt;ul class="nav nav-tabs"&gt;
    &lt;li class="active"&gt;&lt;a href="#1" data-toggle="tab"&gt;Section 1&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#2" data-toggle="tab"&gt;Section 2&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
  &lt;div class="tab-content"&gt;
    &lt;div class="tab-pane active" id="1"&gt;
      &lt;p&gt;I'm in Section 1.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="tab-pane" id="2"&gt;
      &lt;p&gt;Howdy, I'm in Section 2.&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>

<h3>Tabbable in any direction</h3>
<div class="row">
    <div class="span4">
        <h4>Tabs on the bottom</h4>
        <p>Flip the order of the HTML and add a class to put tabs on the bottom.</p>
        <div class="tabbable tabs-below">
            <div class="tab-content">
                <div class="tab-pane active" id="A">
                    <p>I'm in Section A.</p>
                </div>
                <div class="tab-pane" id="B">
                    <p>Howdy, I'm in Section B.</p>
                </div>
                <div class="tab-pane" id="C">
                    <p>What up girl, this is Section C.</p>
                </div>
            </div>
            <ul class="nav nav-tabs">
                <li class="active"><a href="#A" data-toggle="tab">Section 1</a></li>
                <li><a href="#B" data-toggle="tab">Section 2</a></li>
                <li><a href="#C" data-toggle="tab">Section 3</a></li>
            </ul>
        </div> <!-- /tabbable -->
<pre class="prettyprint linenums" style="margin-top: 11px;">
&lt;div class="tabbable tabs-below"&gt;
  &lt;div class="tab-content"&gt;
    ...
  &lt;/div&gt;
  &lt;ul class="nav nav-tabs"&gt;
    ...
  &lt;/ul&gt;
&lt;/div&gt;
</pre>
    </div>
    <div class="span4">
        <h4>Tabs on the left</h4>
        <p>Swap the class to put tabs on the left.</p>
        <div class="tabbable tabs-left">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#lA" data-toggle="tab">Section 1</a></li>
                <li><a href="#lB" data-toggle="tab">Section 2</a></li>
                <li><a href="#lC" data-toggle="tab">Section 3</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="lA">
                    <p>I'm in Section A.</p>
                </div>
                <div class="tab-pane" id="lB">
                    <p>Howdy, I'm in Section B.</p>
                </div>
                <div class="tab-pane" id="lC">
                    <p>What up girl, this is Section C.</p>
                </div>
            </div>
        </div> <!-- /tabbable -->
<pre class="prettyprint linenums">
&lt;div class="tabbable tabs-left"&gt;
  &lt;ul class="nav nav-tabs"&gt;
    ...
  &lt;/ul&gt;
  &lt;div class="tab-content"&gt;
    ...
  &lt;/div&gt;
&lt;/div&gt;
</pre>
    </div>
    <div class="span4">
        <h4>Tabs on the right</h4>
        <p>Swap the class to put tabs on the right.</p>
        <div class="tabbable tabs-right">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#rA" data-toggle="tab">Section 1</a></li>
                <li><a href="#rB" data-toggle="tab">Section 2</a></li>
                <li><a href="#rC" data-toggle="tab">Section 3</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="rA">
                    <p>I'm in Section A.</p>
                </div>
                <div class="tab-pane" id="rB">
                    <p>Howdy, I'm in Section B.</p>
                </div>
                <div class="tab-pane" id="rC">
                    <p>What up girl, this is Section C.</p>
                </div>
            </div>
        </div> <!-- /tabbable -->
<pre class="prettyprint linenums">
&lt;div class="tabbable tabs-right"&gt;
  &lt;ul class="nav nav-tabs"&gt;
    ...
  &lt;/ul&gt;
  &lt;div class="tab-content"&gt;
    ...
  &lt;/div&gt;
&lt;/div&gt;
</pre>
    </div>
</div>

</section>



<!-- Navbar
================================================== -->
<section id="navbar">
    <div class="page-header">
        <h1>Navbar</h1>
    </div>
    <h2>Static navbar example</h2>
    <p>An example of a static (not fixed to the top) navbar with project name, navigation, and search form.</p>
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container" style="width: auto;">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="#">Project name</a>
                <div class="nav-collapse">
                    <ul class="nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-search pull-left" action="">
                        <input type="text" class="search-query span2" placeholder="Search">
                    </form>
                    <ul class="nav pull-right">
                        <li><a href="#">Link</a></li>
                        <li class="divider-vertical"></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.nav-collapse -->
            </div>
        </div><!-- /navbar-inner -->
    </div><!-- /navbar -->

    <div class="row">
        <div class="span8">
            <h3>Navbar scaffolding</h3>
            <p>The navbar requires only a few divs to structure it well for static or fixed display.</p>
<pre class="prettyprint linenums">
&lt;div class="navbar"&gt;
  &lt;div class="navbar-inner"&gt;
    &lt;div class="container"&gt;
      ...
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
            <p>To make the navbar fixed to the top of the viewport, add <code>.navbar-fixed-top</code> to the outermost div, <code>.navbar</code>. In your CSS, you will also need to account for the overlap it causes by adding <code>padding-top: 40px;</code> to your <code>&lt;body&gt;</code>.</p>
<pre class="prettyprint linenums">
&lt;div class="navbar navbar-fixed-top"&gt;
  ...
&lt;/div&gt;
</pre>
            <h3>Brand name</h3>
            <p>A simple link to show your brand or project name only requires an anchor tag.</p>
<pre class="prettyprint linenums">
&lt;a class="brand" href="#"&gt;
  Project name
&lt;/a&gt;
</pre>
            <h3>Search form</h3>
            <p>Search forms receive custom styles in the navbar with the <code>.navbar-search</code> class. Include <code>.pull-left</code> or <code>.pull-right</code> on the <code>form</code> to align it.</p>
<pre class="prettyprint linenums">
&lt;form class="navbar-search pull-left"&gt;
  &lt;input type="text" class="search-query" placeholder="Search"&gt;
&lt;/form&gt;
</pre>
            <h3>Optional responsive variation</h3>
            <p>Depending on the amount of content in your topbar, you might want to implement the responsive options. To do so, wrap your nav content in a containing div, <code>.nav-collapse.collapse</code>, and add the navbar toggle button, <code>.btn-navbar</code>.</p>
<pre class="prettyprint linenums">
&lt;div class="navbar"&gt;
  &lt;div class="navbar-inner"&gt;
    &lt;div class="container"&gt;

      &lt;!-- .btn-navbar is used as the toggle for collapsed navbar content --&gt;
      &lt;a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"&gt;
        &lt;span class="icon-bar"&gt;&lt;/span&gt;
        &lt;span class="icon-bar"&gt;&lt;/span&gt;
        &lt;span class="icon-bar"&gt;&lt;/span&gt;
      &lt;/a&gt;

      &lt;!-- Be sure to leave the brand out there if you want it shown --&gt;
      &lt;a class="brand" href="#"&gt;Project name&lt;/a&gt;

      &lt;!-- Everything you want hidden at 940px or less, place within here --&gt;
      &lt;div class="nav-collapse"&gt;
        &lt;!-- .nav, .navbar-search, .navbar-form, etc --&gt;
      &lt;/div&gt;

    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
            <div class="alert alert-info">
                <strong>Heads up!</strong> The responsive navbar requires the <a href="./javascript.html#collapse">collapse plugin</a>.
            </div>

        </div><!-- /.span -->
        <div class="span4">
            <h3>Nav links</h3>
            <p>Nav items are simple to add via unordered lists.</p>
<pre class="prettyprint linenums">
&lt;ul class="nav"&gt;
  &lt;li class="active"&gt;
    &lt;a href="#">Home&lt;/a&gt;
  &lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Link&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Link&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</pre>
            <h3>Adding dropdowns</h3>
            <p>Adding dropdowns to the nav is super simple, but does require the use of <a href="./javascript.html/#dropdown">our javascript plugin</a>.</p>
<pre class="prettyprint linenums">
&lt;ul class="nav"&gt;
  &lt;li class="dropdown"&gt;
    &lt;a href="#"
          class="dropdown-toggle"
          data-toggle="dropdown">
          Account
          &lt;b class="caret"&gt;&lt;/b&gt;
    &lt;/a&gt;
    &lt;ul class="dropdown-menu"&gt;
      ...
    &lt;/ul&gt;
  &lt;/li&gt;
&lt;/ul&gt;
</pre>
            <p><a class="btn" href="./javascript.html/#dropdown">Get the javascript &rarr;</a></p>
        </div><!-- /.span -->
    </div><!-- /.row -->

</section>



<!-- Breadcrumbs
================================================== -->
<section id="breadcrumbs">
    <div class="page-header">
        <h1>Breadcrumbs <small></small></h1>
    </div>

    <div class="row">
        <div class="span6">
            <h3>Why use them</h3>
            <p>Breadcrumb navigation is used as a way to show users where they are within an app or a site, but not for primary navigation. Keep their use sparse and succinct to be most effective.</p>

            <h3>Examples</h3>
            <p>A single example shown as it might be displayed across multiple pages.</p>
            <ul class="breadcrumb">
                <li class="active">Home</li>
            </ul>
            <ul class="breadcrumb">
                <li><a href="#">Home</a> <span class="divider">/</span></li>
                <li class="active">Library</li>
            </ul>
            <ul class="breadcrumb">
                <li><a href="#">Home</a> <span class="divider">/</span></li>
                <li><a href="#">Library</a> <span class="divider">/</span></li>
                <li class="active">Data</li>
            </ul>
        </div>
        <div class="span6">
            <h3>Markup</h3>
            <p>HTML is your standard unordered list with links.</p>
<pre class="prettyprint linenums">
&lt;ul class="breadcrumb"&gt;
  &lt;li&gt;
    &lt;a href="#"&gt;Home&lt;/a&gt; &lt;span class="divider"&gt;/&lt;/span&gt;
  &lt;/li&gt;
  &lt;li&gt;
    &lt;a href="#"&gt;Library&lt;/a&gt; &lt;span class="divider"&gt;/&lt;/span&gt;
  &lt;/li&gt;
  &lt;li class="active"&gt;
    &lt;a href="#"&gt;Data&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;
</pre>
        </div>
    </div>

</section>



<!-- Pagination
================================================== -->
<section id="pagination">
    <div class="page-header">
        <h1>Pagination <small>Two options for paging through content</small></h1>
    </div>

    <h2>Multicon-page pagination</h2>
    <div class="row">
        <div class="span4">
            <h3>When to use</h3>
            <p>Ultra simplistic and minimally styled pagination inspired by Rdio, great for apps and search results. The large block is hard to miss, easily scalable, and provides large click areas.</p>
            <h3>Stateful page links</h3>
            <p>Links are customizable and work in a number of circumstances with the right class. <code>.disabled</code> for unclickable links and <code>.active</code> for current page.</p>
            <h3>Flexible alignment</h3>
            <p>Add either of two optional classes to change the alignment of pagination links: <code>.pagination-centered</code> and <code>.pagination-right</code>.</p>
        </div>
        <div class="span4">
            <h3>Examples</h3>
            <p>The default pagination component is flexible and works in a number of variations.</p>
            <div class="pagination">
                <ul>
                    <li class="disabled"><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
            <div class="pagination">
                <ul>
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">10</a></li>
                    <li class="active"><a href="#">11</a></li>
                    <li><a href="#">12</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
            <div class="pagination">
                <ul>
                    <li><a href="#">&larr;</a></li>
                    <li class="active"><a href="#">10</a></li>
                    <li class="disabled"><a href="#">...</a></li>
                    <li><a href="#">20</a></li>
                    <li><a href="#">&rarr;</a></li>
                </ul>
            </div>
            <div class="pagination pagination-centered">
                <ul>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                </ul>
            </div>
        </div>
        <div class="span4">
            <h3>Markup</h3>
            <p>Wrapped in a <code>&lt;div&gt;</code>, pagination is just a <code>&lt;ul&gt;</code>.</p>
<pre class="prettyprint linenums">
&lt;div class="pagination"&gt;
  &lt;ul&gt;
    &lt;li&gt;&lt;a href="#"&gt;Prev&lt;/a&gt;&lt;/li>
    &lt;li class="active"&gt;
      &lt;a href="#"&gt;1&lt;/a&gt;
    &lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;4&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;Next&lt;/a&gt;&lt;/li>
  &lt;/ul&gt;
&lt;/div&gt;
</pre>
        </div>
    </div><!-- /row -->

    <h2>Pager <small>For quick previous and next links</small></h2>
    <div class="row">
        <div class="span4">
            <h3>About pager</h3>
            <p>The pager component is a set of links for simple pagination implemenations with light markup and even lighter styles. It's great for simple sites like blogs or magazines.</p>
        </div>
        <div class="span4">
            <h3>Default example</h3>
            <p>By default, the pager centers links.</p>
            <ul class="pager">
                <li><a href="#">Previous</a></li>
                <li><a href="#">Next</a></li>
            </ul>
<pre class="prettyprint linenums">
&lt;ul class="pager"&gt;
  &lt;li&gt;
    &lt;a href="#"&gt;Previous&lt;/a&gt;
  &lt;/li&gt;
  &lt;li&gt;
    &lt;a href="#"&gt;Next&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;
</pre>
        </div>
        <div class="span4">
            <h3>Aligned links</h3>
            <p>Alternatively, you can align each link to the sides:</p>
            <ul class="pager">
                <li class="previous"><a href="#">&larr; Older</a></li>
                <li class="next"><a href="#">Newer &rarr;</a></li>
            </ul>
<pre class="prettyprint linenums">
&lt;ul class="pager"&gt;
  &lt;li class="previous"&gt;
    &lt;a href="#"&gt;&amp;larr; Older&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class="next"&gt;
    &lt;a href="#"&gt;Newer &amp;rarr;&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;
</pre>
        </div>
    </div><!-- /row -->
</section>

{include file="bootstrap/site/footer.tpl"}
