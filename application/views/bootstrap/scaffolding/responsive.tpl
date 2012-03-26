{include file="bootstrap/site/header.tpl"}

{include file="bootstrap/scaffolding/masthead.tpl"}

<!-- Responsive design
================================================== -->
<section id="responsive">
    <div class="page-header">
        <h1>Responsive design <small>Media queries for various devices and resolutions</small></h1>
    </div>
    <!-- Supported devices -->
    <div class="row">
        <div class="span4">
            <img src="{$site_url}assets/img/responsive-illustrations.png" alt="Responsive devices">
        </div>
        <div class="span8">
            <h2>Supported devices</h2>
            <p>Bootstrap supports a handful of media queries to help make your projects more appropriate on different devices and screen resolutions. Here's what's included:</p>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Label</th>
                    <th>Layout width</th>
                    <th>Column width</th>
                    <th>Gutter width</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Smartphones</td>
                    <td>480px and below</td>
                    <td class="muted" colspan="2">Fluid columns, no fixed widths</td>
                </tr>
                <tr>
                    <td>Portrait tablets</td>
                    <td>480px to 768px</td>
                    <td class="muted" colspan="2">Fluid columns, no fixed widths</td>
                </tr>
                <tr>
                    <td>Landscape tablets</td>
                    <td>768px to 940px</td>
                    <td>44px</td>
                    <td>20px</td>
                </tr>
                <tr>
                    <td>Default</td>
                    <td>940px and up</td>
                    <td>60px</td>
                    <td>20px</td>
                </tr>
                <tr>
                    <td>Large display</td>
                    <td>1210px and up</td>
                    <td>70px</td>
                    <td>30px</td>
                </tr>
                </tbody>
            </table>

            <h3>What they do</h3>
            <p>Media queries allow for custom CSS based on a number of conditions&mdash;ratios, widths, display type, etc&mdash;but usually focuses around <code>min-width</code> and <code>max-width</code>.</p>
            <ul>
                <li>Modify the width of column in our grid</li>
                <li>Stack elements instead of float wherever necessary</li>
                <li>Resize headings and text to be more appropriate for devices</li>
            </ul>
        </div>
    </div>

    <br>

    <!-- Media query code -->
    <h2>Using the media queries</h2>
    <div class="row">
        <div class="span5">
            <p>Bootstrap doesn't automatically include these media queries, but understanding and adding them is very easy and requires minimal setup. You have a few options for including the responsive features of Bootstrap:</p>
            <ol>
                <li>Use the compiled responsive version, bootstrap-responsive.css</li>
                <li>Add @import "responsive.less" and recompile Bootstrap</li>
                <li>Modify and recompile responsive.less as a separate</li>
            </ol>
            <p><strong>Why not just include it?</strong> Truth be told, not everything needs to be responsive. Instead of encouraging developers to remove this feature, we figure it best to enable it.</p>
        </div>
        <div class="span7">
<pre class="prettyprint linenums">
  // Landscape phones and down
  @media (max-width: 480px) { ... }

  // Landscape phone to portrait tablet
  @media (max-width: 768px) { ... }

  // Portrait tablet to landscape and desktop
  @media (min-width: 768px) and (max-width: 940px) { ... }

  // Large desktop
  @media (min-width: 1200px) { .. }
</pre>
        </div>
    </div>
</section>

{include file="bootstrap/site/footer.tpl"}