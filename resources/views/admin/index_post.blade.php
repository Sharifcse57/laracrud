<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{ Html::style('css/app.css') }}
    <title>Document</title>
</head>
<body>

<button onclick="myFunction()">Click me</button>

<p id="demo"></p>
<div class="row">
    <div class="content">
        <div class="col-md-8 col-md-offset-2">
            <table class="datatable mdl-data-table dataTable" cellspacing="0" width="100%" role="grid" style="width: 100%;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title Name</th>
                        <th>title Details</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

{{ Html::script('js/app.js') }}
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script>


function myFunction(){
    document.getElementById("demo").innerHTML = "Hello World";
        $.ajax({                                    
            type: "get",
            url:"https://learnwebcode.github.io/json-example/animals-3.json",
            data:{vendorId:1},
            success: function(data){
               // var parsed_data = JSON.parse(data);
                
               console.log(data);
                // for(var key in data){
                //     //$("input[name=\'" + key + "\']").val(data[key]);
                //     console.log(data[key].foods.likes[0]);
                // }
            }
        }); 
}

</script>
<script>
    $(document).ready(function() {
        $('.datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('datatables.getdata') }}',
            columns: [
                {data: 'id', name: 'id'},
                {data: 'title', name: 'title'},
                {data: 'details', name: 'details'},
            ]
        });
    });
</script>


<!-- <table cellpadding="2" cellspacing="2" border="0" bgcolor="#dfdfdf" width="40%" align="center">
<thead>
    <tr>
        <th>Name</th>
        <th width="20%">Age</th>
        <th width="12%">Status</th>
    </tr>
</thead>
    <tbody id="tableData"></tbody>
</table>
<script type="text/javascript">
    var mainObj = [
        {
            name: "Kapil",
            age:  21,
            status: "Active"
        },
        {
            name: "John",
            age:  28,
            status: "Inactive"
        },
        {
            name: "Deos",
            age:  18,
            status: "Active"
        }
    ];
    var k = '<tbody>'
    for(i = 0;i < mainObj.length; i++){
        k+= '<tr>';
        k+= '<td>' + mainObj[i].name + '</td>';
        k+= '<td>' + mainObj[i].age + '</td>';
        k+= '<td>' + mainObj[i].status + '</td>';
        k+= '</tr>';
    }
    k+='</tbody>';
    document.getElementById('tableData').innerHTML = k;
    </script> -->



    
</body>
</html>