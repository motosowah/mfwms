<h3>Inbound</h3>
<hr/>
<div class="box">
    <table>
        <tr>
            <td>Posting Date</td>
            <td><input type="text" name="posting_date" id="posting_date" placeholder="YYYY-MM-DD" /></td>
        </tr>
        <tr>
            <td>PO No.</td>
            <td><input type="text" name="po_number" id="po_number" placeholder="PO No." /></td>
        </tr>
        <tr>
            <td>Delivery No.</td>
            <td><input type="text" name="do_number" id="do_number" placeholder="Delivery No." /></td>
        </tr>
    </table>

    <fieldset style="padding: 10px;">
        <legend>Items</legend>
        <table class="items_list" id="items">
            <thead>
            <tr>
                <th style="width: 20px; text-align: left;">No.</th>
                <th style="width: 170px; text-align: left;">Item Code</th>
                <th style="width: 300px; text-align: left;">Item Name</th>
                <th style="width: 200px; text-align: left;">Lot No.</th>
                <th style="width: 150px; text-align: left;">Qty</th>
                <th style="width: 150px; text-align: left;">Location</th>
                <th></th>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>

        <hr/>
        <button>Add</button>
    </fieldset>
    <br/>
    

</div>

<hr/>
<pre id="text1">text1</pre>
<hr/>

<button onclick="sb()">sb</button>

<div id="item_editor_modal">
    <fieldset>
        <legend>Item Entry</legend>
        <table>
            <tr>
                <td>Item Code</td>
                <td><input type="text" id="item_code" placeholder="Item Code" /></td>
            </tr>
            <tr>
                <td>Item Name</td>
                <td><input type="text" id="item_name" placeholder="Item Name" /></td>
            </tr>
            <tr>
                <td>Lot No.</td>
                <td><input type="text" id="lot_no" placeholder="Lot No." /></td>
            </tr>
            <tr>
                <td>Qty</td>
                <td><input type="number" id="qty" placeholder="Qty" /></td>
            </tr>
            <tr>
                <td>Location</td>
                <td><input type="text" id="location" placeholder="Location" /></td>
            </tr>
        </table>
        <hr/>
        <button>Add</button>
        <button>Cancel</button>
    </fieldset>
</div>
<style>
td, th{
    padding: 5px;
}

.items_list{
    font-size: 14px;
    background-color: white;
}

.items_list th{
    background-color: #dbdbdb;
    padding: 5px;
    margin: 5px;
    border-bottom: 1px solid gray;
}

.items_list td{
    border-bottom: 1px solid gray;
}
</style>

<script>
$(function(){
    // alert('jquery loaded');
    $('#text1').append("> jquery loaded\n");

    $("#items").find('tbody')
    .append($('<tr>')
        .append($('<td>')
            // .append($('<img>')
            //     .attr('src', 'img.png')
            //     .text('Image cell')
            // )
            .append("col1")
        )
        .append($('<td>')
            .append("col2")
        )
        .append($('<td>')
            .append("col3")
        )
        .append($('<td>')
            .append("col4")
        )
        .append($('<td>')
            .append("col5")
        )
        .append($('<td>')
            .append("col6")
        )
        .append($('<td>')
            .append("<button>...</button>")
        )
    )
    .append($('<tr>')
        .append($('<td>')
            // .append($('<img>')
            //     .attr('src', 'img.png')
            //     .text('Image cell')
            // )
            .append("col1")
        )
        .append($('<td>')
            .append("col2")
        )
        .append($('<td>')
            .append("col3")
        )
        .append($('<td>')
            .append("col4")
        )
        .append($('<td>')
            .append("col5")
        )
        .append($('<td>')
            .append("col6")
        )
        .append($('<td>')
            .append("<button>...</button>")
        )
    )
    ;


    var item_index = Array();
    item_index.push('1');
    item_index.push('2');

    console.log(item_index);

    var data = {};
    data['item_code'] = 'ITEM01';
    data['item_name'] = 'ITEM 01';
    data['lot_no'] = 'LOT 01';
    data['qty'] = 12.345;
    data['location'] = '3K-2-1';

    data['1'] = data;

    data['item_code'] = 'ITEM02';
    data['item_name'] = 'ITEM 02';
    data['lot_no'] = 'LOT 02';
    data['qty'] = 10.214;
    data['location'] = '3K-2-2';

    data['2'] = data;
    console.log(data);
})

// item no. //
var i = 1;

// add new item into list //
function add_item(item_code, item_name, lot_no, qty, location){

}


// sandbox function //
function sb(){
    alert("sandbox function");
}
</script>