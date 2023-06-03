<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

</head>
<body>

    <form>
        
        <select name="sel1" id="selecionar">
            <option value="1"> um </option>
            <option value="2"> dois </option>
            <option value="3"> tres </option>
        </select>

    </form>
    
</body>
</html>

url: "http://localhost/modelo/contato-param.php?x="+selectedItem,    

<script>
    $('#selecionar').change(function() {
    var selectedItem = $(this).val();
    console.log(selectedItem);
    // Requisição ajax
    $.ajax({
        type:'GET',
        url:'http://localhost/modelo/contato-param.php',
        data:{"x":"2"},
        success:function(data){
            console.log('aaa '+data);
        }
    }
    )});

</script>