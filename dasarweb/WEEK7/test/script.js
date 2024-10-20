function addRows(params) {
    const rowCount = document.getElementById('row-count').value;
    const tableBody = document.querySelector('#dynamic-table tbody');

    for (let index = 0; index < rowCount; index++) {
        const newRow = document.createElement('tr');
        
        newRow.innerHTML=`
            <td><input type="text" name="name[]" id="" required></td>
            <td><input type="text" name="comic[]" id="" required></td>
        `;

        tableBody.appendChild(newRow);
    }
}