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


<!-- Labels
================================================== -->
<section id="labels">
    <div class="page-header">
        <h1>Inline labels <small>Label and annotate text</small></h1>
    </div>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Labels</th>
            <th>Markup</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <span class="label">Default</span>
            </td>
            <td>
                <code>&lt;span class="label"&gt;Default&lt;/span&gt;</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class="label label-success">New</span>
            </td>
            <td>
                <code>&lt;span class="label label-success"&gt;New&lt;/span&gt;</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class="label label-warning">Warning</span>
            </td>
            <td>
                <code>&lt;span class="label label-warning"&gt;Warning&lt;/span&gt;</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class="label label-important">Important</span>
            </td>
            <td>
                <code>&lt;span class="label label-important"&gt;Important&lt;/span&gt;</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class="label label-info">Info</span>
            </td>
            <td>
                <code>&lt;span class="label label-info"&gt;Info&lt;/span&gt;</code>
            </td>
        </tr>
        </tbody>
    </table>
</section>

{include file="bootstrap/site/footer.tpl"}