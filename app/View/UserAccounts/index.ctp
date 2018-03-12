<table>
    <thead>
    <tr>
        <th>Total</th>
        <th>Tax Total</th>
        <th>User Id</th>
        <th>Created</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($sales as $sale): ?>
        <tr>
            <td><?php echo $sale['Sale']['total']; ?></td>
            <td><?php echo $sale['Sale']['tax_total']; ?></td>
            <td><?php echo $sale['Sale']['user_id']; ?></td>
            <td><?php echo $sale['Sale']['created']; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

