{include file="bootstrap/site/header.tpl"}

<!-- Masthead
================================================== -->
<header class="jumbotron subhead" id="overview">
    <h1>Base CSS</h1>
    <p class="lead">On top of the scaffolding, basic HTML elements are styled and enhanced with extensible classes to provide a fresh, consistent look and feel.</p>
    <div class="subnav">
        <ul class="nav nav-pills">
            <li><a href="typography">Typography</a></li>
            <li><a href="code">Code</a></li>
            <li><a href="tables">Tables</a></li>
            <li><a href="forms">Forms</a></li>
            <li><a href="buttons">Buttons</a></li>
            <li><a href="icons">Icons by Glyphicons</a></li>
        </ul>
    </div>
</header>



<!-- Code
================================================== -->
<section id="code">
    <div class="page-header">
        <h1>Code <small>Inline and block code snippets</small></h1>
    </div>
    <div class="row">
        <div class="span4">
            <h2>Inline</h2>
            <p>Wrap inline snippets of code with <code>&lt;code&gt;</code>.</p>
<pre class="prettyprint linenums">
For example, &lt;code&gt;section&lt;/code&gt; should be wrapped as inline.
</pre>
        </div><!--/span-->
        <div class="span4">
            <h2>Basic block</h2>
            <p>Use <code>&lt;pre&gt;</code> for multiple lines of code. Be sure to turn any carets into their unicode characters for proper rendering.</p>
<pre>
&lt;p&gt;Sample text here...&lt;/p&gt;
</pre>
<pre class="prettyprint linenums" style="margin-bottom: 9px;">
&lt;pre&gt;
  &amp;lt;p&amp;gt;Sample text here...&amp;lt;/p&amp;gt;
&lt;/pre&gt;
</pre>
            <p><strong>Note:</strong> Be sure to keep code within <code>&lt;pre&gt;</code> tags as close to the left as possible; it will render all tabs.</p>
        </div><!--/span-->
        <div class="span4">
            <h2>Google Prettify</h2>
            <p>Take the same <code>&lt;pre&gt;</code> element and add two optional classes for enhanced rendering.</p>
<pre class="prettyprint linenums" style="margin-bottom: 9px;">
&lt;p&gt;Sample text here...&lt;/p&gt;
</pre>
<pre class="prettyprint linenums" style="margin-bottom: 9px;">
&lt;pre class="prettyprint
     linenums"&gt;
  &amp;lt;p&amp;gt;Sample text here...&amp;lt;/p&amp;gt;
&lt;/pre&gt;
</pre>
            <p><a href="http://code.google.com/p/google-code-prettify/">Download google-code-prettify</a> and view the readme for <a href="http://google-code-prettify.googlecode.com/svn/trunk/README.html">how to use</a>.</p>
        </div><!--/span-->
    </div><!--/row-->
</section>

{include file="bootstrap/site/footer.tpl"}
