$(document).ready(function(){

    console.log($('#addbtn'))
    
    $('#addbtn').click(function(event){
        event.preventDefault();
        console.log("Button is clicked")
    
        let row="<div class='row'>";
        row +="<div class='col-md-2'>";
        row +="<label class='form-label'>Item</label>";
        row +="<input type='text' name='item[]' class='form-control'>";
        row +="</div>";
        row +="<div class='col-md-2'>";
        row +="<label class='form-label'>Price</label>";
        row +="<input type='number' name='price[]' class='form-control'>";
        row +="</div>";
        row +="<div class='col-md-2'>";
        row +="<label class='form-label'>Quantity</label>";
        row +="<input type='number' name='qty[]' class='form-control'>";
        row +="</div>";
        row +="<div class='col-md-2 mt-4'>";
        row +="<button class='btn btn-danger removebtn'>Remove</button>";
        row +="</div>";
        row +="</div>";
        $('#unit').append(row);
    
        // $('.removebtn').click(function(event){
        //     event.preventDefault();
        //     $(this).parent().parent().remove();
        // })
    
    
    })
    $(document).on('click','.removebtn',function(event){
        event.preventDefault();
        console.log($(this).parent())
        $(this).parent().parent().remove();
        
    })   
    
    })