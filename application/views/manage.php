<div class="row">
    <span class="error">{error}</span>
    <span class="message">{message}</span>

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Register with PRC</a></li>
        <li><a data-toggle="tab" href="#menu1">Sell Assembled Bot</a></li>
        <li><a data-toggle="tab" href="#menu2">Reboot Plant</a></li>
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active text-center">
            <h3>Register with PRC</h3><br/>
            <form action="/manage/register" method="POST">
                <label for="plant">Plant Name</label>
                <span>kiwi</span><br/>
                <label for="token">Token</label>
                <input class="form-control customFormControl autoMargin" type="text" name="token"/>
                <div class="addTopPadding"></div>
                <input type="submit" class="btn btn-success" value="Register"/>
            </form>

        </div>
        <div id="menu1" class="tab-pane fade text-center">
            <h3>Sell Assembled Bot</h3>
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="text-center"">Assembled Robots</h1>
                    {robots}
                    <div class="col-xs-6 space">
                        <img src="/img/{image1}.jpeg"/>
                        <img src="/img/{image2}.jpeg"/>
                        <img src="/img/{image3}.jpeg"/>
                        <h1>${amount}</h1>
                        <form action="/manage/sell" method="POST">
                            <button class="btn btn-success" type="submit" value="{id}" name="robot" >Sell Robot</button>
                        </form>
                    </div>
                    {/robots}
                </div>
            </div>
        </div>
        <div id="menu2" class="tab-pane fade text-center">
            <h3>Reboot Plant</h3><br/>
            <form action="/manage/reboot" method="POST">
                <input type="submit" class="btn btn-success" value="Reboot Plant"/>
            </form>
        </div>
    </div>
</div>