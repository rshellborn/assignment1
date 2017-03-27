<div class="row">
    <table class="table table-bordered">
        <tr>
            <th>Transaction ID</th>
            <th>Transaction Type</th>
            <th>Quantity</th>
            <th>Amount</th>
            <th>Timestamp</th>
            <th>Plant</th>
        </tr>
        {history}
        <tr>
            <td>{id}</td>
            <td>{transactionType}</td>
            <td>{quantity}</td>
            <td>{amount}</td>
            <td>{timestamp}</td>
            <td>{plant}</td>
        </tr>
        {/history} 
    </table>
</div>