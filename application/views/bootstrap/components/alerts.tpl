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



<!-- Alerts & Messages
================================================== -->
<section id="alerts">
    <div class="page-header">
        <h1>Alerts <small>Styles for success, warning, and error messages</small></h1>
    </div>

    <h2>Lightweight defaults</h2>
    <div class="row">
        <div class="span4">
            <h3>Rewritten base class</h3>
            <p>With Bootstrap 2, we've simplified the base class: <code>.alert</code> instead of <code>.alert-message</code>. We've also reduced the minimum required markup&mdash;no <code>&lt;p&gt;</code> is required by default, just the outter <code>&lt;div&gt;</code>.</p>
            <h3>Single alert message</h3>
            <p>For a more durable component with less code, we've removed the differentiating look for block alerts, messages that come with more padding and typically more text. The class also has changed to <code>.alert-block</code>.</p>
            <hr>
            <h3>Goes great with javascript</h3>
            <p>Bootstrap comes with a great jQuery plugin that supports alert messages, making dismissing them quick and easy.</p>
            <p><a class="btn js-btn" href="./javascript.html#alerts">Get the plugin &raquo;</a></p>
        </div>
        <div class="span8">
            <h3>Example alerts</h3>
            <p>Wrap your message and an optional close icon in a div with simple class.</p>
            <div class="alert">
                <a class="close">&times;</a>
                <strong>Warning!</strong> Best check yo self, you’re not looking too good.
            </div>
<pre class="prettyprint linenums">
&lt;div class="alert"&gt;
  &lt;a class="close"&gt;&times;&lt;/a&gt;
  &lt;strong&gt;Warning!&lt;/strong&gt; Best check yo self, you’re not looking too good.
&lt;/div&gt;
</pre>
            <p>Easily extend the standard alert message with two optional classes: <code>.alert-block</code> for more padding and text controls and <code>.alert-heading</code> for a matching heading.</p>
            <div class="alert alert-block">
                <a class="close">&times;</a>
                <h4 class="alert-heading">Warning!</h4>
                <p>Best check yo self, you’re not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
            </div>
<pre class="prettyprint linenums">
&lt;div class="alert alert-block"&gt;
  &lt;a class="close"&gt;&times;&lt;/a&gt;
  &lt;h4 class="alert-heading"&gt;Warning!&lt;/h4&gt;
  Best check yo self, you’re not...
&lt;/div&gt;
</pre>
        </div>
    </div>

    <h2>Contextual alternatives <small>Add optional classes to change an alert's connotation</small></h2>
    <div class="row">
        <div class="span4">
            <h3>Error or danger</h3>
            <div class="alert alert-error">
                <a class="close">&times;</a>
                <strong>Oh snap!</strong> Change a few things up and try submitting again.
            </div>
<pre class="prettyprint linenums">
&lt;div class="alert alert-error"&gt;
  ...
&lt;/div&gt;
</pre>
        </div>
        <div class="span4">
            <h3>Success</h3>
            <div class="alert alert-success">
                <a class="close">&times;</a>
                <strong>Well done!</strong> You successfully read this important alert message.
            </div>
<pre class="prettyprint linenums">
&lt;div class="alert alert-success"&gt;
  ...
&lt;/div&gt;
</pre>
        </div>
        <div class="span4">
            <h3>Information</h3>
            <div class="alert alert-info">
                <a class="close">&times;</a>
                <strong>Heads up!</strong> This alert needs your attention, but it’s not super important.
            </div>
<pre class="prettyprint linenums">
&lt;div class="alert alert-info"&gt;
  ...
&lt;/div&gt;
</pre>
        </div>
    </div>

</section>

{include file="bootstrap/site/footer.tpl"}