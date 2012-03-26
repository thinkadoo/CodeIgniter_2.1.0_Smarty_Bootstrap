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



<!-- Progress bars
================================================== -->
<section id="progress">
    <div class="page-header">
        <h1>Progress bars <small>For loading, redirecting, or action status</small></h1>
    </div>

    <h2>Examples and markup</h2>
    <div class="row">
        <div class="span4">
            <h3>Basic</h3>
            <p>Default progress bar with a vertical gradient.</p>
            <div class="progress">
                <div class="bar" style="width: 60%;"></div>
            </div>
<pre class="prettyprint linenums">
&lt;div class="progress"&gt;
  &lt;div class="bar"
       style="width: 60%;"&gt;&lt;/div&gt;
&lt;/div&gt;
</pre>
        </div>
        <div class="span4">
            <h3>Striped</h3>
            <p>Uses a gradient to create a striped effect.</p>
            <div class="progress progress-info progress-striped">
                <div class="bar" style="width: 20%;"></div>
            </div>
<pre class="prettyprint linenums">
&lt;div class="progress progress-info
     progress-striped"&gt;
  &lt;div class="bar"
       style="width: 20%;"&gt;&lt;/div&gt;
&lt;/div&gt;
</pre>
        </div>
        <div class="span4">
            <h3>Animated</h3>
            <p>Takes the striped example and animates it.</p>
            <div class="progress progress-danger progress-striped active">
                <div class="bar" style="width: 45%"></div>
            </div>
<pre class="prettyprint linenums">
&lt;div class="progress progress-danger
     progress-striped active"&gt;
  &lt;div class="bar"
       style="width: 40%;"&gt;&lt;/div&gt;
&lt;/div&gt;
</pre>
        </div>
    </div>

    <h2>Options and browser support</h2>
    <div class="row">
        <div class="span4">
            <h3>Additional colors</h3>
            <p>Progress bars utilize some of the same class names as buttons and alerts for similar styling.</p>
            <ul>
                <li><code>.progress-info</code></li>
                <li><code>.progress-success</code></li>
                <li><code>.progress-danger</code></li>
            </ul>
            <p>Alternatively, you can customize the LESS files and roll your own colors and sizes.</p>
        </div>
        <div class="span4">
            <h3>Behavior</h3>
            <p>Progress bars use CSS3 transitions, so if you dynamically adjust the width via javascript, it will smoothly resize.</p>
            <p>If you use the <code>.active</code> class, your <code>.progress-striped</code> progress bars will animate the stripes left to right.</p>
        </div>
        <div class="span4">
            <h3>Browser support</h3>
            <p>Progress bars use CSS3 gradients, transitions, and animations to achieve all their effects. These features are not supported in IE7-8 or older versions of Firefox.</p>
            <p>Opera does not support animations at this time.</p>
        </div>
    </div>

</section>

{include file="bootstrap/site/footer.tpl"}