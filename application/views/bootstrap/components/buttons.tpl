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
                    <li><a href="#buttonGroups">Button groups</a></li>
                    <li><a href="#buttonDropdowns">Button dropdowns</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Navigation <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="../navigation/#navs">Nav, tabs, pills</a></li>
                    <li><a href="../navigation/#navbar">Navbar</a></li>
                    <li><a href="../navigation/#breadcrumbs">Breadcrumbs</a></li>
                    <li><a href="../navigation/#pagination">Pagination</a></li>
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


<!-- Button Groups
================================================== -->
<section id="buttonGroups">
    <div class="page-header">
        <h1>Button groups <small>Join buttons for more toolbar-like functionality</small></h1>
    </div>
    <div class="row">
        <div class="span4">
            <h3>Button groups</h3>
            <p>Use button groups to join multiple buttons together as one composite component. Build them with a series of <code>&lt;a&gt;</code> or <code>&lt;button&gt;</code> elements.</p>
            <p>You can also combine sets of <code>&lt;div class="btn-group"&gt;</code> into a <code>&lt;div class="btn-toolbar"&gt;</code> for more complex projects.</p>
            <div class="btn-toolbar" style="margin-top: 18px;">
                <div class="btn-group">
                    <a class="btn" href="#">Left</a>
                    <a class="btn" href="#">Middle</a>
                    <a class="btn" href="#">Right</a>
                </div>
            </div>
            <div class="btn-toolbar">
                <div class="btn-group">
                    <a class="btn" href="#">1</a>
                    <a class="btn" href="#">2</a>
                    <a class="btn" href="#">3</a>
                    <a class="btn" href="#">4</a>
                </div>
                <div class="btn-group">
                    <a class="btn" href="#">5</a>
                    <a class="btn" href="#">6</a>
                    <a class="btn" href="#">7</a>
                </div>
                <div class="btn-group">
                    <a class="btn" href="#">8</a>
                </div>
            </div>
        </div>
        <div class="span4">
            <h3>Example markup</h3>
            <p>Here's how the HTML looks for a standard button group built with anchor tag buttons:</p>
<pre class="prettyprint linenums">
&lt;div class="btn-group"&gt;
  &lt;a class="btn" href="#"&gt;1&lt;/a&gt;
  &lt;a class="btn" href="#"&gt;2&lt;/a&gt;
  &lt;a class="btn" href="#"&gt;3&lt;/a&gt;
&lt;/div&gt;
</pre>
            <p>And with a toolbar for multiple groups:</p>
<pre class="prettyprint linenums">
&lt;div class="btn-toolbar"&gt;
  &lt;div class="btn-group"&gt;
    ...
  &lt;/div&gt;
&lt;/div&gt;
</pre>
        </div>
        <div class="span4">
            <h3>Checkbox and radio flavors</h3>
            <p>Button groups can also function as radios, where only one button may be active, or checkboxes, where any number of buttons may be active. View <a href="./javascript.html#buttons">the Javascript docs</a> for that.</p>
            <p><a class="btn js-btn" href="./javascript.html#buttons">Get the javascript &raquo;</a></p>
            <hr>
            <h4 class="muted">Heads up</h4>
            <p class="muted">CSS for button groups is in a separate file, button-groups.less.</p>
        </div>
    </div>
</section>



<!-- Split button dropdowns
================================================== -->
<section id="buttonDropdowns">
    <div class="page-header">
        <h1>Buttons dropdowns <small>Contextual dropdown menus built on button groups</small></h1>
    </div>

    <div class="row">
        <div class="span4">
            <h3>Button dropdowns</h3>
            <p>Use any button to trigger a dropdown menu by placing it within a <code>.btn-group</code> and providing the proper menu markup.</p>
            <div class="btn-toolbar" style="margin-top: 18px;">
                <div class="btn-group">
                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">Action <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div><!-- /btn-group -->
                <div class="btn-group">
                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">Action <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div><!-- /btn-group -->
                <div class="btn-group">
                    <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#">Danger <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div><!-- /btn-group -->
            </div>
            <div class="btn-toolbar">
                <div class="btn-group">
                    <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#">Success <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div><!-- /btn-group -->
                <div class="btn-group">
                    <a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#">Info <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div><!-- /btn-group -->
            </div>
        </div>
        <div class="span8">
            <h3>Example markup</h3>
            <p>Similar to a button group, our markup uses regular button markup, but with a handful of additions to refine the style and support Bootstrap's dropdown jQuery plugin.</p>
<pre class="prettyprint linenums">
&lt;div class="btn-group"&gt;
  &lt;a class="btn dropdown-toggle" data-toggle="dropdown" href="#"&gt;
    Action
    &lt;span class="caret"&gt;&lt;/span&gt;
  &lt;/a&gt;
  &lt;ul class="dropdown-menu"&gt;
    &lt;!-- dropdown menu links --&gt;
  &lt;/ul&gt;
&lt;/div&gt;
</pre>
        </div>
    </div>

    <div class="row">
        <div class="span4">
            <h3>Split button dropdowns</h3>
            <p>Building on the button group styles and markup, we can easily create a split button. Split buttons feature a standard action on the left and a dropdown toggle on the right with contextual links.</p>
            <div class="btn-toolbar" style="margin-top: 18px;">
                <div class="btn-group">
                    <a class="btn" href="#">Action</a>
                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div><!-- /btn-group -->
                <div class="btn-group">
                    <a class="btn btn-primary" href="#">Action</a>
                    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div><!-- /btn-group -->
                <div class="btn-group">
                    <a class="btn btn-danger" href="#">Danger</a>
                    <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div><!-- /btn-group -->
            </div>
            <div class="btn-toolbar">
                <div class="btn-group">
                    <a class="btn btn-success" href="#">Success</a>
                    <a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div><!-- /btn-group -->
                <div class="btn-group">
                    <a class="btn btn-info" href="#">Info</a>
                    <a class="btn btn-info dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div><!-- /btn-group -->
            </div>
        </div>
        <div class="span8">
            <h3>Example markup</h3>
            <p>We expand on the normal button dropdowns to provide a second button action that operates as a separate dropdown trigger.</p>
<pre class="prettyprint linenums">
&lt;div class="btn-group"&gt;
  &lt;a class="btn" href="#"&gt;Action&lt;/a&gt;
  &lt;a class="btn dropdown-toggle" data-toggle="dropdown" href="#"&gt;
    &lt;span class="caret"&gt;&lt;/span&gt;
  &lt;/a&gt;
  &lt;ul class="dropdown-menu"&gt;
    &lt;!-- dropdown menu links --&gt;
  &lt;/ul&gt;
&lt;/div&gt;
</pre>
        </div>
    </div>
</section>

{include file="bootstrap/site/footer.tpl"}