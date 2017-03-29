<div class="row">
    <span id="error">{error}</span>
</div>
<div class="row">
    <!-- TODO add images -->
    <a href="parts/build"><button class="btn btn-primary">Build More Parts</button></a>
    <a href="parts/buy"><button class="btn btn-primary">Buy Parts</button></a>
    <table class="table table-bordered">
        {parts}
        <tr>
            <td>
                <a href="parts/{id}"><img src="/img/{partCode}.jpeg" /></a><br/>
                <span><strong>Line:</strong> {line}</span><br/>
                <span><strong>Model:</strong> {model}</span>
            </td>
        </tr>
        {/parts} 
    </table>
</div>