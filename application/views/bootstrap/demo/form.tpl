{include file="bootstrap/site/header.tpl"}
{include file="bootstrap/demo/masthead.tpl"}

<section id="form">

<h2>Horizontal forms</h2>
<div class="row">
    <div class="span8">
        <form class="form-horizontal">
            <fieldset>
                <legend>Controls Bootstrap supports</legend>
                <div class="control-group">
                    <label class="control-label" for="input01">Text input</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" id="input01">
                        <p class="help-block">In addition to freeform text, any HTML5 text-based input appears like so.</p>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="optionsCheckbox">Checkbox</label>
                    <div class="controls">
                        <label class="checkbox">
                            <input type="checkbox" id="optionsCheckbox" value="option1">
                            Option one is this and that&mdash;be sure to include why it’s great
                        </label>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="select01">Select list</label>
                    <div class="controls">
                        <select id="select01">
                            <option>something</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="multiSelect">Multicon-select</label>
                    <div class="controls">
                        <select multiple="multiple" id="multiSelect">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="fileInput">File input</label>
                    <div class="controls">
                        <input class="input-file" id="fileInput" type="file">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="textarea">Textarea</label>
                    <div class="controls">
                        <textarea class="input-xlarge" id="textarea" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="reset" class="btn">Cancel</button>
                </div>
            </fieldset>
        </form>
    </div>
</div>

</section>

{include file="bootstrap/site/footer.tpl"}