<div class="row">
    <span id="error">{error}</span>
</div>
<div class="row">
    <!-- TODO add images -->
    <div class="row noMargin noBottomMargin">
        <div class="col-xs-12 text-center noBottomMargin">
            <a href="parts/build"><button class="btn btn-primary">Build More Parts</button></a>
            <a href="parts/buy"><button class="btn btn-primary">Buy Parts</button></a>
        </div>
    </div>
    <table class="table table-bordered">
        <div class="row noMargin topPadding">
        {parts}
            <div class="col-xs-4">

                    <a href="parts/{id}"><img class="img-responsive" src="/img/{partCode}.jpeg" /></a><br/>
                    <span><strong>Line:</strong> {line}</span><br/>
                    <span><strong>Model:</strong> {model}</span>
            </div>
            {/parts} 
        </div>
    </table>
</div>