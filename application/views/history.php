{sort_script}
{filterModel_script}
{filterLine_script}

<div class="row">
        <form action="" method="POST">
            <div class="col-md-3">
                <h3 style="display:inline;">Sort</h3>
                <select class="form-control" name="order" id="order">
                    <option value="timestamp">Timestamp</option>
                    <option value="model">Model</option>
                </select>
            </div>

            <div class="col-md-3">
                <h3 style="display:inline;">Filter by Line</h3>
                <select class="form-control" name="filterLine" id="filterLine">
                    <option value="all">All</option>
                    <option value="Household">Household</option>
                    <option value="Butler">Butler</option>
                    <option value="Companion">Companion</option>
                    <option value="Motely">Motely</option>
                </select>
            </div>

            <div class="col-md-3">
                <h3 style="display:inline;">Filter by Model</h3>
                <select class="form-control" name="filterModel" id="filterModel">
                    <option value="all">All</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                    <option value="H">H</option>
                    <option value="I">I</option>
                    <option value="J">J</option>
                    <option value="K">K</option>
                    <option value="L">L</option>
                    <option value="M">M</option>
                    <option value="N">N</option>
                    <option value="O">O</option>
                    <option value="P">P</option>
                    <option value="Q">Q</option>
                    <option value="R">R</option>
                    <option value="S">S</option>
                    <option value="T">T</option>
                    <option value="U">U</option>
                    <option value="V">V</option>
                    <option value="W">W</option>
                    <option value="X">X</option>
                    <option value="Y">Y</option>
                    <option value="Z">Z</option>
                </select>
            </div>

            <div class="col-md-3">
                <h3></h3>
                <input class="btn btn-primary" type="submit" value="Sort/Filter" />
            </div>
        </form>
</div>
<br/>
<div class="row">
    <table class="table table-bordered">
        <tr>
            <th class="text-center">Timestamp</th>
            <th class="text-center">Transaction Type</th>
            <th class="text-center">Item</th>
            <th class="text-center">From Plant</th>
            <th class="text-center">To Plant</th>
            <th class="text-center">Line</th>
            <th class="text-center">Model</th>
            <th class="text-center">Piece</th>
            <th class="text-center">Cost</th>
        </tr>
        {history}
        <tr>
            <td>{timestamp}</td>
            <td>{transactionType}</td>
            <td>{item}</td>
            <td>{fromPlant}</td>
            <td>{toPlant}</td>
            <td>{line}</td>
            <td>{model}</td>
            <td>{piece}</td>
            <td>${cost}</td>
        </tr>
        {/history} 
    </table>
    {pagination}
</div>