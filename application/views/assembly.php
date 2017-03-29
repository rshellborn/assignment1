<div class="row" style="text-align:center;font-size:150%;color:#FF0000" 
    
    <span id="error">{error}</span>
</div>
<form action="assembly/handle" method="POST">
<div class="row">
    <h1 class="text-center">Top Pieces</h1>
    <table class="table table-bordered">
        {topParts}
        <tr class="text-center">
            <td>
                <a href="parts/{id}"><img src="/img/{partCode}.jpeg" /></a><br/>
                <span><strong>Line:</strong> {line}</span><br/>
                <span><strong>Model:</strong> {model}</span><br/>
                <input type="checkbox" value="{id}" id="checkbox" name="top" />
            </td>
        </tr>
        {/topParts}
    </table>



    <h1 class="text-center">Torso Pieces</h1>
    <table class="table table-bordered">
        {torsoParts}
        <tr class="text-center">
            <td>
                <a href="parts/{id}"><img src="/img/{partCode}.jpeg" /></a><br/>
                <span><strong>Line:</strong> {line}</span><br/>
                <span><strong>Model:</strong> {model}</span><br/>
                <input type="checkbox" value="{id}" id="checkbox" name="torso" />
            </td>
        </tr>
        {/torsoParts}
    </table>



    <h1 class="text-center">Bottom Pieces</h1>
    <table class="table table-bordered">
        {bottomParts}
        <tr class="text-center">
            <td>
                <a href="parts/{id}"><img src="/img/{partCode}.jpeg" /></a><br/>
                <span><strong>Line:</strong> {line}</span><br/>
                <span><strong>Model:</strong> {model}</span><br/>
                <input type="checkbox" value="{id}" id="checkbox" name="bottom" />
            </td>
        </tr>
        {/bottomParts}
    </table>

    <div class="text-center">
        <input class="btn btn-primary" type="submit" value="Assemble" name="submitType" />
        <input class="btn btn-danger" type="submit" value="Return" name="submitType" />
    </div>
</div>

<div class="row">
    <div class="col-xs-12">
        <h1 class="text-center" id="robots">Assembled Robots</h1>
    {robots}
    <div class="col-xs-6 space">
        <img src="/img/{image1}.jpeg"/>
        <img src="/img/{image2}.jpeg"/>
        <img src="/img/{image3}.jpeg"/>
        <h1>${amount}</h1>
    <input type="checkbox" value="{id}" id="checkbox" name="robot" />
    </div>
    {/robots}
        <div class="row">
            <div class="col-sm-12 text-center">
                <input class="btn btn-danger" type="submit" value="Ship to Head Office" name="submitType" />
            </div>
        </div>
    </div>
</div>
</form>