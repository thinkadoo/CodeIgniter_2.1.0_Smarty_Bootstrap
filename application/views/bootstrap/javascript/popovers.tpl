{include file="bootstrap/site/header.tpl"}

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



<!-- Popovers
================================================== -->
<section id="popovers">
    <div class="page-header">
        <h1>Popovers <small>bootstrap-popover.js</small></h1>
    </div>
    <div class="row">
        <div class="span3 columns">
            <h3>About popovers</h3>
            <p>Add small overlays of content, like those on the iPad, to any element for housing secondary information.</p>
            <p class="muted"><strong>*</strong> Requires <a href="#tooltip">Tooltip</a> to be included</p>
            <a href="{$site_url}assets/js/bootstrap-popover.js" target="_blank" class="btn">Download file</a>
        </div>
        <div class="span9 columns">
            <h2>Example hover popover</h2>
            <p>Hover over the button to trigger the popover.</p>
            <div class="well">
                <a href="#" class="btn btn-danger" rel="popover" title="A Title" data-content="And here's some amazing content. It's very engaging. right?">hover for popover</a>
            </div>
            <hr>
            <h2>Using bootstrap-popover.js</h2>
            <p>Enable popovers via javascript:</p>
            <pre class="prettyprint linenums">$('#example').popover(options)</pre>
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
                    <td>animation</td>
                    <td>boolean</td>
                    <td>true</td>
                    <td>apply a css fade transition to the tooltip</td>
                </tr>
                <tr>
                    <td>placement</td>
                    <td>string</td>
                    <td>'right'</td>
                    <td>how to position the popover - top | bottom | left | right</td>
                </tr>
                <tr>
                    <td>selector</td>
                    <td>string</td>
                    <td>false</td>
                    <td>if a selector is provided, tooltip objects will be delegated to the specified targets</td>
                </tr>
                <tr>
                    <td>trigger</td>
                    <td>string</td>
                    <td>'hover'</td>
                    <td>how tooltip is triggered - hover | focus | manual</td>
                </tr>
                <tr>
                    <td>title</td>
                    <td>string | function</td>
                    <td>''</td>
                    <td>default title value if `title` attribute isn't present</td>
                </tr>
                <tr>
                    <td>content</td>
                    <td>string | function</td>
                    <td>''</td>
                    <td>default content value if `data-content` attribute isn't present</td>
                </tr>
                <tr>
                    <td>delay</td>
                    <td>number | object</td>
                    <td>0</td>
                    <td>
                        <p>delay showing and hiding the popover (ms)</p>
                        <p>If a number is supplied, delay is applied to both hide/show</p>
                        <p>Object structure is: <code>delay: { show: 500, hide: 100 }</code></p>
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="alert alert-info">
                <strong>Heads up!</strong>
                Options for individual popovers can alternatively be specified through the use of data attributes.
            </div>
            <h3>Markup</h3>
            <p>
                For performance reasons, the Tooltip and Popover data-apis are opt in. If you would like to use them just specify a the selector option.
            </p>
            <h3>Methods</h3>
            <h4>$().popover(options)</h4>
            <p>Initializes popovers for an element collection.</p>
            <h4>.popover('show')</h4>
            <p>Reveals an elements popover.</p>
            <pre class="prettyprint linenums">$('#element').popover('show')</pre>
            <h4>.popover('hide')</h4>
            <p>Hides an elements popover.</p>
            <pre class="prettyprint linenums">$('#element').popover('hide')</pre>
            <h4>.popover('toggle')</h4>
            <p>Toggles an elements popover.</p>
            <pre class="prettyprint linenums">$('#element').popover('toggle')</pre>
        </div>
    </div>
</section>

{include file="bootstrap/site/footer.tpl"}