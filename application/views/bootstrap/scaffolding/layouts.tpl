{include file="bootstrap/site/header.tpl"}

{include file="bootstrap/scaffolding/masthead.tpl"}

<!-- Layouts (Default and fluid)
================================================== -->
<section id="layouts">
    <div class="page-header">
        <h1>Layouts <small>Basic templates to create webpages</small></h1>
    </div>

    <div class="row">
        <div class="span6">
            <h2>Fixed layout</h2>
            <p>The default and simple 940px-wide, centered layout for just about any website or page provided by a single <code>&lt;div class="container"&gt;</code>.</p>
            <div class="minicon-layout">
                <div class="minicon-layout-body"></div>
            </div>
<pre class="prettyprint linenums">
&lt;body&gt;
  &lt;div class="container"&gt;
    ...
  &lt;/div&gt;
&lt;/body&gt;
</pre>
        </div><!-- /col -->
        <div class="span6">
            <h2>Fluid layout</h2>
            <p><code>&lt;div class="container-fluid"&gt;</code> gives flexible page structure, min- and max-widths, and a left-hand sidebar. It's great for apps and docs.</p>
            <div class="minicon-layout fluid">
                <div class="minicon-layout-sidebar"></div>
                <div class="minicon-layout-body"></div>
            </div>
<pre class="prettyprint linenums">
&lt;div class="container-fluid"&gt;
  &lt;div class="row-fluid"&gt;
    &lt;div class="span2"&gt;
      &lt;!--Sidebar content--&gt;
    &lt;/div&gt;
    &lt;div class="span10"&gt;
      &lt;!--Body content--&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
        </div><!-- /col -->
    </div><!-- /row -->
</section>

{include file="bootstrap/site/footer.tpl"}